<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class FallbackAssemblyAiTranscriber extends JsonSerializableType
{
    /**
     * @var ?'en' $language This is the language that will be set for the transcription.
     */
    #[JsonProperty('language')]
    public ?string $language;

    /**
     * Transcripts below this confidence threshold will be discarded.
     *
     * @default 0.4
     *
     * @var ?float $confidenceThreshold
     */
    #[JsonProperty('confidenceThreshold')]
    public ?float $confidenceThreshold;

    /**
     * This enables formatting of transcripts.
     *
     * @default true
     *
     * @var ?bool $formatTurns
     */
    #[JsonProperty('formatTurns')]
    public ?bool $formatTurns;

    /**
     * This is the end of turn confidence threshold. The minimum confidence that the end of turn is detected.
     * Note: Only used if startSpeakingPlan.smartEndpointingPlan is not set.
     * @min 0
     * @max 1
     * @default 0.7
     *
     * @var ?float $endOfTurnConfidenceThreshold
     */
    #[JsonProperty('endOfTurnConfidenceThreshold')]
    public ?float $endOfTurnConfidenceThreshold;

    /**
     * This is the minimum end of turn silence when confident in milliseconds.
     * Note: Only used if startSpeakingPlan.smartEndpointingPlan is not set.
     * @default 160
     *
     * @var ?float $minEndOfTurnSilenceWhenConfident
     */
    #[JsonProperty('minEndOfTurnSilenceWhenConfident')]
    public ?float $minEndOfTurnSilenceWhenConfident;

    /**
     * @var ?float $wordFinalizationMaxWaitTime
     */
    #[JsonProperty('wordFinalizationMaxWaitTime')]
    public ?float $wordFinalizationMaxWaitTime;

    /**
     * This is the maximum turn silence time in milliseconds.
     * Note: Only used if startSpeakingPlan.smartEndpointingPlan is not set.
     * @default 400
     *
     * @var ?float $maxTurnSilence
     */
    #[JsonProperty('maxTurnSilence')]
    public ?float $maxTurnSilence;

    /**
     * @var ?string $realtimeUrl The WebSocket URL that the transcriber connects to.
     */
    #[JsonProperty('realtimeUrl')]
    public ?string $realtimeUrl;

    /**
     * @var ?array<string> $wordBoost Add up to 2500 characters of custom vocabulary.
     */
    #[JsonProperty('wordBoost'), ArrayType(['string'])]
    public ?array $wordBoost;

    /**
     * Keyterms prompting improves recognition accuracy for specific words and phrases.
     * Can include up to 100 keyterms, each up to 50 characters.
     * Costs an additional $0.04/hour when enabled.
     *
     * @var ?array<string> $keytermsPrompt
     */
    #[JsonProperty('keytermsPrompt'), ArrayType(['string'])]
    public ?array $keytermsPrompt;

    /**
     * @var ?float $endUtteranceSilenceThreshold The duration of the end utterance silence threshold in milliseconds.
     */
    #[JsonProperty('endUtteranceSilenceThreshold')]
    public ?float $endUtteranceSilenceThreshold;

    /**
     * Disable partial transcripts.
     * Set to `true` to not receive partial transcripts. Defaults to `false`.
     *
     * @var ?bool $disablePartialTranscripts
     */
    #[JsonProperty('disablePartialTranscripts')]
    public ?bool $disablePartialTranscripts;

    /**
     * @param array{
     *   language?: ?'en',
     *   confidenceThreshold?: ?float,
     *   formatTurns?: ?bool,
     *   endOfTurnConfidenceThreshold?: ?float,
     *   minEndOfTurnSilenceWhenConfident?: ?float,
     *   wordFinalizationMaxWaitTime?: ?float,
     *   maxTurnSilence?: ?float,
     *   realtimeUrl?: ?string,
     *   wordBoost?: ?array<string>,
     *   keytermsPrompt?: ?array<string>,
     *   endUtteranceSilenceThreshold?: ?float,
     *   disablePartialTranscripts?: ?bool,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->language = $values['language'] ?? null;
        $this->confidenceThreshold = $values['confidenceThreshold'] ?? null;
        $this->formatTurns = $values['formatTurns'] ?? null;
        $this->endOfTurnConfidenceThreshold = $values['endOfTurnConfidenceThreshold'] ?? null;
        $this->minEndOfTurnSilenceWhenConfident = $values['minEndOfTurnSilenceWhenConfident'] ?? null;
        $this->wordFinalizationMaxWaitTime = $values['wordFinalizationMaxWaitTime'] ?? null;
        $this->maxTurnSilence = $values['maxTurnSilence'] ?? null;
        $this->realtimeUrl = $values['realtimeUrl'] ?? null;
        $this->wordBoost = $values['wordBoost'] ?? null;
        $this->keytermsPrompt = $values['keytermsPrompt'] ?? null;
        $this->endUtteranceSilenceThreshold = $values['endUtteranceSilenceThreshold'] ?? null;
        $this->disablePartialTranscripts = $values['disablePartialTranscripts'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
