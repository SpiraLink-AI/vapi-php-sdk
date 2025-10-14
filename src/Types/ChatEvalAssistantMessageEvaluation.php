<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class ChatEvalAssistantMessageEvaluation extends JsonSerializableType
{
    /**
     * This is the role of the message author.
     * For an assistant message evaluation, the role is always 'assistant'
     * @default 'assistant'
     *
     * @var 'assistant' $role
     */
    #[JsonProperty('role')]
    public string $role;

    /**
     * This is the judge plan that instructs how to evaluate the assistant message.
     * The assistant message can be evaluated against fixed content (exact match or RegEx) or with an LLM-as-judge by defining the evaluation criteria in a prompt.
     *
     * @var ChatEvalAssistantMessageEvaluationJudgePlan $judgePlan
     */
    #[JsonProperty('judgePlan')]
    public ChatEvalAssistantMessageEvaluationJudgePlan $judgePlan;

    /**
     * This is the plan for how the overall evaluation will proceed after the assistant message is evaluated.
     * This lets you configure whether to stop the evaluation if this message fails, and whether to override any content for future turns
     *
     * @var ?AssistantMessageEvaluationContinuePlan $continuePlan
     */
    #[JsonProperty('continuePlan')]
    public ?AssistantMessageEvaluationContinuePlan $continuePlan;

    /**
     * @param array{
     *   role: 'assistant',
     *   judgePlan: ChatEvalAssistantMessageEvaluationJudgePlan,
     *   continuePlan?: ?AssistantMessageEvaluationContinuePlan,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->role = $values['role'];
        $this->judgePlan = $values['judgePlan'];
        $this->continuePlan = $values['continuePlan'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
