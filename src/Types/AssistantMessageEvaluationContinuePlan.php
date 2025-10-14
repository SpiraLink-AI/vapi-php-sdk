<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class AssistantMessageEvaluationContinuePlan extends JsonSerializableType
{
    /**
     * This is whether the evaluation should exit if the assistant message evaluates to false.
     * By default, it is false and the evaluation will continue.
     * @default false
     *
     * @var ?bool $exitOnFailureEnabled
     */
    #[JsonProperty('exitOnFailureEnabled')]
    public ?bool $exitOnFailureEnabled;

    /**
     * This is the content that will be used in the conversation for this assistant turn moving forward if provided.
     * It will override the content received from the model.
     *
     * @var ?string $contentOverride
     */
    #[JsonProperty('contentOverride')]
    public ?string $contentOverride;

    /**
     * This is the tool calls that will be used in the conversation for this assistant turn moving forward if provided.
     * It will override the tool calls received from the model.
     *
     * @var ?array<ChatEvalAssistantMessageMockToolCall> $toolCallsOverride
     */
    #[JsonProperty('toolCallsOverride'), ArrayType([ChatEvalAssistantMessageMockToolCall::class])]
    public ?array $toolCallsOverride;

    /**
     * @param array{
     *   exitOnFailureEnabled?: ?bool,
     *   contentOverride?: ?string,
     *   toolCallsOverride?: ?array<ChatEvalAssistantMessageMockToolCall>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->exitOnFailureEnabled = $values['exitOnFailureEnabled'] ?? null;
        $this->contentOverride = $values['contentOverride'] ?? null;
        $this->toolCallsOverride = $values['toolCallsOverride'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
