<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class OpenAiTranscriber extends JsonSerializableType
{
    /**
     * @var value-of<OpenAiTranscriberModel> $model This is the model that will be used for the transcription.
     */
    #[JsonProperty('model')]
    public string $model;

    /**
     * @var ?value-of<OpenAiTranscriberLanguage> $language This is the language that will be set for the transcription.
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
     *   model: value-of<OpenAiTranscriberModel>,
     *   language?: ?value-of<OpenAiTranscriberLanguage>,
     *   fallbackPlan?: ?FallbackTranscriberPlan,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->model = $values['model'];
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
