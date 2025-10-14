<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class Analysis extends JsonSerializableType
{
    /**
     * @var ?string $summary This is the summary of the call. Customize by setting `assistant.analysisPlan.summaryPrompt`.
     */
    #[JsonProperty('summary')]
    public ?string $summary;

    /**
     * @var ?array<string, mixed> $structuredData This is the structured data extracted from the call. Customize by setting `assistant.analysisPlan.structuredDataPrompt` and/or `assistant.analysisPlan.structuredDataSchema`.
     */
    #[JsonProperty('structuredData'), ArrayType(['string' => 'mixed'])]
    public ?array $structuredData;

    /**
     * @var ?array<array<string, mixed>> $structuredDataMulti This is the structured data catalog of the call. Customize by setting `assistant.analysisPlan.structuredDataMultiPlan`.
     */
    #[JsonProperty('structuredDataMulti'), ArrayType([['string' => 'mixed']])]
    public ?array $structuredDataMulti;

    /**
     * @var ?string $successEvaluation This is the evaluation of the call. Customize by setting `assistant.analysisPlan.successEvaluationPrompt` and/or `assistant.analysisPlan.successEvaluationRubric`.
     */
    #[JsonProperty('successEvaluation')]
    public ?string $successEvaluation;

    /**
     * @param array{
     *   summary?: ?string,
     *   structuredData?: ?array<string, mixed>,
     *   structuredDataMulti?: ?array<array<string, mixed>>,
     *   successEvaluation?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->summary = $values['summary'] ?? null;
        $this->structuredData = $values['structuredData'] ?? null;
        $this->structuredDataMulti = $values['structuredDataMulti'] ?? null;
        $this->successEvaluation = $values['successEvaluation'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
