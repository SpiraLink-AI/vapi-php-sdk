<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class GladiaVocabularyItemDto extends JsonSerializableType
{
    /**
     * @var string $value The vocabulary word or phrase
     */
    #[JsonProperty('value')]
    public string $value;

    /**
     * @var ?array<string> $pronunciations Alternative pronunciations for the vocabulary item
     */
    #[JsonProperty('pronunciations'), ArrayType(['string'])]
    public ?array $pronunciations;

    /**
     * @var ?float $intensity Intensity for this specific vocabulary item (0.0 to 1.0)
     */
    #[JsonProperty('intensity')]
    public ?float $intensity;

    /**
     * @var ?string $language Language code for this vocabulary item (ISO 639-1)
     */
    #[JsonProperty('language')]
    public ?string $language;

    /**
     * @param array{
     *   value: string,
     *   pronunciations?: ?array<string>,
     *   intensity?: ?float,
     *   language?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->value = $values['value'];
        $this->pronunciations = $values['pronunciations'] ?? null;
        $this->intensity = $values['intensity'] ?? null;
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
