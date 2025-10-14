<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class TransferHookAction extends JsonSerializableType
{
    /**
     * @var 'transfer' $type This is the type of action - must be "transfer"
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var ?TransferHookActionDestination $destination This is the destination details for the transfer - can be a phone number or SIP URI
     */
    #[JsonProperty('destination')]
    public ?TransferHookActionDestination $destination;

    /**
     * @param array{
     *   type: 'transfer',
     *   destination?: ?TransferHookActionDestination,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->type = $values['type'];
        $this->destination = $values['destination'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
