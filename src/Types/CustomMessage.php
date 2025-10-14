<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class CustomMessage extends JsonSerializableType
{
    /**
     * This is an alternative to the `content` property. It allows to specify variants of the same content, one per language.
     *
     * Usage:
     * - If your assistants are multilingual, you can provide content for each language.
     * - If you don't provide content for a language, the first item in the array will be automatically translated to the active language at that moment.
     *
     * This will override the `content` property.
     *
     * @var ?array<TextContent> $contents
     */
    #[JsonProperty('contents'), ArrayType([TextContent::class])]
    public ?array $contents;

    /**
     * @var 'custom-message' $type This is a custom message.
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var ?string $content This is the content that the assistant will say when this message is triggered.
     */
    #[JsonProperty('content')]
    public ?string $content;

    /**
     * @param array{
     *   type: 'custom-message',
     *   contents?: ?array<TextContent>,
     *   content?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->contents = $values['contents'] ?? null;
        $this->type = $values['type'];
        $this->content = $values['content'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
