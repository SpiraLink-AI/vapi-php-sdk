<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class GladiaTranscriber extends JsonSerializableType
{
    /**
     * @var ?value-of<GladiaTranscriberModel> $model This is the Gladia model that will be used. Default is 'fast'
     */
    #[JsonProperty('model')]
    public ?string $model;

    /**
     * @var ?value-of<GladiaTranscriberLanguageBehaviour> $languageBehaviour Defines how the transcription model detects the audio language. Default value is 'automatic single language'.
     */
    #[JsonProperty('languageBehaviour')]
    public ?string $languageBehaviour;

    /**
     * @var ?value-of<GladiaTranscriberLanguage> $language Defines the language to use for the transcription. Required when languageBehaviour is 'manual'.
     */
    #[JsonProperty('language')]
    public ?string $language;

    /**
     * @var ?value-of<GladiaTranscriberLanguages> $languages Defines the languages to use for the transcription. Required when languageBehaviour is 'manual'.
     */
    #[JsonProperty('languages')]
    public ?string $languages;

    /**
     * Provides a custom vocabulary to the model to improve accuracy of transcribing context specific words, technical terms, names, etc. If empty, this argument is ignored.
     * ⚠️ Warning ⚠️: Please be aware that the transcription_hint field has a character limit of 600. If you provide a transcription_hint longer than 600 characters, it will be automatically truncated to meet this limit.
     *
     * @var ?string $transcriptionHint
     */
    #[JsonProperty('transcriptionHint')]
    public ?string $transcriptionHint;

    /**
     * @var ?bool $prosody If prosody is true, you will get a transcription that can contain prosodies i.e. (laugh) (giggles) (malefic laugh) (toss) (music)… Default value is false.
     */
    #[JsonProperty('prosody')]
    public ?bool $prosody;

    /**
     * @var ?bool $audioEnhancer If true, audio will be pre-processed to improve accuracy but latency will increase. Default value is false.
     */
    #[JsonProperty('audioEnhancer')]
    public ?bool $audioEnhancer;

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
     * @var ?float $endpointing Endpointing time in seconds - time to wait before considering speech ended
     */
    #[JsonProperty('endpointing')]
    public ?float $endpointing;

    /**
     * @var ?float $speechThreshold Speech threshold - sensitivity configuration for speech detection (0.0 to 1.0)
     */
    #[JsonProperty('speechThreshold')]
    public ?float $speechThreshold;

    /**
     * @var ?bool $customVocabularyEnabled Enable custom vocabulary for improved accuracy
     */
    #[JsonProperty('customVocabularyEnabled')]
    public ?bool $customVocabularyEnabled;

    /**
     * @var ?GladiaCustomVocabularyConfigDto $customVocabularyConfig Custom vocabulary configuration
     */
    #[JsonProperty('customVocabularyConfig')]
    public ?GladiaCustomVocabularyConfigDto $customVocabularyConfig;

    /**
     * @var ?value-of<GladiaTranscriberRegion> $region Region for processing audio (us-west or eu-west)
     */
    #[JsonProperty('region')]
    public ?string $region;

    /**
     * @var ?bool $receivePartialTranscripts Enable partial transcripts for low-latency streaming transcription
     */
    #[JsonProperty('receivePartialTranscripts')]
    public ?bool $receivePartialTranscripts;

    /**
     * @var ?FallbackTranscriberPlan $fallbackPlan This is the plan for voice provider fallbacks in the event that the primary voice provider fails.
     */
    #[JsonProperty('fallbackPlan')]
    public ?FallbackTranscriberPlan $fallbackPlan;

    /**
     * @param array{
     *   model?: ?value-of<GladiaTranscriberModel>,
     *   languageBehaviour?: ?value-of<GladiaTranscriberLanguageBehaviour>,
     *   language?: ?value-of<GladiaTranscriberLanguage>,
     *   languages?: ?value-of<GladiaTranscriberLanguages>,
     *   transcriptionHint?: ?string,
     *   prosody?: ?bool,
     *   audioEnhancer?: ?bool,
     *   confidenceThreshold?: ?float,
     *   endpointing?: ?float,
     *   speechThreshold?: ?float,
     *   customVocabularyEnabled?: ?bool,
     *   customVocabularyConfig?: ?GladiaCustomVocabularyConfigDto,
     *   region?: ?value-of<GladiaTranscriberRegion>,
     *   receivePartialTranscripts?: ?bool,
     *   fallbackPlan?: ?FallbackTranscriberPlan,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->model = $values['model'] ?? null;
        $this->languageBehaviour = $values['languageBehaviour'] ?? null;
        $this->language = $values['language'] ?? null;
        $this->languages = $values['languages'] ?? null;
        $this->transcriptionHint = $values['transcriptionHint'] ?? null;
        $this->prosody = $values['prosody'] ?? null;
        $this->audioEnhancer = $values['audioEnhancer'] ?? null;
        $this->confidenceThreshold = $values['confidenceThreshold'] ?? null;
        $this->endpointing = $values['endpointing'] ?? null;
        $this->speechThreshold = $values['speechThreshold'] ?? null;
        $this->customVocabularyEnabled = $values['customVocabularyEnabled'] ?? null;
        $this->customVocabularyConfig = $values['customVocabularyConfig'] ?? null;
        $this->region = $values['region'] ?? null;
        $this->receivePartialTranscripts = $values['receivePartialTranscripts'] ?? null;
        $this->fallbackPlan = $values['fallbackPlan'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
