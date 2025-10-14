<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class CallHookFilter extends JsonSerializableType
{
    /**
     * @var 'oneOf' $type This is the type of filter - currently only "oneOf" is supported
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var string $key This is the key to filter on (e.g. "call.endedReason")
     */
    #[JsonProperty('key')]
    public string $key;

    /**
     * @var array<string> $oneOf This is the array of possible values to match against
     */
    #[JsonProperty('oneOf'), ArrayType(['string'])]
    public array $oneOf;

    /**
     * @param array{
     *   type: 'oneOf',
     *   key: string,
     *   oneOf: array<string>,
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
