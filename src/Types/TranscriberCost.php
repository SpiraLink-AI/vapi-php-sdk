<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class TranscriberCost extends JsonSerializableType
{
    /**
     * This is the transcriber that was used during the call.
     *
     * This matches one of the below:
     * - `call.assistant.transcriber`,
     * - `call.assistantId->transcriber`,
     * - `call.squad[n].assistant.transcriber`,
     * - `call.squad[n].assistantId->transcriber`,
     * - `call.squadId->[n].assistant.transcriber`,
     * - `call.squadId->[n].assistantId->transcriber`.
     *
     * @var array<string, mixed> $transcriber
     */
    #[JsonProperty('transcriber'), ArrayType(['string' => 'mixed'])]
    public array $transcriber;

    /**
     * @var float $minutes This is the minutes of `transcriber` usage. This should match `call.endedAt` - `call.startedAt` for single assistant calls, while squad calls will have multiple transcriber costs one for each assistant that was used.
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
     *   transcriber: array<string, mixed>,
     *   minutes: float,
     *   cost: float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->transcriber = $values['transcriber'];
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
