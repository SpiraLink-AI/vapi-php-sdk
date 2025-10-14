<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class AnalysisCost extends JsonSerializableType
{
    /**
     * @var value-of<AnalysisCostAnalysisType> $analysisType This is the type of analysis performed.
     */
    #[JsonProperty('analysisType')]
    public string $analysisType;

    /**
     * @var array<string, mixed> $model This is the model that was used to perform the analysis.
     */
    #[JsonProperty('model'), ArrayType(['string' => 'mixed'])]
    public array $model;

    /**
     * @var float $promptTokens This is the number of prompt tokens used in the analysis.
     */
    #[JsonProperty('promptTokens')]
    public float $promptTokens;

    /**
     * @var float $completionTokens This is the number of completion tokens generated in the analysis.
     */
    #[JsonProperty('completionTokens')]
    public float $completionTokens;

    /**
     * @var float $cost This is the cost of the component in USD.
     */
    #[JsonProperty('cost')]
    public float $cost;

    /**
     * @param array{
     *   analysisType: value-of<AnalysisCostAnalysisType>,
     *   model: array<string, mixed>,
     *   promptTokens: float,
     *   completionTokens: float,
     *   cost: float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->analysisType = $values['analysisType'];
        $this->model = $values['model'];
        $this->promptTokens = $values['promptTokens'];
        $this->completionTokens = $values['completionTokens'];
        $this->cost = $values['cost'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
