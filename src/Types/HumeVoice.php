<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class HumeVoice extends JsonSerializableType
{
    /**
     * @var ?bool $cachingEnabled This is the flag to toggle voice caching for the assistant.
     */
    #[JsonProperty('cachingEnabled')]
    public ?bool $cachingEnabled;

    /**
     * @var ?value-of<HumeVoiceModel> $model This is the model that will be used.
     */
    #[JsonProperty('model')]
    public ?string $model;

    /**
     * @var string $voiceId The ID of the particular voice you want to use.
     */
    #[JsonProperty('voiceId')]
    public string $voiceId;

    /**
     * @var ?bool $isCustomHumeVoice Indicates whether the chosen voice is a preset Hume AI voice or a custom voice.
     */
    #[JsonProperty('isCustomHumeVoice')]
    public ?bool $isCustomHumeVoice;

    /**
     * @var ?ChunkPlan $chunkPlan This is the plan for chunking the model output before it is sent to the voice provider.
     */
    #[JsonProperty('chunkPlan')]
    public ?ChunkPlan $chunkPlan;

    /**
     * Natural language instructions describing how the synthesized speech should sound, including but not limited to tone, intonation, pacing, and accent (e.g., 'a soft, gentle voice with a strong British accent').
     *
     * If a Voice is specified in the request, this description serves as acting instructions.
     * If no Voice is specified, a new voice is generated based on this description.
     *
     * @var ?string $description
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @var ?FallbackPlan $fallbackPlan This is the plan for voice provider fallbacks in the event that the primary voice provider fails.
     */
    #[JsonProperty('fallbackPlan')]
    public ?FallbackPlan $fallbackPlan;

    /**
     * @param array{
     *   voiceId: string,
     *   cachingEnabled?: ?bool,
     *   model?: ?value-of<HumeVoiceModel>,
     *   isCustomHumeVoice?: ?bool,
     *   chunkPlan?: ?ChunkPlan,
     *   description?: ?string,
     *   fallbackPlan?: ?FallbackPlan,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->cachingEnabled = $values['cachingEnabled'] ?? null;
        $this->model = $values['model'] ?? null;
        $this->voiceId = $values['voiceId'];
        $this->isCustomHumeVoice = $values['isCustomHumeVoice'] ?? null;
        $this->chunkPlan = $values['chunkPlan'] ?? null;
        $this->description = $values['description'] ?? null;
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
