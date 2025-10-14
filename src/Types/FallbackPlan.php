<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class FallbackPlan extends JsonSerializableType
{
    /**
     * @var array<FallbackPlanVoicesItem> $voices This is the list of voices to fallback to in the event that the primary voice provider fails.
     */
    #[JsonProperty('voices'), ArrayType([FallbackPlanVoicesItem::class])]
    public array $voices;

    /**
     * @param array{
     *   voices: array<FallbackPlanVoicesItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->voices = $values['voices'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
