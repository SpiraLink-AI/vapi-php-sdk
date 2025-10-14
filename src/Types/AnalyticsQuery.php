<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class AnalyticsQuery extends JsonSerializableType
{
    /**
     * @var value-of<AnalyticsQueryTable> $table This is the table you want to query.
     */
    #[JsonProperty('table')]
    public string $table;

    /**
     * @var ?array<value-of<AnalyticsQueryGroupByItem>> $groupBy This is the list of columns you want to group by.
     */
    #[JsonProperty('groupBy'), ArrayType(['string'])]
    public ?array $groupBy;

    /**
     * @var ?array<VariableValueGroupBy> $groupByVariableValue This is the list of variable value keys you want to group by.
     */
    #[JsonProperty('groupByVariableValue'), ArrayType([VariableValueGroupBy::class])]
    public ?array $groupByVariableValue;

    /**
     * @var string $name This is the name of the query. This will be used to identify the query in the response.
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?TimeRange $timeRange This is the time range for the query.
     */
    #[JsonProperty('timeRange')]
    public ?TimeRange $timeRange;

    /**
     * @var array<AnalyticsOperation> $operations This is the list of operations you want to perform.
     */
    #[JsonProperty('operations'), ArrayType([AnalyticsOperation::class])]
    public array $operations;

    /**
     * @param array{
     *   table: value-of<AnalyticsQueryTable>,
     *   name: string,
     *   operations: array<AnalyticsOperation>,
     *   groupBy?: ?array<value-of<AnalyticsQueryGroupByItem>>,
     *   groupByVariableValue?: ?array<VariableValueGroupBy>,
     *   timeRange?: ?TimeRange,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->table = $values['table'];
        $this->groupBy = $values['groupBy'] ?? null;
        $this->groupByVariableValue = $values['groupByVariableValue'] ?? null;
        $this->name = $values['name'];
        $this->timeRange = $values['timeRange'] ?? null;
        $this->operations = $values['operations'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
