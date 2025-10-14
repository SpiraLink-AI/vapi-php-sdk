<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class FallbackCartesiaTranscriber extends JsonSerializableType
{
    /**
     * @var ?'ink-whisper' $model
     */
    #[JsonProperty('model')]
    public ?string $model;

    /**
     * @var ?value-of<FallbackCartesiaTranscriberLanguage> $language
     */
    #[JsonProperty('language')]
    public ?string $language;

    /**
     * @param array{
     *   model?: ?'ink-whisper',
     *   language?: ?value-of<FallbackCartesiaTranscriberLanguage>,
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
