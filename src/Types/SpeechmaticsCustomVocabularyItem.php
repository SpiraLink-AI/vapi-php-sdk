<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class SpeechmaticsCustomVocabularyItem extends JsonSerializableType
{
    /**
     * @var string $content The word or phrase to add to the custom vocabulary.
     */
    #[JsonProperty('content')]
    public string $content;

    /**
     * @var ?array<string> $soundsLike Alternative phonetic representations of how the word might sound. This helps recognition when the word might be pronounced differently.
     */
    #[JsonProperty('soundsLike'), ArrayType(['string'])]
    public ?array $soundsLike;

    /**
     * @param array{
     *   content: string,
     *   soundsLike?: ?array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->content = $values['content'];
        $this->soundsLike = $values['soundsLike'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
