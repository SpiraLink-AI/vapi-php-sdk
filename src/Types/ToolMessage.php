<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class ToolMessage extends JsonSerializableType
{
    /**
     * @var 'tool' $role This is the role of the message author
     */
    #[JsonProperty('role')]
    public string $role;

    /**
     * @var string $content This is the content of the tool message
     */
    #[JsonProperty('content')]
    public string $content;

    /**
     * @var string $toolCallId This is the ID of the tool call this message is responding to
     */
    #[JsonProperty('tool_call_id')]
    public string $toolCallId;

    /**
     * @var ?string $name This is an optional name for the participant
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?array<string, mixed> $metadata This is an optional metadata for the message
     */
    #[JsonProperty('metadata'), ArrayType(['string' => 'mixed'])]
    public ?array $metadata;

    /**
     * @param array{
     *   role: 'tool',
     *   content: string,
     *   toolCallId: string,
     *   name?: ?string,
     *   metadata?: ?array<string, mixed>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->role = $values['role'];
        $this->content = $values['content'];
        $this->toolCallId = $values['toolCallId'];
        $this->name = $values['name'] ?? null;
        $this->metadata = $values['metadata'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
