<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class ToolNode extends JsonSerializableType
{
    /**
     * @var ?ToolNodeTool $tool This is the tool to call. To use an existing tool, send `toolId` instead.
     */
    #[JsonProperty('tool')]
    public ?ToolNodeTool $tool;

    /**
     * @var ?string $toolId This is the tool to call. To use a transient tool, send `tool` instead.
     */
    #[JsonProperty('toolId')]
    public ?string $toolId;

    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?bool $isStart This is whether or not the node is the start of the workflow.
     */
    #[JsonProperty('isStart')]
    public ?bool $isStart;

    /**
     * @var ?array<string, mixed> $metadata This is for metadata you want to store on the task.
     */
    #[JsonProperty('metadata'), ArrayType(['string' => 'mixed'])]
    public ?array $metadata;

    /**
     * @param array{
     *   name: string,
     *   tool?: ?ToolNodeTool,
     *   toolId?: ?string,
     *   isStart?: ?bool,
     *   metadata?: ?array<string, mixed>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->tool = $values['tool'] ?? null;
        $this->toolId = $values['toolId'] ?? null;
        $this->name = $values['name'];
        $this->isStart = $values['isStart'] ?? null;
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
