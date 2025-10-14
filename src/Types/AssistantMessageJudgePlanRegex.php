<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class AssistantMessageJudgePlanRegex extends JsonSerializableType
{
    /**
     * This is what that will be used to evaluate the model's message content.
     * The content will be evaluated against the regex pattern provided in the Judge Plan content field.
     * Evaluation is considered successful if the regex pattern matches any part of the assistant message content.
     *
     * @var string $content
     */
    #[JsonProperty('content')]
    public string $content;

    /**
     * This is the tool calls that will be used to evaluate the model's message content.
     * The tool name must be a valid tool that the assistant is allowed to call.
     * The values to the arguments for the tool call should be a Regular Expression.
     * Evaluation is considered successful if the regex pattern matches any part of each tool call argument.
     *
     * For the Query tool, the arguments for the tool call are in the format - {knowledgeBaseNames: ['kb_name', 'kb_name_2']}
     *
     * For the DTMF tool, the arguments for the tool call are in the format - {dtmf: "1234*"}
     *
     * For the Handoff tool, the arguments for the tool call are in the format - {destination: "assistant_id"}
     *
     * For the Transfer Call tool, the arguments for the tool call are in the format - {destination: "phone_number_or_assistant_id"}
     *
     * For all other tools, they are called without arguments or with user-defined arguments
     *
     * @var ?array<ChatEvalAssistantMessageMockToolCall> $toolCalls
     */
    #[JsonProperty('toolCalls'), ArrayType([ChatEvalAssistantMessageMockToolCall::class])]
    public ?array $toolCalls;

    /**
     * @param array{
     *   content: string,
     *   toolCalls?: ?array<ChatEvalAssistantMessageMockToolCall>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->content = $values['content'];
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
