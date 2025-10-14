<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class VapiCost extends JsonSerializableType
{
    /**
     * @var value-of<VapiCostSubType> $subType This is the sub type of the cost.
     */
    #[JsonProperty('subType')]
    public string $subType;

    /**
     * @var float $minutes This is the minutes of Vapi usage. This should match `call.endedAt` - `call.startedAt`.
     */
    #[JsonProperty('minutes')]
    public float $minutes;

    /**
     * @var float $cost This is the cost of the component in USD.
     */
    #[JsonProperty('cost')]
    public float $cost;

    /**
     * @param array{
     *   subType: value-of<VapiCostSubType>,
     *   minutes: float,
     *   cost: float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->subType = $values['subType'];
        $this->minutes = $values['minutes'];
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
