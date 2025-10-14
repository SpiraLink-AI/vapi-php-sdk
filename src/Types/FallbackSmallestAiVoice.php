<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class FallbackSmallestAiVoice extends JsonSerializableType
{
    /**
     * @var ?bool $cachingEnabled This is the flag to toggle voice caching for the assistant.
     */
    #[JsonProperty('cachingEnabled')]
    public ?bool $cachingEnabled;

    /**
     * @var (
     *    'emily'
     *   |'jasmine'
     *   |'arman'
     *   |'james'
     *   |'mithali'
     *   |'aravind'
     *   |'raj'
     *   |'diya'
     *   |'raman'
     *   |'ananya'
     *   |'isha'
     *   |'william'
     *   |'aarav'
     *   |'monika'
     *   |'niharika'
     *   |'deepika'
     *   |'raghav'
     *   |'kajal'
     *   |'radhika'
     *   |'mansi'
     *   |'nisha'
     *   |'saurabh'
     *   |'pooja'
     *   |'saina'
     *   |'sanya'
     *   |string
     * ) $voiceId This is the provider-specific ID that will be used.
     */
    #[JsonProperty('voiceId')]
    public string $voiceId;

    /**
     * @var ?'lightning' $model Smallest AI voice model to use. Defaults to 'lightning' when not specified.
     */
    #[JsonProperty('model')]
    public ?string $model;

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
     * @param array{
     *   voiceId: (
     *    'emily'
     *   |'jasmine'
     *   |'arman'
     *   |'james'
     *   |'mithali'
     *   |'aravind'
     *   |'raj'
     *   |'diya'
     *   |'raman'
     *   |'ananya'
     *   |'isha'
     *   |'william'
     *   |'aarav'
     *   |'monika'
     *   |'niharika'
     *   |'deepika'
     *   |'raghav'
     *   |'kajal'
     *   |'radhika'
     *   |'mansi'
     *   |'nisha'
     *   |'saurabh'
     *   |'pooja'
     *   |'saina'
     *   |'sanya'
     *   |string
     * ),
     *   cachingEnabled?: ?bool,
     *   model?: ?'lightning',
     *   speed?: ?float,
     *   chunkPlan?: ?ChunkPlan,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->cachingEnabled = $values['cachingEnabled'] ?? null;
        $this->voiceId = $values['voiceId'];
        $this->model = $values['model'] ?? null;
        $this->speed = $values['speed'] ?? null;
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
