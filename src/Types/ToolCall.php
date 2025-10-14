<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class ToolCall extends JsonSerializableType
{
    /**
     * @var string $id This is the ID of the tool call
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $type This is the type of tool
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var ToolCallFunction $function This is the function that was called
     */
    #[JsonProperty('function')]
    public ToolCallFunction $function;

    /**
     * @param array{
     *   id: string,
     *   type: string,
     *   function: ToolCallFunction,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->type = $values['type'];
        $this->function = $values['function'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
