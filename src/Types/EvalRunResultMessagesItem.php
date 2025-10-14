<?php declare(strict_types=1);

namespace Vapi\Types;

use Exception;
use Vapi\Core\Json\JsonDecoder;
use Vapi\Core\Json\JsonSerializableType;

final class EvalRunResultMessagesItem extends JsonSerializableType
{
    /**
     * @var (
     *    'user'
     *   |'system'
     *   |'tool'
     *   |'assistant'
     *   |'_unknown'
     * ) $role
     */
    public readonly string $role;

    /**
     * @var (
     *    ChatEvalUserMessageMock
     *   |ChatEvalSystemMessageMock
     *   |ChatEvalToolResponseMessageMock
     *   |ChatEvalAssistantMessageMock
     *   |mixed
     * ) $value
     */
    public readonly mixed $value;

    /**
     * @param array{
     *   role: (
     *    'user'
     *   |'system'
     *   |'tool'
     *   |'assistant'
     *   |'_unknown'
     * ),
     *   value: (
     *    ChatEvalUserMessageMock
     *   |ChatEvalSystemMessageMock
     *   |ChatEvalToolResponseMessageMock
     *   |ChatEvalAssistantMessageMock
     *   |mixed
     * ),
     * } $values
     */
    private function __construct(
        array $values,
    ) {
        $this->role = $values['role'];
        $this->value = $values['value'];
    }

    /**
     * @param ChatEvalUserMessageMock $user
     * @return EvalRunResultMessagesItem
     */
    public static function user(ChatEvalUserMessageMock $user): EvalRunResultMessagesItem
    {
        return new EvalRunResultMessagesItem([
            'role' => 'user',
            'value' => $user,
        ]);
    }

    /**
     * @param ChatEvalSystemMessageMock $system
     * @return EvalRunResultMessagesItem
     */
    public static function system(ChatEvalSystemMessageMock $system): EvalRunResultMessagesItem
    {
        return new EvalRunResultMessagesItem([
            'role' => 'system',
            'value' => $system,
        ]);
    }

    /**
     * @param ChatEvalToolResponseMessageMock $tool
     * @return EvalRunResultMessagesItem
     */
    public static function tool(ChatEvalToolResponseMessageMock $tool): EvalRunResultMessagesItem
    {
        return new EvalRunResultMessagesItem([
            'role' => 'tool',
            'value' => $tool,
        ]);
    }

    /**
     * @param ChatEvalAssistantMessageMock $assistant
     * @return EvalRunResultMessagesItem
     */
    public static function assistant(ChatEvalAssistantMessageMock $assistant): EvalRunResultMessagesItem
    {
        return new EvalRunResultMessagesItem([
            'role' => 'assistant',
            'value' => $assistant,
        ]);
    }

    /**
     * @return bool
     */
    public function isUser(): bool
    {
        return $this->value instanceof ChatEvalUserMessageMock && $this->role === 'user';
    }

    /**
     * @return ChatEvalUserMessageMock
     */
    public function asUser(): ChatEvalUserMessageMock
    {
        if (! ($this->value instanceof ChatEvalUserMessageMock && $this->role === 'user')) {
            throw new Exception(
                "Expected user; got " . $this->role . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isSystem(): bool
    {
        return $this->value instanceof ChatEvalSystemMessageMock && $this->role === 'system';
    }

    /**
     * @return ChatEvalSystemMessageMock
     */
    public function asSystem(): ChatEvalSystemMessageMock
    {
        if (! ($this->value instanceof ChatEvalSystemMessageMock && $this->role === 'system')) {
            throw new Exception(
                "Expected system; got " . $this->role . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isTool(): bool
    {
        return $this->value instanceof ChatEvalToolResponseMessageMock && $this->role === 'tool';
    }

    /**
     * @return ChatEvalToolResponseMessageMock
     */
    public function asTool(): ChatEvalToolResponseMessageMock
    {
        if (! ($this->value instanceof ChatEvalToolResponseMessageMock && $this->role === 'tool')) {
            throw new Exception(
                "Expected tool; got " . $this->role . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isAssistant(): bool
    {
        return $this->value instanceof ChatEvalAssistantMessageMock && $this->role === 'assistant';
    }

    /**
     * @return ChatEvalAssistantMessageMock
     */
    public function asAssistant(): ChatEvalAssistantMessageMock
    {
        if (! ($this->value instanceof ChatEvalAssistantMessageMock && $this->role === 'assistant')) {
            throw new Exception(
                "Expected assistant; got " . $this->role . " with value of type " . get_debug_type($this->value),
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
        $result['role'] = $this->role;

        $base = parent::jsonSerialize();
        $result = array_merge($base, $result);

        switch ($this->role) {
            case 'user':
                $value = $this->asUser()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'system':
                $value = $this->asSystem()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'tool':
                $value = $this->asTool()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'assistant':
                $value = $this->asAssistant()->jsonSerialize();
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
        if (! array_key_exists('role', $data)) {
            throw new Exception(
                "JSON data is missing property 'role'",
            );
        }
        $role = $data['role'];
        if (! (is_string($role))) {
            throw new Exception(
                "Expected property 'role' in JSON data to be string, instead received " . get_debug_type($data['role']),
            );
        }

        $args['role'] = $role;
        switch ($role) {
            case 'user':
                $args['value'] = ChatEvalUserMessageMock::jsonDeserialize($data);
                break;
            case 'system':
                $args['value'] = ChatEvalSystemMessageMock::jsonDeserialize($data);
                break;
            case 'tool':
                $args['value'] = ChatEvalToolResponseMessageMock::jsonDeserialize($data);
                break;
            case 'assistant':
                $args['value'] = ChatEvalAssistantMessageMock::jsonDeserialize($data);
                break;
            case '_unknown':
            default:
                $args['role'] = '_unknown';
                $args['value'] = $data;
        }

        // @phpstan-ignore-next-line
        return new static($args);
    }
}
