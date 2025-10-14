<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class Condition extends JsonSerializableType
{
    /**
     * @var value-of<ConditionOperator> $operator This is the operator you want to use to compare the parameter and value.
     */
    #[JsonProperty('operator')]
    public string $operator;

    /**
     * @var string $param This is the name of the parameter that you want to check.
     */
    #[JsonProperty('param')]
    public string $param;

    /**
     * @var string $value This is the value you want to compare against the parameter.
     */
    #[JsonProperty('value')]
    public string $value;

    /**
     * @param array{
     *   operator: value-of<ConditionOperator>,
     *   param: string,
     *   value: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->operator = $values['operator'];
        $this->param = $values['param'];
        $this->value = $values['value'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
