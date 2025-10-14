<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class VoiceCost extends JsonSerializableType
{
    /**
     * This is the voice that was used during the call.
     *
     * This matches one of the following:
     * - `call.assistant.voice`,
     * - `call.assistantId->voice`,
     * - `call.squad[n].assistant.voice`,
     * - `call.squad[n].assistantId->voice`,
     * - `call.squadId->[n].assistant.voice`,
     * - `call.squadId->[n].assistantId->voice`.
     *
     * @var array<string, mixed> $voice
     */
    #[JsonProperty('voice'), ArrayType(['string' => 'mixed'])]
    public array $voice;

    /**
     * @var float $characters This is the number of characters that were generated during the call. These should be total characters used in the call for single assistant calls, while squad calls will have multiple voice costs one for each assistant that was used.
     */
    #[JsonProperty('characters')]
    public float $characters;

    /**
     * @var float $cost This is the cost of the component in USD.
     */
    #[JsonProperty('cost')]
    public float $cost;

    /**
     * @param array{
     *   voice: array<string, mixed>,
     *   characters: float,
     *   cost: float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->voice = $values['voice'];
        $this->characters = $values['characters'];
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
