<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class BotMessage extends JsonSerializableType
{
    /**
     * @var string $role The role of the bot in the conversation.
     */
    #[JsonProperty('role')]
    public string $role;

    /**
     * @var string $message The message content from the bot.
     */
    #[JsonProperty('message')]
    public string $message;

    /**
     * @var float $time The timestamp when the message was sent.
     */
    #[JsonProperty('time')]
    public float $time;

    /**
     * @var float $endTime The timestamp when the message ended.
     */
    #[JsonProperty('endTime')]
    public float $endTime;

    /**
     * @var float $secondsFromStart The number of seconds from the start of the conversation.
     */
    #[JsonProperty('secondsFromStart')]
    public float $secondsFromStart;

    /**
     * @var ?string $source The source of the message.
     */
    #[JsonProperty('source')]
    public ?string $source;

    /**
     * @var ?float $duration The duration of the message in seconds.
     */
    #[JsonProperty('duration')]
    public ?float $duration;

    /**
     * @var ?string $speakerLabel Stable speaker label for diarized user speakers (e.g., "Speaker 1").
     */
    #[JsonProperty('speakerLabel')]
    public ?string $speakerLabel;

    /**
     * @param array{
     *   role: string,
     *   message: string,
     *   time: float,
     *   endTime: float,
     *   secondsFromStart: float,
     *   source?: ?string,
     *   duration?: ?float,
     *   speakerLabel?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->role = $values['role'];
        $this->message = $values['message'];
        $this->time = $values['time'];
        $this->endTime = $values['endTime'];
        $this->secondsFromStart = $values['secondsFromStart'];
        $this->source = $values['source'] ?? null;
        $this->duration = $values['duration'] ?? null;
        $this->speakerLabel = $values['speakerLabel'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
