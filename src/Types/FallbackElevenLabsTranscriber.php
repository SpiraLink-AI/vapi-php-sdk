<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class FallbackElevenLabsTranscriber extends JsonSerializableType
{
    /**
     * @var ?'scribe_v1' $model This is the model that will be used for the transcription.
     */
    #[JsonProperty('model')]
    public ?string $model;

    /**
     * @var ?value-of<FallbackElevenLabsTranscriberLanguage> $language
     */
    #[JsonProperty('language')]
    public ?string $language;

    /**
     * @param array{
     *   model?: ?'scribe_v1',
     *   language?: ?value-of<FallbackElevenLabsTranscriberLanguage>,
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
