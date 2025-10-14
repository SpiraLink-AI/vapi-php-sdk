<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;
use Vapi\Core\Types\Union;

final class GladiaCustomVocabularyConfigDto extends JsonSerializableType
{
    /**
     * @var array<(
     *    string
     *   |GladiaVocabularyItemDto
     * )> $vocabulary Array of vocabulary items (strings or objects with value, pronunciations, intensity, language)
     */
    #[JsonProperty('vocabulary'), ArrayType([new Union('string', GladiaVocabularyItemDto::class)])]
    public array $vocabulary;

    /**
     * @var ?float $defaultIntensity Default intensity for vocabulary items (0.0 to 1.0)
     */
    #[JsonProperty('defaultIntensity')]
    public ?float $defaultIntensity;

    /**
     * @param array{
     *   vocabulary: array<(
     *    string
     *   |GladiaVocabularyItemDto
     * )>,
     *   defaultIntensity?: ?float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->vocabulary = $values['vocabulary'];
        $this->defaultIntensity = $values['defaultIntensity'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
