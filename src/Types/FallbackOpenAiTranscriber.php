<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class FallbackOpenAiTranscriber extends JsonSerializableType
{
    /**
     * @var value-of<FallbackOpenAiTranscriberModel> $model This is the model that will be used for the transcription.
     */
    #[JsonProperty('model')]
    public string $model;

    /**
     * @var ?value-of<FallbackOpenAiTranscriberLanguage> $language This is the language that will be set for the transcription.
     */
    #[JsonProperty('language')]
    public ?string $language;

    /**
     * @param array{
     *   model: value-of<FallbackOpenAiTranscriberModel>,
     *   language?: ?value-of<FallbackOpenAiTranscriberLanguage>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->model = $values['model'];
        $this->language = $values['language'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
