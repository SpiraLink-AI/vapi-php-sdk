<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class FallbackCartesiaVoice extends JsonSerializableType
{
    /**
     * @var ?bool $cachingEnabled This is the flag to toggle voice caching for the assistant.
     */
    #[JsonProperty('cachingEnabled')]
    public ?bool $cachingEnabled;

    /**
     * @var string $voiceId The ID of the particular voice you want to use.
     */
    #[JsonProperty('voiceId')]
    public string $voiceId;

    /**
     * @var ?value-of<FallbackCartesiaVoiceModel> $model This is the model that will be used. This is optional and will default to the correct model for the voiceId.
     */
    #[JsonProperty('model')]
    public ?string $model;

    /**
     * @var ?value-of<FallbackCartesiaVoiceLanguage> $language This is the language that will be used. This is optional and will default to the correct language for the voiceId.
     */
    #[JsonProperty('language')]
    public ?string $language;

    /**
     * @var ?CartesiaExperimentalControls $experimentalControls Experimental controls for Cartesia voice generation
     */
    #[JsonProperty('experimentalControls')]
    public ?CartesiaExperimentalControls $experimentalControls;

    /**
     * @var ?ChunkPlan $chunkPlan This is the plan for chunking the model output before it is sent to the voice provider.
     */
    #[JsonProperty('chunkPlan')]
    public ?ChunkPlan $chunkPlan;

    /**
     * @param array{
     *   voiceId: string,
     *   cachingEnabled?: ?bool,
     *   model?: ?value-of<FallbackCartesiaVoiceModel>,
     *   language?: ?value-of<FallbackCartesiaVoiceLanguage>,
     *   experimentalControls?: ?CartesiaExperimentalControls,
     *   chunkPlan?: ?ChunkPlan,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->cachingEnabled = $values['cachingEnabled'] ?? null;
        $this->voiceId = $values['voiceId'];
        $this->model = $values['model'] ?? null;
        $this->language = $values['language'] ?? null;
        $this->experimentalControls = $values['experimentalControls'] ?? null;
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
