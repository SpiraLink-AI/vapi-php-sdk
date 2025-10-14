<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class StopSpeakingPlan extends JsonSerializableType
{
    /**
     * This is the number of words that the customer has to say before the assistant will stop talking.
     *
     * Words like "stop", "actually", "no", etc. will always interrupt immediately regardless of this value.
     *
     * Words like "okay", "yeah", "right" will never interrupt.
     *
     * When set to 0, `voiceSeconds` is used in addition to the transcriptions to determine the customer has started speaking.
     *
     * Defaults to 0.
     *
     * @default 0
     *
     * @var ?float $numWords
     */
    #[JsonProperty('numWords')]
    public ?float $numWords;

    /**
     * This is the seconds customer has to speak before the assistant stops talking. This uses the VAD (Voice Activity Detection) spike to determine if the customer has started speaking.
     *
     * Considerations:
     * - A lower value might be more responsive but could potentially pick up non-speech sounds.
     * - A higher value reduces false positives but might slightly delay the detection of speech onset.
     *
     * This is only used if `numWords` is set to 0.
     *
     * Defaults to 0.2
     *
     * @default 0.2
     *
     * @var ?float $voiceSeconds
     */
    #[JsonProperty('voiceSeconds')]
    public ?float $voiceSeconds;

    /**
     * This is the seconds to wait before the assistant will start talking again after being interrupted.
     *
     * Defaults to 1.
     *
     * @default 1
     *
     * @var ?float $backoffSeconds
     */
    #[JsonProperty('backoffSeconds')]
    public ?float $backoffSeconds;

    /**
     * These are the phrases that will never interrupt the assistant, even if numWords threshold is met.
     * These are typically acknowledgement or backchanneling phrases.
     *
     * @var ?array<string> $acknowledgementPhrases
     */
    #[JsonProperty('acknowledgementPhrases'), ArrayType(['string'])]
    public ?array $acknowledgementPhrases;

    /**
     * These are the phrases that will always interrupt the assistant immediately, regardless of numWords.
     * These are typically phrases indicating disagreement or desire to stop.
     *
     * @var ?array<string> $interruptionPhrases
     */
    #[JsonProperty('interruptionPhrases'), ArrayType(['string'])]
    public ?array $interruptionPhrases;

    /**
     * @param array{
     *   numWords?: ?float,
     *   voiceSeconds?: ?float,
     *   backoffSeconds?: ?float,
     *   acknowledgementPhrases?: ?array<string>,
     *   interruptionPhrases?: ?array<string>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->numWords = $values['numWords'] ?? null;
        $this->voiceSeconds = $values['voiceSeconds'] ?? null;
        $this->backoffSeconds = $values['backoffSeconds'] ?? null;
        $this->acknowledgementPhrases = $values['acknowledgementPhrases'] ?? null;
        $this->interruptionPhrases = $values['interruptionPhrases'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
