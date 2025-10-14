<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class ToolMessageFailed extends JsonSerializableType
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
     * This is an optional boolean that if true, the call will end after the message is spoken. Default is false.
     *
     * @default false
     *
     * @var ?bool $endCallAfterSpokenEnabled
     */
    #[JsonProperty('endCallAfterSpokenEnabled')]
    public ?bool $endCallAfterSpokenEnabled;

    /**
     * @var ?string $content This is the content that the assistant says when this message is triggered.
     */
    #[JsonProperty('content')]
    public ?string $content;

    /**
     * @var ?array<Condition> $conditions This is an optional array of conditions that the tool call arguments must meet in order for this message to be triggered.
     */
    #[JsonProperty('conditions'), ArrayType([Condition::class])]
    public ?array $conditions;

    /**
     * @param array{
     *   contents?: ?array<TextContent>,
     *   endCallAfterSpokenEnabled?: ?bool,
     *   content?: ?string,
     *   conditions?: ?array<Condition>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->contents = $values['contents'] ?? null;
        $this->endCallAfterSpokenEnabled = $values['endCallAfterSpokenEnabled'] ?? null;
        $this->content = $values['content'] ?? null;
        $this->conditions = $values['conditions'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
