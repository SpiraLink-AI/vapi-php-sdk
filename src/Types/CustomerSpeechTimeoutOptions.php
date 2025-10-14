<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class CustomerSpeechTimeoutOptions extends JsonSerializableType
{
    /**
     * This is the timeout in seconds before action is triggered.
     * The clock starts when the assistant finishes speaking and remains active until the user speaks.
     *
     * @default 7.5
     *
     * @var float $timeoutSeconds
     */
    #[JsonProperty('timeoutSeconds')]
    public float $timeoutSeconds;

    /**
     * This is the maximum number of times the hook will trigger in a call.
     *
     * @default 3
     *
     * @var ?float $triggerMaxCount
     */
    #[JsonProperty('triggerMaxCount')]
    public ?float $triggerMaxCount;

    /**
     * This is whether the counter for hook trigger resets the user speaks.
     *
     * @default never
     *
     * @var ?array<string, mixed> $triggerResetMode
     */
    #[JsonProperty('triggerResetMode'), ArrayType(['string' => 'mixed'])]
    public ?array $triggerResetMode;

    /**
     * @param array{
     *   timeoutSeconds: float,
     *   triggerMaxCount?: ?float,
     *   triggerResetMode?: ?array<string, mixed>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->timeoutSeconds = $values['timeoutSeconds'];
        $this->triggerMaxCount = $values['triggerMaxCount'] ?? null;
        $this->triggerResetMode = $values['triggerResetMode'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
