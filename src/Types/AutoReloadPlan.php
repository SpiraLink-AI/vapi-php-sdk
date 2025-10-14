<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class AutoReloadPlan extends JsonSerializableType
{
    /**
     * @var float $credits This the amount of credits to reload.
     */
    #[JsonProperty('credits')]
    public float $credits;

    /**
     * @var float $threshold This is the limit at which the reload is triggered.
     */
    #[JsonProperty('threshold')]
    public float $threshold;

    /**
     * @param array{
     *   credits: float,
     *   threshold: float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->credits = $values['credits'];
        $this->threshold = $values['threshold'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
