<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class KeypadInputPlan extends JsonSerializableType
{
    /**
     * This keeps track of whether the user has enabled keypad input.
     * By default, it is off.
     *
     * @default false
     *
     * @var ?bool $enabled
     */
    #[JsonProperty('enabled')]
    public ?bool $enabled;

    /**
     * This is the time in seconds to wait before processing the input.
     * If the input is not received within this time, the input will be ignored.
     * If set to "off", the input will be processed when the user enters a delimiter or immediately if no delimiter is used.
     *
     * @default 2
     *
     * @var ?float $timeoutSeconds
     */
    #[JsonProperty('timeoutSeconds')]
    public ?float $timeoutSeconds;

    /**
     * This is the delimiter(s) that will be used to process the input.
     * Can be '#', '*', or an empty array.
     *
     * @var ?value-of<KeypadInputPlanDelimiters> $delimiters
     */
    #[JsonProperty('delimiters')]
    public ?string $delimiters;

    /**
     * @param array{
     *   enabled?: ?bool,
     *   timeoutSeconds?: ?float,
     *   delimiters?: ?value-of<KeypadInputPlanDelimiters>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->enabled = $values['enabled'] ?? null;
        $this->timeoutSeconds = $values['timeoutSeconds'] ?? null;
        $this->delimiters = $values['delimiters'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
