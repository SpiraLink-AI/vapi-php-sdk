<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class CallHookCustomerSpeechTimeout extends JsonSerializableType
{
    /**
     * @var string $on Must be either "customer.speech.timeout" or match the pattern "customer.speech.timeout[property=value]"
     */
    #[JsonProperty('on')]
    public string $on;

    /**
     * @var array<CallHookCustomerSpeechTimeoutDoItem> $do This is the set of actions to perform when the hook triggers
     */
    #[JsonProperty('do'), ArrayType([CallHookCustomerSpeechTimeoutDoItem::class])]
    public array $do;

    /**
     * @var ?CustomerSpeechTimeoutOptions $options This is the set of filters that must match for the hook to trigger
     */
    #[JsonProperty('options')]
    public ?CustomerSpeechTimeoutOptions $options;

    /**
     * This is the name of the hook, it can be set by the user to identify the hook.
     * If no name is provided, the hook will be auto generated as UUID.
     *
     * @default UUID
     *
     * @var ?string $name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @param array{
     *   on: string,
     *   do: array<CallHookCustomerSpeechTimeoutDoItem>,
     *   options?: ?CustomerSpeechTimeoutOptions,
     *   name?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->on = $values['on'];
        $this->do = $values['do'];
        $this->options = $values['options'] ?? null;
        $this->name = $values['name'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
