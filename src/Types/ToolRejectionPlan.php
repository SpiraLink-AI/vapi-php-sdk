<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class ToolRejectionPlan extends JsonSerializableType
{
    /**
     * This is the list of conditions that must be evaluated.
     *
     * Usage:
     * - If all conditions match (AND logic), the tool call is rejected.
     * - For OR logic at the top level, use a single 'group' condition with operator: 'OR'.
     *
     * @default [] - Empty array means tool always executes
     *
     * @var ?array<ToolRejectionPlanConditionsItem> $conditions
     */
    #[JsonProperty('conditions'), ArrayType([ToolRejectionPlanConditionsItem::class])]
    public ?array $conditions;

    /**
     * @param array{
     *   conditions?: ?array<ToolRejectionPlanConditionsItem>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->conditions = $values['conditions'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
