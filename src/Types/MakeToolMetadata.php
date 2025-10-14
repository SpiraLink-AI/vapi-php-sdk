<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class MakeToolMetadata extends JsonSerializableType
{
    /**
     * @var ?float $scenarioId
     */
    #[JsonProperty('scenarioId')]
    public ?float $scenarioId;

    /**
     * @var ?float $triggerHookId
     */
    #[JsonProperty('triggerHookId')]
    public ?float $triggerHookId;

    /**
     * @param array{
     *   scenarioId?: ?float,
     *   triggerHookId?: ?float,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->scenarioId = $values['scenarioId'] ?? null;
        $this->triggerHookId = $values['triggerHookId'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
