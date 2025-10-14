<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class FallbackElevenLabsVoice extends JsonSerializableType
{
    /**
     * @var ?bool $cachingEnabled This is the flag to toggle voice caching for the assistant.
     */
    #[JsonProperty('cachingEnabled')]
    public ?bool $cachingEnabled;

    /**
     * @var (
     *    'burt'
     *   |'marissa'
     *   |'andrea'
     *   |'sarah'
     *   |'phillip'
     *   |'steve'
     *   |'joseph'
     *   |'myra'
     *   |'paula'
     *   |'ryan'
     *   |'drew'
     *   |'paul'
     *   |'mrb'
     *   |'matilda'
     *   |'mark'
     *   |string
     * ) $voiceId This is the provider-specific ID that will be used. Ensure the Voice is present in your 11Labs Voice Library.
     */
    #[JsonProperty('voiceId')]
    public string $voiceId;

    /**
     * @var ?float $stability Defines the stability for voice settings.
     */
    #[JsonProperty('stability')]
    public ?float $stability;

    /**
     * @var ?float $similarityBoost Defines the similarity boost for voice settings.
     */
    #[JsonProperty('similarityBoost')]
    public ?float $similarityBoost;

    /**
     * @var ?float $style Defines the style for voice settings.
     */
    #[JsonProperty('style')]
    public ?float $style;

    /**
     * @var ?bool $useSpeakerBoost Defines the use speaker boost for voice settings.
     */
    #[JsonProperty('useSpeakerBoost')]
    public ?bool $useSpeakerBoost;

    /**
     * @var ?float $speed Defines the speed for voice settings.
     */
    #[JsonProperty('speed')]
    public ?float $speed;

    /**
     * @var ?float $optimizeStreamingLatency Defines the optimize streaming latency for voice settings. Defaults to 3.
     */
    #[JsonProperty('optimizeStreamingLatency')]
    public ?float $optimizeStreamingLatency;

    /**
     * This enables the use of https://elevenlabs.io/docs/speech-synthesis/prompting#pronunciation. Defaults to false to save latency.
     *
     * @default false
     *
     * @var ?bool $enableSsmlParsing
     */
    #[JsonProperty('enableSsmlParsing')]
    public ?bool $enableSsmlParsing;

    /**
     * @var ?bool $autoMode Defines the auto mode for voice settings. Defaults to false.
     */
    #[JsonProperty('autoMode')]
    public ?bool $autoMode;

    /**
     * @var ?value-of<FallbackElevenLabsVoiceModel> $model This is the model that will be used. Defaults to 'eleven_turbo_v2' if not specified.
     */
    #[JsonProperty('model')]
    public ?string $model;

    /**
     * @var ?string $language This is the language (ISO 639-1) that is enforced for the model. Currently only Turbo v2.5 supports language enforcement. For other models, an error will be returned if language code is provided.
     */
    #[JsonProperty('language')]
    public ?string $language;

    /**
     * @var ?array<ElevenLabsPronunciationDictionaryLocator> $pronunciationDictionaryLocators This is the pronunciation dictionary locators to use.
     */
    #[JsonProperty('pronunciationDictionaryLocators'), ArrayType([ElevenLabsPronunciationDictionaryLocator::class])]
    public ?array $pronunciationDictionaryLocators;

    /**
     * @var ?ChunkPlan $chunkPlan This is the plan for chunking the model output before it is sent to the voice provider.
     */
    #[JsonProperty('chunkPlan')]
    public ?ChunkPlan $chunkPlan;

    /**
     * @param array{
     *   voiceId: (
     *    'burt'
     *   |'marissa'
     *   |'andrea'
     *   |'sarah'
     *   |'phillip'
     *   |'steve'
     *   |'joseph'
     *   |'myra'
     *   |'paula'
     *   |'ryan'
     *   |'drew'
     *   |'paul'
     *   |'mrb'
     *   |'matilda'
     *   |'mark'
     *   |string
     * ),
     *   cachingEnabled?: ?bool,
     *   stability?: ?float,
     *   similarityBoost?: ?float,
     *   style?: ?float,
     *   useSpeakerBoost?: ?bool,
     *   speed?: ?float,
     *   optimizeStreamingLatency?: ?float,
     *   enableSsmlParsing?: ?bool,
     *   autoMode?: ?bool,
     *   model?: ?value-of<FallbackElevenLabsVoiceModel>,
     *   language?: ?string,
     *   pronunciationDictionaryLocators?: ?array<ElevenLabsPronunciationDictionaryLocator>,
     *   chunkPlan?: ?ChunkPlan,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->cachingEnabled = $values['cachingEnabled'] ?? null;
        $this->voiceId = $values['voiceId'];
        $this->stability = $values['stability'] ?? null;
        $this->similarityBoost = $values['similarityBoost'] ?? null;
        $this->style = $values['style'] ?? null;
        $this->useSpeakerBoost = $values['useSpeakerBoost'] ?? null;
        $this->speed = $values['speed'] ?? null;
        $this->optimizeStreamingLatency = $values['optimizeStreamingLatency'] ?? null;
        $this->enableSsmlParsing = $values['enableSsmlParsing'] ?? null;
        $this->autoMode = $values['autoMode'] ?? null;
        $this->model = $values['model'] ?? null;
        $this->language = $values['language'] ?? null;
        $this->pronunciationDictionaryLocators = $values['pronunciationDictionaryLocators'] ?? null;
        $this->chunkPlan = $values['chunkPlan'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
