<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class UserMessage extends JsonSerializableType
{
    /**
     * @var string $role The role of the user in the conversation.
     */
    #[JsonProperty('role')]
    public string $role;

    /**
     * @var ?string $message The message content from the user.
     */
    #[JsonProperty('message')]
    public ?string $message;

    /**
     * @var float $time The timestamp when the message was sent.
     */
    #[JsonProperty('time')]
    public float $time;

    /**
     * @var ?float $endTime The timestamp when the message ended.
     */
    #[JsonProperty('endTime')]
    public ?float $endTime;

    /**
     * @var float $secondsFromStart The number of seconds from the start of the conversation.
     */
    #[JsonProperty('secondsFromStart')]
    public float $secondsFromStart;

    /**
     * @var ?float $duration The duration of the message in seconds.
     */
    #[JsonProperty('duration')]
    public ?float $duration;

    /**
     * @var ?bool $isFiltered Indicates if the message was filtered for security reasons.
     */
    #[JsonProperty('isFiltered')]
    public ?bool $isFiltered;

    /**
     * @var ?array<string> $detectedThreats List of detected security threats if the message was filtered.
     */
    #[JsonProperty('detectedThreats'), ArrayType(['string'])]
    public ?array $detectedThreats;

    /**
     * @var ?string $originalMessage The original message before filtering (only included if content was filtered).
     */
    #[JsonProperty('originalMessage')]
    public ?string $originalMessage;

    /**
     * @var ?array<string, mixed> $metadata The metadata associated with the message. Currently used to store the transcriber's word level confidence.
     */
    #[JsonProperty('metadata'), ArrayType(['string' => 'mixed'])]
    public ?array $metadata;

    /**
     * @param array{
     *   role: string,
     *   message?: ?string,
     *   time: float,
     *   endTime?: ?float,
     *   secondsFromStart: float,
     *   duration?: ?float,
     *   isFiltered?: ?bool,
     *   detectedThreats?: ?array<string>,
     *   originalMessage?: ?string,
     *   metadata?: ?array<string, mixed>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->role = $values['role'];
        $this->message = $values['message'] ?? null;
        $this->time = $values['time'];
        $this->endTime = $values['endTime'] ?? null;
        $this->secondsFromStart = $values['secondsFromStart'];
        $this->duration = $values['duration'] ?? null;
        $this->isFiltered = $values['isFiltered'] ?? null;
        $this->detectedThreats = $values['detectedThreats'] ?? null;
        $this->originalMessage = $values['originalMessage'] ?? null;
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
