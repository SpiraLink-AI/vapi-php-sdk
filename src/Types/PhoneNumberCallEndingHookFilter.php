<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class PhoneNumberCallEndingHookFilter extends JsonSerializableType
{
    /**
     * @var 'oneOf' $type This is the type of filter - currently only "oneOf" is supported
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var 'call.endedReason' $key This is the key to filter on - only "call.endedReason" is allowed for phone number call ending hooks
     */
    #[JsonProperty('key')]
    public string $key;

    /**
     * @var array<value-of<PhoneNumberCallEndingHookFilterOneOfItem>> $oneOf This is the array of assistant-request related ended reasons to match against
     */
    #[JsonProperty('oneOf'), ArrayType(['string'])]
    public array $oneOf;

    /**
     * @param array{
     *   type: 'oneOf',
     *   key: 'call.endedReason',
     *   oneOf: array<value-of<PhoneNumberCallEndingHookFilterOneOfItem>>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->type = $values['type'];
        $this->key = $values['key'];
        $this->oneOf = $values['oneOf'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
