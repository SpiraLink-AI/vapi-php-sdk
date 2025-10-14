<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class FallbackTranscriberPlan extends JsonSerializableType
{
    /**
     * @var array<FallbackTranscriberPlanTranscribersItem> $transcribers
     */
    #[JsonProperty('transcribers'), ArrayType([FallbackTranscriberPlanTranscribersItem::class])]
    public array $transcribers;

    /**
     * @param array{
     *   transcribers: array<FallbackTranscriberPlanTranscribersItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->transcribers = $values['transcribers'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
