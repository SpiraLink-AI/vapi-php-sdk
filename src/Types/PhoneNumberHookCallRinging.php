<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class PhoneNumberHookCallRinging extends JsonSerializableType
{
    /**
     * @var array<PhoneNumberHookCallRingingDoItem> $do Only the first action will be executed. Additional actions will be ignored.
     */
    #[JsonProperty('do'), ArrayType([PhoneNumberHookCallRingingDoItem::class])]
    public array $do;

    /**
     * @param array{
     *   do: array<PhoneNumberHookCallRingingDoItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
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
