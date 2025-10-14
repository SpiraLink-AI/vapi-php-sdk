<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class SystemMessage extends JsonSerializableType
{
    /**
     * @var string $role The role of the system in the conversation.
     */
    #[JsonProperty('role')]
    public string $role;

    /**
     * @var ?string $message The message content from the system.
     */
    #[JsonProperty('message')]
    public ?string $message;

    /**
     * @var ?float $time The timestamp when the message was sent.
     */
    #[JsonProperty('time')]
    public ?float $time;

    /**
     * @var ?float $secondsFromStart The number of seconds from the start of the conversation.
     */
    #[JsonProperty('secondsFromStart')]
    public ?float $secondsFromStart;

    /**
     * @param array{
     *   role: string,
     *   message: ?string,
     *   time: ?float,
     *   secondsFromStart: ?float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->role = $values['role'];
        $this->message = $values['message'] ?? null;
        $this->time = $values['time'] ?? null;
        $this->secondsFromStart = $values['secondsFromStart'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
