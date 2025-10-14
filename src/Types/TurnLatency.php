<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class TurnLatency extends JsonSerializableType
{
    /**
     * @var ?float $modelLatency This is the model latency for the first token.
     */
    #[JsonProperty('modelLatency')]
    public ?float $modelLatency;

    /**
     * @var ?float $voiceLatency This is the voice latency from the model output.
     */
    #[JsonProperty('voiceLatency')]
    public ?float $voiceLatency;

    /**
     * @var ?float $transcriberLatency This is the transcriber latency from the user speech.
     */
    #[JsonProperty('transcriberLatency')]
    public ?float $transcriberLatency;

    /**
     * @var ?float $endpointingLatency This is the endpointing latency.
     */
    #[JsonProperty('endpointingLatency')]
    public ?float $endpointingLatency;

    /**
     * @var ?float $turnLatency This is the latency for the whole turn.
     */
    #[JsonProperty('turnLatency')]
    public ?float $turnLatency;

    /**
     * @param array{
     *   modelLatency?: ?float,
     *   voiceLatency?: ?float,
     *   transcriberLatency?: ?float,
     *   endpointingLatency?: ?float,
     *   turnLatency?: ?float,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->modelLatency = $values['modelLatency'] ?? null;
        $this->voiceLatency = $values['voiceLatency'] ?? null;
        $this->transcriberLatency = $values['transcriberLatency'] ?? null;
        $this->endpointingLatency = $values['endpointingLatency'] ?? null;
        $this->turnLatency = $values['turnLatency'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
