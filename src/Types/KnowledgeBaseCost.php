<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class KnowledgeBaseCost extends JsonSerializableType
{
    /**
     * @var array<string, mixed> $model This is the model that was used for processing the knowledge base.
     */
    #[JsonProperty('model'), ArrayType(['string' => 'mixed'])]
    public array $model;

    /**
     * @var float $promptTokens This is the number of prompt tokens used in the knowledge base query.
     */
    #[JsonProperty('promptTokens')]
    public float $promptTokens;

    /**
     * @var float $completionTokens This is the number of completion tokens generated in the knowledge base query.
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
     *   model: array<string, mixed>,
     *   promptTokens: float,
     *   completionTokens: float,
     *   cost: float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
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
