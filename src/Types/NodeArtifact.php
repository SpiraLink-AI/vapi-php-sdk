<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;
use Vapi\Core\Types\Union;

final class NodeArtifact extends JsonSerializableType
{
    /**
     * @var ?array<(
     *    UserMessage
     *   |SystemMessage
     *   |BotMessage
     *   |ToolCallMessage
     *   |ToolCallResultMessage
     * )> $messages These are the messages that were spoken during the node.
     */
    #[JsonProperty('messages'), ArrayType([new Union(UserMessage::class, SystemMessage::class, BotMessage::class, ToolCallMessage::class, ToolCallResultMessage::class)])]
    public ?array $messages;

    /**
     * @var ?string $nodeName This is the node name.
     */
    #[JsonProperty('nodeName')]
    public ?string $nodeName;

    /**
     * @var ?array<string, mixed> $variableValues These are the variable values that were extracted from the node.
     */
    #[JsonProperty('variableValues'), ArrayType(['string' => 'mixed'])]
    public ?array $variableValues;

    /**
     * @param array{
     *   messages?: ?array<(
     *    UserMessage
     *   |SystemMessage
     *   |BotMessage
     *   |ToolCallMessage
     *   |ToolCallResultMessage
     * )>,
     *   nodeName?: ?string,
     *   variableValues?: ?array<string, mixed>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->messages = $values['messages'] ?? null;
        $this->nodeName = $values['nodeName'] ?? null;
        $this->variableValues = $values['variableValues'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
