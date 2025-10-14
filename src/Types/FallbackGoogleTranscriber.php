<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class FallbackGoogleTranscriber extends JsonSerializableType
{
    /**
     * @var ?value-of<FallbackGoogleTranscriberModel> $model This is the model that will be used for the transcription.
     */
    #[JsonProperty('model')]
    public ?string $model;

    /**
     * @var ?value-of<FallbackGoogleTranscriberLanguage> $language This is the language that will be set for the transcription.
     */
    #[JsonProperty('language')]
    public ?string $language;

    /**
     * @param array{
     *   model?: ?value-of<FallbackGoogleTranscriberModel>,
     *   language?: ?value-of<FallbackGoogleTranscriberLanguage>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->model = $values['model'] ?? null;
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
