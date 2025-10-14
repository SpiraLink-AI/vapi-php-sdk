<?php declare(strict_types=1);

namespace Vapi\Types;

use Exception;
use Vapi\Core\Json\JsonDecoder;
use Vapi\Core\Json\JsonSerializableType;

final class WorkflowUserEditableNodesItem extends JsonSerializableType
{
    /**
     * @var (
     *    'conversation'
     *   |'tool'
     *   |'_unknown'
     * ) $type
     */
    public readonly string $type;

    /**
     * @var (
     *    ConversationNode
     *   |ToolNode
     *   |mixed
     * ) $value
     */
    public readonly mixed $value;

    /**
     * @param array{
     *   type: (
     *    'conversation'
     *   |'tool'
     *   |'_unknown'
     * ),
     *   value: (
     *    ConversationNode
     *   |ToolNode
     *   |mixed
     * ),
     * } $values
     */
    private function __construct(
        array $values,
    ) {
        $this->type = $values['type'];
        $this->value = $values['value'];
    }

    /**
     * @param ConversationNode $conversation
     * @return WorkflowUserEditableNodesItem
     */
    public static function conversation(ConversationNode $conversation): WorkflowUserEditableNodesItem
    {
        return new WorkflowUserEditableNodesItem([
            'type' => 'conversation',
            'value' => $conversation,
        ]);
    }

    /**
     * @param ToolNode $tool
     * @return WorkflowUserEditableNodesItem
     */
    public static function tool(ToolNode $tool): WorkflowUserEditableNodesItem
    {
        return new WorkflowUserEditableNodesItem([
            'type' => 'tool',
            'value' => $tool,
        ]);
    }

    /**
     * @return bool
     */
    public function isConversation(): bool
    {
        return $this->value instanceof ConversationNode && $this->type === 'conversation';
    }

    /**
     * @return ConversationNode
     */
    public function asConversation(): ConversationNode
    {
        if (! ($this->value instanceof ConversationNode && $this->type === 'conversation')) {
            throw new Exception(
                "Expected conversation; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isTool(): bool
    {
        return $this->value instanceof ToolNode && $this->type === 'tool';
    }

    /**
     * @return ToolNode
     */
    public function asTool(): ToolNode
    {
        if (! ($this->value instanceof ToolNode && $this->type === 'tool')) {
            throw new Exception(
                "Expected tool; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }

    /**
     * @return array<mixed>
     */
    public function jsonSerialize(): array
    {
        $result = [];
        $result['type'] = $this->type;

        $base = parent::jsonSerialize();
        $result = array_merge($base, $result);

        switch ($this->type) {
            case 'conversation':
                $value = $this->asConversation()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'tool':
                $value = $this->asTool()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case '_unknown':
            default:
                if (is_null($this->value)) {
                    break;
                }
                if ($this->value instanceof JsonSerializableType) {
                    $value = $this->value->jsonSerialize();
                    $result = array_merge($value, $result);
                } elseif (is_array($this->value)) {
                    $result = array_merge($this->value, $result);
                }
        }

        return $result;
    }

    /**
     * @param string $json
     */
    public static function fromJson(string $json): static
    {
        $decodedJson = JsonDecoder::decode($json);
        if (! is_array($decodedJson)) {
            throw new Exception("Unexpected non-array decoded type: " . gettype($decodedJson));
        }

        return self::jsonDeserialize($decodedJson);
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function jsonDeserialize(array $data): static
    {
        $args = [];
        if (! array_key_exists('type', $data)) {
            throw new Exception(
                "JSON data is missing property 'type'",
            );
        }
        $type = $data['type'];
        if (! (is_string($type))) {
            throw new Exception(
                "Expected property 'type' in JSON data to be string, instead received " . get_debug_type($data['type']),
            );
        }

        $args['type'] = $type;
        switch ($type) {
            case 'conversation':
                $args['value'] = ConversationNode::jsonDeserialize($data);
                break;
            case 'tool':
                $args['value'] = ToolNode::jsonDeserialize($data);
                break;
            case '_unknown':
            default:
                $args['type'] = '_unknown';
                $args['value'] = $data;
        }

        // @phpstan-ignore-next-line
        return new static($args);
    }
}
