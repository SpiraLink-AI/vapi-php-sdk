<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class FallbackDeepgramVoice extends JsonSerializableType
{
    /**
     * @var ?bool $cachingEnabled This is the flag to toggle voice caching for the assistant.
     */
    #[JsonProperty('cachingEnabled')]
    public ?bool $cachingEnabled;

    /**
     * @var value-of<FallbackDeepgramVoiceVoiceId> $voiceId This is the provider-specific ID that will be used.
     */
    #[JsonProperty('voiceId')]
    public string $voiceId;

    /**
     * @var ?value-of<FallbackDeepgramVoiceModel> $model This is the model that will be used. Defaults to 'aura-2' when not specified.
     */
    #[JsonProperty('model')]
    public ?string $model;

    /**
     * If set to true, this will add mip_opt_out=true as a query parameter of all API requests. See https://developers.deepgram.com/docs/the-deepgram-model-improvement-partnership-program#want-to-opt-out
     *
     * This will only be used if you are using your own Deepgram API key.
     *
     * @default false
     *
     * @var ?bool $mipOptOut
     */
    #[JsonProperty('mipOptOut')]
    public ?bool $mipOptOut;

    /**
     * @var ?ChunkPlan $chunkPlan This is the plan for chunking the model output before it is sent to the voice provider.
     */
    #[JsonProperty('chunkPlan')]
    public ?ChunkPlan $chunkPlan;

    /**
     * @param array{
     *   voiceId: value-of<FallbackDeepgramVoiceVoiceId>,
     *   cachingEnabled?: ?bool,
     *   model?: ?value-of<FallbackDeepgramVoiceModel>,
     *   mipOptOut?: ?bool,
     *   chunkPlan?: ?ChunkPlan,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->cachingEnabled = $values['cachingEnabled'] ?? null;
        $this->voiceId = $values['voiceId'];
        $this->model = $values['model'] ?? null;
        $this->mipOptOut = $values['mipOptOut'] ?? null;
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
