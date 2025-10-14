<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class FallbackSpeechmaticsTranscriber extends JsonSerializableType
{
    /**
     * @var ?'default' $model This is the model that will be used for the transcription.
     */
    #[JsonProperty('model')]
    public ?string $model;

    /**
     * @var ?value-of<FallbackSpeechmaticsTranscriberLanguage> $language
     */
    #[JsonProperty('language')]
    public ?string $language;

    /**
     * This is the operating point for the transcription. Choose between `standard` for faster turnaround with strong accuracy or `enhanced` for highest accuracy when precision is critical.
     *
     * @default 'enhanced'
     *
     * @var ?value-of<FallbackSpeechmaticsTranscriberOperatingPoint> $operatingPoint
     */
    #[JsonProperty('operatingPoint')]
    public ?string $operatingPoint;

    /**
     * This is the region for the Speechmatics API. Choose between EU (Europe) and US (United States) regions for lower latency and data sovereignty compliance.
     *
     * @default 'eu'
     *
     * @var ?value-of<FallbackSpeechmaticsTranscriberRegion> $region
     */
    #[JsonProperty('region')]
    public ?string $region;

    /**
     * This enables speaker diarization, which identifies and separates speakers in the transcription. Essential for multi-speaker conversations and conference calls.
     *
     * @default false
     *
     * @var ?bool $enableDiarization
     */
    #[JsonProperty('enableDiarization')]
    public ?bool $enableDiarization;

    /**
     * This sets the maximum number of speakers to detect when diarization is enabled. Only used when enableDiarization is true.
     *
     * @default 2
     *
     * @var ?float $maxSpeakers
     */
    #[JsonProperty('maxSpeakers')]
    public ?float $maxSpeakers;

    /**
     * This enables partial transcripts during speech recognition. When false, only final transcripts are returned.
     *
     * @default true
     *
     * @var ?bool $enablePartials
     */
    #[JsonProperty('enablePartials')]
    public ?bool $enablePartials;

    /**
     * This sets the maximum delay in milliseconds for partial transcripts. Balances latency and accuracy.
     *
     * @default 3000
     *
     * @var ?float $maxDelay
     */
    #[JsonProperty('maxDelay')]
    public ?float $maxDelay;

    /**
     * @var array<SpeechmaticsCustomVocabularyItem> $customVocabulary
     */
    #[JsonProperty('customVocabulary'), ArrayType([SpeechmaticsCustomVocabularyItem::class])]
    public array $customVocabulary;

    /**
     * This controls how numbers are formatted in the transcription output.
     *
     * @default 'written'
     *
     * @var ?value-of<FallbackSpeechmaticsTranscriberNumeralStyle> $numeralStyle
     */
    #[JsonProperty('numeralStyle')]
    public ?string $numeralStyle;

    /**
     * This enables detection of non-speech audio events like music, applause, and laughter.
     *
     * @default false
     *
     * @var ?bool $enableEntities
     */
    #[JsonProperty('enableEntities')]
    public ?bool $enableEntities;

    /**
     * This enables automatic punctuation in the transcription output.
     *
     * @default true
     *
     * @var ?bool $enablePunctuation
     */
    #[JsonProperty('enablePunctuation')]
    public ?bool $enablePunctuation;

    /**
     * This enables automatic capitalization in the transcription output.
     *
     * @default true
     *
     * @var ?bool $enableCapitalization
     */
    #[JsonProperty('enableCapitalization')]
    public ?bool $enableCapitalization;

    /**
     * This is the sensitivity level for end-of-turn detection, which determines when a speaker has finished talking. Higher values are more sensitive.
     *
     * @default 0.5
     *
     * @var ?float $endOfTurnSensitivity
     */
    #[JsonProperty('endOfTurnSensitivity')]
    public ?float $endOfTurnSensitivity;

    /**
     * This enables removal of disfluencies (um, uh) from the transcript to create cleaner, more professional output.
     *
     * @default false
     *
     * @var ?bool $removeDisfluencies
     */
    #[JsonProperty('removeDisfluencies')]
    public ?bool $removeDisfluencies;

    /**
     * This is the minimum duration in seconds for speech segments. Shorter segments will be filtered out. Helps remove noise and improve accuracy.
     *
     * @default 0.0
     *
     * @var ?float $minimumSpeechDuration
     */
    #[JsonProperty('minimumSpeechDuration')]
    public ?float $minimumSpeechDuration;

    /**
     * @param array{
     *   customVocabulary: array<SpeechmaticsCustomVocabularyItem>,
     *   model?: ?'default',
     *   language?: ?value-of<FallbackSpeechmaticsTranscriberLanguage>,
     *   operatingPoint?: ?value-of<FallbackSpeechmaticsTranscriberOperatingPoint>,
     *   region?: ?value-of<FallbackSpeechmaticsTranscriberRegion>,
     *   enableDiarization?: ?bool,
     *   maxSpeakers?: ?float,
     *   enablePartials?: ?bool,
     *   maxDelay?: ?float,
     *   numeralStyle?: ?value-of<FallbackSpeechmaticsTranscriberNumeralStyle>,
     *   enableEntities?: ?bool,
     *   enablePunctuation?: ?bool,
     *   enableCapitalization?: ?bool,
     *   endOfTurnSensitivity?: ?float,
     *   removeDisfluencies?: ?bool,
     *   minimumSpeechDuration?: ?float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->model = $values['model'] ?? null;
        $this->language = $values['language'] ?? null;
        $this->operatingPoint = $values['operatingPoint'] ?? null;
        $this->region = $values['region'] ?? null;
        $this->enableDiarization = $values['enableDiarization'] ?? null;
        $this->maxSpeakers = $values['maxSpeakers'] ?? null;
        $this->enablePartials = $values['enablePartials'] ?? null;
        $this->maxDelay = $values['maxDelay'] ?? null;
        $this->customVocabulary = $values['customVocabulary'];
        $this->numeralStyle = $values['numeralStyle'] ?? null;
        $this->enableEntities = $values['enableEntities'] ?? null;
        $this->enablePunctuation = $values['enablePunctuation'] ?? null;
        $this->enableCapitalization = $values['enableCapitalization'] ?? null;
        $this->endOfTurnSensitivity = $values['endOfTurnSensitivity'] ?? null;
        $this->removeDisfluencies = $values['removeDisfluencies'] ?? null;
        $this->minimumSpeechDuration = $values['minimumSpeechDuration'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
