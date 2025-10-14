<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class SuccessEvaluationPlan extends JsonSerializableType
{
    /**
     * This enforces the rubric of the evaluation. The output is stored in `call.analysis.successEvaluation`.
     *
     * Options include:
     * - 'NumericScale': A scale of 1 to 10.
     * - 'DescriptiveScale': A scale of Excellent, Good, Fair, Poor.
     * - 'Checklist': A checklist of criteria and their status.
     * - 'Matrix': A grid that evaluates multiple criteria across different performance levels.
     * - 'PercentageScale': A scale of 0% to 100%.
     * - 'LikertScale': A scale of Strongly Agree, Agree, Neutral, Disagree, Strongly Disagree.
     * - 'AutomaticRubric': Automatically break down evaluation into several criteria, each with its own score.
     * - 'PassFail': A simple 'true' if call passed, 'false' if not.
     *
     * Default is 'PassFail'.
     *
     * @var ?value-of<SuccessEvaluationPlanRubric> $rubric
     */
    #[JsonProperty('rubric')]
    public ?string $rubric;

    /**
     * These are the messages used to generate the success evaluation.
     *
     * @default: ```
     * [
     *   {
     *     "role": "system",
     *     "content": "You are an expert call evaluator. You will be given a transcript of a call and the system prompt of the AI participant. Determine if the call was successful based on the objectives inferred from the system prompt. DO NOT return anything except the result.\n\nRubric:\\n{{rubric}}\n\nOnly respond with the result."
     *   },
     *   {
     *     "role": "user",
     *     "content": "Here is the transcript:\n\n{{transcript}}\n\n"
     *   },
     *   {
     *     "role": "user",
     *     "content": "Here was the system prompt of the call:\n\n{{systemPrompt}}\n\n. Here is the ended reason of the call:\n\n{{endedReason}}\n\n"
     *   }
     * ]```
     *
     * You can customize by providing any messages you want.
     *
     * Here are the template variables available:
     * - {{transcript}}: the transcript of the call from `call.artifact.transcript`- {{systemPrompt}}: the system prompt of the call from `assistant.model.messages[type=system].content`- {{messages}}: the messages of the call from `assistant.model.messages`- {{rubric}}: the rubric of the success evaluation from `successEvaluationPlan.rubric`- {{endedReason}}: the ended reason of the call from `call.endedReason`
     *
     * @var ?array<array<string, mixed>> $messages
     */
    #[JsonProperty('messages'), ArrayType([['string' => 'mixed']])]
    public ?array $messages;

    /**
     * This determines whether a success evaluation is generated and stored in `call.analysis.successEvaluation`. Defaults to true.
     *
     * Usage:
     * - If you want to disable the success evaluation, set this to false.
     *
     * @default true
     *
     * @var ?bool $enabled
     */
    #[JsonProperty('enabled')]
    public ?bool $enabled;

    /**
     * This is how long the request is tried before giving up. When request times out, `call.analysis.successEvaluation` will be empty.
     *
     * Usage:
     * - To guarantee the success evaluation is generated, set this value high. Note, this will delay the end of call report in cases where model is slow to respond.
     *
     * @default 5 seconds
     *
     * @var ?float $timeoutSeconds
     */
    #[JsonProperty('timeoutSeconds')]
    public ?float $timeoutSeconds;

    /**
     * @param array{
     *   rubric?: ?value-of<SuccessEvaluationPlanRubric>,
     *   messages?: ?array<array<string, mixed>>,
     *   enabled?: ?bool,
     *   timeoutSeconds?: ?float,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->rubric = $values['rubric'] ?? null;
        $this->messages = $values['messages'] ?? null;
        $this->enabled = $values['enabled'] ?? null;
        $this->timeoutSeconds = $values['timeoutSeconds'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
