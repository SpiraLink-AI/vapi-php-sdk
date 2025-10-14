<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class GroupCondition extends JsonSerializableType
{
    /**
     * @var value-of<GroupConditionOperator> $operator This is the logical operator for combining conditions in this group
     */
    #[JsonProperty('operator')]
    public string $operator;

    /**
     * This is the list of nested conditions to evaluate.
     * Supports recursive nesting of groups for complex logic.
     *
     * @var array<GroupConditionConditionsItem> $conditions
     */
    #[JsonProperty('conditions'), ArrayType([GroupConditionConditionsItem::class])]
    public array $conditions;

    /**
     * @param array{
     *   operator: value-of<GroupConditionOperator>,
     *   conditions: array<GroupConditionConditionsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->operator = $values['operator'];
        $this->conditions = $values['conditions'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
