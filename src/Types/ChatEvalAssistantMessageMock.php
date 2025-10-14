<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class ChatEvalAssistantMessageMock extends JsonSerializableType
{
    /**
     * This is the content of the assistant message.
     * This is the message that the assistant would have sent.
     *
     * @var ?string $content
     */
    #[JsonProperty('content')]
    public ?string $content;

    /**
     * @var ?array<ChatEvalAssistantMessageMockToolCall> $toolCalls This is the tool calls that will be made by the assistant.
     */
    #[JsonProperty('toolCalls'), ArrayType([ChatEvalAssistantMessageMockToolCall::class])]
    public ?array $toolCalls;

    /**
     * @param array{
     *   content?: ?string,
     *   toolCalls?: ?array<ChatEvalAssistantMessageMockToolCall>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->content = $values['content'] ?? null;
        $this->toolCalls = $values['toolCalls'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
