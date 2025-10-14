<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class TextContent extends JsonSerializableType
{
    /**
     * @var 'text' $type
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var string $text
     */
    #[JsonProperty('text')]
    public string $text;

    /**
     * @var value-of<TextContentLanguage> $language
     */
    #[JsonProperty('language')]
    public string $language;

    /**
     * @param array{
     *   type: 'text',
     *   text: string,
     *   language: value-of<TextContentLanguage>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->type = $values['type'];
        $this->text = $values['text'];
        $this->language = $values['language'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
