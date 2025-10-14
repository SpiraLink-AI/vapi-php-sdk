<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class EvalRunTargetSquad extends JsonSerializableType
{
    /**
     * @var ?CreateSquadDto $squad This is the transient squad that will be run against the eval
     */
    #[JsonProperty('squad')]
    public ?CreateSquadDto $squad;

    /**
     * @var ?AssistantOverrides $assistantOverrides This is the overrides that will be applied to the assistants.
     */
    #[JsonProperty('assistantOverrides')]
    public ?AssistantOverrides $assistantOverrides;

    /**
     * @var ?string $squadId This is the id of the squad that will be run against the eval
     */
    #[JsonProperty('squadId')]
    public ?string $squadId;

    /**
     * @param array{
     *   squad?: ?CreateSquadDto,
     *   assistantOverrides?: ?AssistantOverrides,
     *   squadId?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->squad = $values['squad'] ?? null;
        $this->assistantOverrides = $values['assistantOverrides'] ?? null;
        $this->squadId = $values['squadId'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
