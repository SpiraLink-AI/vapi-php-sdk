<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class CartesiaTranscriber extends JsonSerializableType
{
    /**
     * @var ?'ink-whisper' $model
     */
    #[JsonProperty('model')]
    public ?string $model;

    /**
     * @var ?value-of<CartesiaTranscriberLanguage> $language
     */
    #[JsonProperty('language')]
    public ?string $language;

    /**
     * @var ?FallbackTranscriberPlan $fallbackPlan This is the plan for voice provider fallbacks in the event that the primary voice provider fails.
     */
    #[JsonProperty('fallbackPlan')]
    public ?FallbackTranscriberPlan $fallbackPlan;

    /**
     * @param array{
     *   model?: ?'ink-whisper',
     *   language?: ?value-of<CartesiaTranscriberLanguage>,
     *   fallbackPlan?: ?FallbackTranscriberPlan,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->model = $values['model'] ?? null;
        $this->language = $values['language'] ?? null;
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
