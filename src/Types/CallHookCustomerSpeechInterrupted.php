<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class CallHookCustomerSpeechInterrupted extends JsonSerializableType
{
    /**
     * @var 'customer.speech.interrupted' $on This is the event that triggers this hook
     */
    #[JsonProperty('on')]
    public string $on;

    /**
     * @var array<CallHookCustomerSpeechInterruptedDoItem> $do This is the set of actions to perform when the hook triggers
     */
    #[JsonProperty('do'), ArrayType([CallHookCustomerSpeechInterruptedDoItem::class])]
    public array $do;

    /**
     * @param array{
     *   on: 'customer.speech.interrupted',
     *   do: array<CallHookCustomerSpeechInterruptedDoItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->on = $values['on'];
        $this->do = $values['do'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
