<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class FallbackPlayHtVoice extends JsonSerializableType
{
    /**
     * @var ?bool $cachingEnabled This is the flag to toggle voice caching for the assistant.
     */
    #[JsonProperty('cachingEnabled')]
    public ?bool $cachingEnabled;

    /**
     * @var (
     *    'jennifer'
     *   |'melissa'
     *   |'will'
     *   |'chris'
     *   |'matt'
     *   |'jack'
     *   |'ruby'
     *   |'davis'
     *   |'donna'
     *   |'michael'
     *   |string
     * ) $voiceId This is the provider-specific ID that will be used.
     */
    #[JsonProperty('voiceId')]
    public string $voiceId;

    /**
     * @var ?float $speed This is the speed multiplier that will be used.
     */
    #[JsonProperty('speed')]
    public ?float $speed;

    /**
     * @var ?float $temperature A floating point number between 0, exclusive, and 2, inclusive. If equal to null or not provided, the model's default temperature will be used. The temperature parameter controls variance. Lower temperatures result in more predictable results, higher temperatures allow each run to vary more, so the voice may sound less like the baseline voice.
     */
    #[JsonProperty('temperature')]
    public ?float $temperature;

    /**
     * @var ?value-of<FallbackPlayHtVoiceEmotion> $emotion An emotion to be applied to the speech.
     */
    #[JsonProperty('emotion')]
    public ?string $emotion;

    /**
     * @var ?float $voiceGuidance A number between 1 and 6. Use lower numbers to reduce how unique your chosen voice will be compared to other voices.
     */
    #[JsonProperty('voiceGuidance')]
    public ?float $voiceGuidance;

    /**
     * @var ?float $styleGuidance A number between 1 and 30. Use lower numbers to to reduce how strong your chosen emotion will be. Higher numbers will create a very emotional performance.
     */
    #[JsonProperty('styleGuidance')]
    public ?float $styleGuidance;

    /**
     * @var ?float $textGuidance A number between 1 and 2. This number influences how closely the generated speech adheres to the input text. Use lower values to create more fluid speech, but with a higher chance of deviating from the input text. Higher numbers will make the generated speech more accurate to the input text, ensuring that the words spoken align closely with the provided text.
     */
    #[JsonProperty('textGuidance')]
    public ?float $textGuidance;

    /**
     * @var ?value-of<FallbackPlayHtVoiceModel> $model Playht voice model/engine to use.
     */
    #[JsonProperty('model')]
    public ?string $model;

    /**
     * @var ?value-of<FallbackPlayHtVoiceLanguage> $language The language to use for the speech.
     */
    #[JsonProperty('language')]
    public ?string $language;

    /**
     * @var ?ChunkPlan $chunkPlan This is the plan for chunking the model output before it is sent to the voice provider.
     */
    #[JsonProperty('chunkPlan')]
    public ?ChunkPlan $chunkPlan;

    /**
     * @param array{
     *   voiceId: (
     *    'jennifer'
     *   |'melissa'
     *   |'will'
     *   |'chris'
     *   |'matt'
     *   |'jack'
     *   |'ruby'
     *   |'davis'
     *   |'donna'
     *   |'michael'
     *   |string
     * ),
     *   cachingEnabled?: ?bool,
     *   speed?: ?float,
     *   temperature?: ?float,
     *   emotion?: ?value-of<FallbackPlayHtVoiceEmotion>,
     *   voiceGuidance?: ?float,
     *   styleGuidance?: ?float,
     *   textGuidance?: ?float,
     *   model?: ?value-of<FallbackPlayHtVoiceModel>,
     *   language?: ?value-of<FallbackPlayHtVoiceLanguage>,
     *   chunkPlan?: ?ChunkPlan,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->cachingEnabled = $values['cachingEnabled'] ?? null;
        $this->voiceId = $values['voiceId'];
        $this->speed = $values['speed'] ?? null;
        $this->temperature = $values['temperature'] ?? null;
        $this->emotion = $values['emotion'] ?? null;
        $this->voiceGuidance = $values['voiceGuidance'] ?? null;
        $this->styleGuidance = $values['styleGuidance'] ?? null;
        $this->textGuidance = $values['textGuidance'] ?? null;
        $this->model = $values['model'] ?? null;
        $this->language = $values['language'] ?? null;
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
