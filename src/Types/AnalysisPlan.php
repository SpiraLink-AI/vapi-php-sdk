<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class AnalysisPlan extends JsonSerializableType
{
    /**
     * The minimum number of messages required to run the analysis plan.
     * If the number of messages is less than this, analysis will be skipped.
     * @default 2
     *
     * @var ?float $minMessagesThreshold
     */
    #[JsonProperty('minMessagesThreshold')]
    public ?float $minMessagesThreshold;

    /**
     * @var ?SummaryPlan $summaryPlan This is the plan for generating the summary of the call. This outputs to `call.analysis.summary`.
     */
    #[JsonProperty('summaryPlan')]
    public ?SummaryPlan $summaryPlan;

    /**
     * @var ?StructuredDataPlan $structuredDataPlan This is the plan for generating the structured data from the call. This outputs to `call.analysis.structuredData`.
     */
    #[JsonProperty('structuredDataPlan')]
    public ?StructuredDataPlan $structuredDataPlan;

    /**
     * @var ?array<StructuredDataMultiPlan> $structuredDataMultiPlan This is an array of structured data plan catalogs. Each entry includes a `key` and a `plan` for generating the structured data from the call. This outputs to `call.analysis.structuredDataMulti`.
     */
    #[JsonProperty('structuredDataMultiPlan'), ArrayType([StructuredDataMultiPlan::class])]
    public ?array $structuredDataMultiPlan;

    /**
     * @var ?SuccessEvaluationPlan $successEvaluationPlan This is the plan for generating the success evaluation of the call. This outputs to `call.analysis.successEvaluation`.
     */
    #[JsonProperty('successEvaluationPlan')]
    public ?SuccessEvaluationPlan $successEvaluationPlan;

    /**
     * This is an array of outcome UUIDs to be calculated during analysis.
     * The outcomes will be calculated and stored in `call.analysis.outcomes`.
     *
     * @var ?array<string> $outcomeIds
     */
    #[JsonProperty('outcomeIds'), ArrayType(['string'])]
    public ?array $outcomeIds;

    /**
     * @param array{
     *   minMessagesThreshold?: ?float,
     *   summaryPlan?: ?SummaryPlan,
     *   structuredDataPlan?: ?StructuredDataPlan,
     *   structuredDataMultiPlan?: ?array<StructuredDataMultiPlan>,
     *   successEvaluationPlan?: ?SuccessEvaluationPlan,
     *   outcomeIds?: ?array<string>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->minMessagesThreshold = $values['minMessagesThreshold'] ?? null;
        $this->summaryPlan = $values['summaryPlan'] ?? null;
        $this->structuredDataPlan = $values['structuredDataPlan'] ?? null;
        $this->structuredDataMultiPlan = $values['structuredDataMultiPlan'] ?? null;
        $this->successEvaluationPlan = $values['successEvaluationPlan'] ?? null;
        $this->outcomeIds = $values['outcomeIds'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
