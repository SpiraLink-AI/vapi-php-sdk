<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class ModelCost extends JsonSerializableType
{
    /**
     * This is the model that was used during the call.
     *
     * This matches one of the following:
     * - `call.assistant.model`,
     * - `call.assistantId->model`,
     * - `call.squad[n].assistant.model`,
     * - `call.squad[n].assistantId->model`,
     * - `call.squadId->[n].assistant.model`,
     * - `call.squadId->[n].assistantId->model`.
     *
     * @var array<string, mixed> $model
     */
    #[JsonProperty('model'), ArrayType(['string' => 'mixed'])]
    public array $model;

    /**
     * @var float $promptTokens This is the number of prompt tokens used in the call. These should be total prompt tokens used in the call for single assistant calls, while squad calls will have multiple model costs one for each assistant that was used.
     */
    #[JsonProperty('promptTokens')]
    public float $promptTokens;

    /**
     * @var float $completionTokens This is the number of completion tokens generated in the call. These should be total completion tokens used in the call for single assistant calls, while squad calls will have multiple model costs one for each assistant that was used.
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
