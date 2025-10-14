<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class AnalysisCostBreakdown extends JsonSerializableType
{
    /**
     * @var ?float $summary This is the cost to summarize the call.
     */
    #[JsonProperty('summary')]
    public ?float $summary;

    /**
     * @var ?float $summaryPromptTokens This is the number of prompt tokens used to summarize the call.
     */
    #[JsonProperty('summaryPromptTokens')]
    public ?float $summaryPromptTokens;

    /**
     * @var ?float $summaryCompletionTokens This is the number of completion tokens used to summarize the call.
     */
    #[JsonProperty('summaryCompletionTokens')]
    public ?float $summaryCompletionTokens;

    /**
     * @var ?float $structuredData This is the cost to extract structured data from the call.
     */
    #[JsonProperty('structuredData')]
    public ?float $structuredData;

    /**
     * @var ?float $structuredDataPromptTokens This is the number of prompt tokens used to extract structured data from the call.
     */
    #[JsonProperty('structuredDataPromptTokens')]
    public ?float $structuredDataPromptTokens;

    /**
     * @var ?float $structuredDataCompletionTokens This is the number of completion tokens used to extract structured data from the call.
     */
    #[JsonProperty('structuredDataCompletionTokens')]
    public ?float $structuredDataCompletionTokens;

    /**
     * @var ?float $successEvaluation This is the cost to evaluate if the call was successful.
     */
    #[JsonProperty('successEvaluation')]
    public ?float $successEvaluation;

    /**
     * @var ?float $successEvaluationPromptTokens This is the number of prompt tokens used to evaluate if the call was successful.
     */
    #[JsonProperty('successEvaluationPromptTokens')]
    public ?float $successEvaluationPromptTokens;

    /**
     * @var ?float $successEvaluationCompletionTokens This is the number of completion tokens used to evaluate if the call was successful.
     */
    #[JsonProperty('successEvaluationCompletionTokens')]
    public ?float $successEvaluationCompletionTokens;

    /**
     * @var ?float $structuredOutput This is the cost to evaluate structuredOutputs from the call.
     */
    #[JsonProperty('structuredOutput')]
    public ?float $structuredOutput;

    /**
     * @var ?float $structuredOutputPromptTokens This is the number of prompt tokens used to evaluate structuredOutputs from the call.
     */
    #[JsonProperty('structuredOutputPromptTokens')]
    public ?float $structuredOutputPromptTokens;

    /**
     * @var ?float $structuredOutputCompletionTokens This is the number of completion tokens used to evaluate structuredOutputs from the call.
     */
    #[JsonProperty('structuredOutputCompletionTokens')]
    public ?float $structuredOutputCompletionTokens;

    /**
     * @param array{
     *   summary?: ?float,
     *   summaryPromptTokens?: ?float,
     *   summaryCompletionTokens?: ?float,
     *   structuredData?: ?float,
     *   structuredDataPromptTokens?: ?float,
     *   structuredDataCompletionTokens?: ?float,
     *   successEvaluation?: ?float,
     *   successEvaluationPromptTokens?: ?float,
     *   successEvaluationCompletionTokens?: ?float,
     *   structuredOutput?: ?float,
     *   structuredOutputPromptTokens?: ?float,
     *   structuredOutputCompletionTokens?: ?float,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->summary = $values['summary'] ?? null;
        $this->summaryPromptTokens = $values['summaryPromptTokens'] ?? null;
        $this->summaryCompletionTokens = $values['summaryCompletionTokens'] ?? null;
        $this->structuredData = $values['structuredData'] ?? null;
        $this->structuredDataPromptTokens = $values['structuredDataPromptTokens'] ?? null;
        $this->structuredDataCompletionTokens = $values['structuredDataCompletionTokens'] ?? null;
        $this->successEvaluation = $values['successEvaluation'] ?? null;
        $this->successEvaluationPromptTokens = $values['successEvaluationPromptTokens'] ?? null;
        $this->successEvaluationCompletionTokens = $values['successEvaluationCompletionTokens'] ?? null;
        $this->structuredOutput = $values['structuredOutput'] ?? null;
        $this->structuredOutputPromptTokens = $values['structuredOutputPromptTokens'] ?? null;
        $this->structuredOutputCompletionTokens = $values['structuredOutputCompletionTokens'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
