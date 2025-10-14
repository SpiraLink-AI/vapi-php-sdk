<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class OpenAiVoice extends JsonSerializableType
{
    /**
     * @var ?bool $cachingEnabled This is the flag to toggle voice caching for the assistant.
     */
    #[JsonProperty('cachingEnabled')]
    public ?bool $cachingEnabled;

    /**
     * This is the provider-specific ID that will be used.
     * Please note that ash, ballad, coral, sage, and verse may only be used with realtime models.
     *
     * @var (
     *    'alloy'
     *   |'echo'
     *   |'fable'
     *   |'onyx'
     *   |'nova'
     *   |'shimmer'
     *   |'marin'
     *   |'cedar'
     *   |string
     * ) $voiceId
     */
    #[JsonProperty('voiceId')]
    public string $voiceId;

    /**
     * @var ?value-of<OpenAiVoiceModel> $model This is the model that will be used for text-to-speech.
     */
    #[JsonProperty('model')]
    public ?string $model;

    /**
     * This is a prompt that allows you to control the voice of your generated audio.
     * Does not work with 'tts-1' or 'tts-1-hd' models.
     *
     * @var ?string $instructions
     */
    #[JsonProperty('instructions')]
    public ?string $instructions;

    /**
     * @var ?float $speed This is the speed multiplier that will be used.
     */
    #[JsonProperty('speed')]
    public ?float $speed;

    /**
     * @var ?ChunkPlan $chunkPlan This is the plan for chunking the model output before it is sent to the voice provider.
     */
    #[JsonProperty('chunkPlan')]
    public ?ChunkPlan $chunkPlan;

    /**
     * @var ?FallbackPlan $fallbackPlan This is the plan for voice provider fallbacks in the event that the primary voice provider fails.
     */
    #[JsonProperty('fallbackPlan')]
    public ?FallbackPlan $fallbackPlan;

    /**
     * @param array{
     *   voiceId: (
     *    'alloy'
     *   |'echo'
     *   |'fable'
     *   |'onyx'
     *   |'nova'
     *   |'shimmer'
     *   |'marin'
     *   |'cedar'
     *   |string
     * ),
     *   cachingEnabled?: ?bool,
     *   model?: ?value-of<OpenAiVoiceModel>,
     *   instructions?: ?string,
     *   speed?: ?float,
     *   chunkPlan?: ?ChunkPlan,
     *   fallbackPlan?: ?FallbackPlan,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->cachingEnabled = $values['cachingEnabled'] ?? null;
        $this->voiceId = $values['voiceId'];
        $this->model = $values['model'] ?? null;
        $this->instructions = $values['instructions'] ?? null;
        $this->speed = $values['speed'] ?? null;
        $this->chunkPlan = $values['chunkPlan'] ?? null;
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
