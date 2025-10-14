<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class VariableValueGroupBy extends JsonSerializableType
{
    /**
     * @var string $key This is the key of the variable value to group by.
     */
    #[JsonProperty('key')]
    public string $key;

    /**
     * @param array{
     *   key: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->key = $values['key'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
