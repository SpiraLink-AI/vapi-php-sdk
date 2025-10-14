<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class ToolCallResultMessage extends JsonSerializableType
{
    /**
     * @var string $role The role of the tool call result in the conversation.
     */
    #[JsonProperty('role')]
    public string $role;

    /**
     * @var string $toolCallId The ID of the tool call.
     */
    #[JsonProperty('toolCallId')]
    public string $toolCallId;

    /**
     * @var string $name The name of the tool that returned the result.
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var string $result The result of the tool call in JSON format.
     */
    #[JsonProperty('result')]
    public string $result;

    /**
     * @var float $time The timestamp when the message was sent.
     */
    #[JsonProperty('time')]
    public float $time;

    /**
     * @var float $secondsFromStart The number of seconds from the start of the conversation.
     */
    #[JsonProperty('secondsFromStart')]
    public float $secondsFromStart;

    /**
     * @var ?array<string, mixed> $metadata The metadata for the tool call result.
     */
    #[JsonProperty('metadata'), ArrayType(['string' => 'mixed'])]
    public ?array $metadata;

    /**
     * @param array{
     *   role: string,
     *   toolCallId: string,
     *   name: string,
     *   result: string,
     *   time: float,
     *   secondsFromStart: float,
     *   metadata?: ?array<string, mixed>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->role = $values['role'];
        $this->toolCallId = $values['toolCallId'];
        $this->name = $values['name'];
        $this->result = $values['result'];
        $this->time = $values['time'];
        $this->secondsFromStart = $values['secondsFromStart'];
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
