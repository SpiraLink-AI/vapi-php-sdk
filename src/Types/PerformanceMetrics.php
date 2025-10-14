<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class PerformanceMetrics extends JsonSerializableType
{
    /**
     * @var ?array<TurnLatency> $turnLatencies These are the individual latencies for each turn.
     */
    #[JsonProperty('turnLatencies'), ArrayType([TurnLatency::class])]
    public ?array $turnLatencies;

    /**
     * @var ?float $modelLatencyAverage This is the average latency for the model to output the first token.
     */
    #[JsonProperty('modelLatencyAverage')]
    public ?float $modelLatencyAverage;

    /**
     * @var ?float $voiceLatencyAverage This is the average latency for the text to speech.
     */
    #[JsonProperty('voiceLatencyAverage')]
    public ?float $voiceLatencyAverage;

    /**
     * @var ?float $transcriberLatencyAverage This is the average latency for the transcriber.
     */
    #[JsonProperty('transcriberLatencyAverage')]
    public ?float $transcriberLatencyAverage;

    /**
     * @var ?float $endpointingLatencyAverage This is the average latency for the endpointing.
     */
    #[JsonProperty('endpointingLatencyAverage')]
    public ?float $endpointingLatencyAverage;

    /**
     * @var ?float $turnLatencyAverage This is the average latency for complete turns.
     */
    #[JsonProperty('turnLatencyAverage')]
    public ?float $turnLatencyAverage;

    /**
     * @param array{
     *   turnLatencies?: ?array<TurnLatency>,
     *   modelLatencyAverage?: ?float,
     *   voiceLatencyAverage?: ?float,
     *   transcriberLatencyAverage?: ?float,
     *   endpointingLatencyAverage?: ?float,
     *   turnLatencyAverage?: ?float,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->turnLatencies = $values['turnLatencies'] ?? null;
        $this->modelLatencyAverage = $values['modelLatencyAverage'] ?? null;
        $this->voiceLatencyAverage = $values['voiceLatencyAverage'] ?? null;
        $this->transcriberLatencyAverage = $values['transcriberLatencyAverage'] ?? null;
        $this->endpointingLatencyAverage = $values['endpointingLatencyAverage'] ?? null;
        $this->turnLatencyAverage = $values['turnLatencyAverage'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
