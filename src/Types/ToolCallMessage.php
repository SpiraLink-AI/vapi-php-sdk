<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class ToolCallMessage extends JsonSerializableType
{
    /**
     * @var string $role The role of the tool call in the conversation.
     */
    #[JsonProperty('role')]
    public string $role;

    /**
     * @var array<array<string, mixed>> $toolCalls The list of tool calls made during the conversation.
     */
    #[JsonProperty('toolCalls'), ArrayType([['string' => 'mixed']])]
    public array $toolCalls;

    /**
     * @var string $message The message content for the tool call.
     */
    #[JsonProperty('message')]
    public string $message;

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
     * @param array{
     *   role: string,
     *   toolCalls: array<array<string, mixed>>,
     *   message: string,
     *   time: float,
     *   secondsFromStart: float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->role = $values['role'];
        $this->toolCalls = $values['toolCalls'];
        $this->message = $values['message'];
        $this->time = $values['time'];
        $this->secondsFromStart = $values['secondsFromStart'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
