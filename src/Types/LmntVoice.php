<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class LmntVoice extends JsonSerializableType
{
    /**
     * @var ?bool $cachingEnabled This is the flag to toggle voice caching for the assistant.
     */
    #[JsonProperty('cachingEnabled')]
    public ?bool $cachingEnabled;

    /**
     * @var (
     *    'amy'
     *   |'ansel'
     *   |'autumn'
     *   |'ava'
     *   |'brandon'
     *   |'caleb'
     *   |'cassian'
     *   |'chloe'
     *   |'dalton'
     *   |'daniel'
     *   |'dustin'
     *   |'elowen'
     *   |'evander'
     *   |'huxley'
     *   |'james'
     *   |'juniper'
     *   |'kennedy'
     *   |'lauren'
     *   |'leah'
     *   |'lily'
     *   |'lucas'
     *   |'magnus'
     *   |'miles'
     *   |'morgan'
     *   |'natalie'
     *   |'nathan'
     *   |'noah'
     *   |'nyssa'
     *   |'oliver'
     *   |'paige'
     *   |'ryan'
     *   |'sadie'
     *   |'sophie'
     *   |'stella'
     *   |'terrence'
     *   |'tyler'
     *   |'vesper'
     *   |'violet'
     *   |'warrick'
     *   |'zain'
     *   |'zeke'
     *   |'zoe'
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
     * @var ?value-of<LmntVoiceLanguage> $language Two letter ISO 639-1 language code. Use "auto" for auto-detection.
     */
    #[JsonProperty('language')]
    public ?string $language;

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
     *    'amy'
     *   |'ansel'
     *   |'autumn'
     *   |'ava'
     *   |'brandon'
     *   |'caleb'
     *   |'cassian'
     *   |'chloe'
     *   |'dalton'
     *   |'daniel'
     *   |'dustin'
     *   |'elowen'
     *   |'evander'
     *   |'huxley'
     *   |'james'
     *   |'juniper'
     *   |'kennedy'
     *   |'lauren'
     *   |'leah'
     *   |'lily'
     *   |'lucas'
     *   |'magnus'
     *   |'miles'
     *   |'morgan'
     *   |'natalie'
     *   |'nathan'
     *   |'noah'
     *   |'nyssa'
     *   |'oliver'
     *   |'paige'
     *   |'ryan'
     *   |'sadie'
     *   |'sophie'
     *   |'stella'
     *   |'terrence'
     *   |'tyler'
     *   |'vesper'
     *   |'violet'
     *   |'warrick'
     *   |'zain'
     *   |'zeke'
     *   |'zoe'
     *   |string
     * ),
     *   cachingEnabled?: ?bool,
     *   speed?: ?float,
     *   language?: ?value-of<LmntVoiceLanguage>,
     *   chunkPlan?: ?ChunkPlan,
     *   fallbackPlan?: ?FallbackPlan,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->cachingEnabled = $values['cachingEnabled'] ?? null;
        $this->voiceId = $values['voiceId'];
        $this->speed = $values['speed'] ?? null;
        $this->language = $values['language'] ?? null;
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
