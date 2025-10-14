<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class ToolCallHookAction extends JsonSerializableType
{
    /**
     * @var ?ToolCallHookActionTool $tool This is the tool to call. To use an existing tool, send `toolId` instead.
     */
    #[JsonProperty('tool')]
    public ?ToolCallHookActionTool $tool;

    /**
     * @var ?string $toolId This is the tool to call. To use a transient tool, send `tool` instead.
     */
    #[JsonProperty('toolId')]
    public ?string $toolId;

    /**
     * @param array{
     *   tool?: ?ToolCallHookActionTool,
     *   toolId?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->tool = $values['tool'] ?? null;
        $this->toolId = $values['toolId'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
