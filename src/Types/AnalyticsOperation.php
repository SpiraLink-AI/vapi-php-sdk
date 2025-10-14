<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class AnalyticsOperation extends JsonSerializableType
{
    /**
     * @var value-of<AnalyticsOperationOperation> $operation This is the aggregation operation you want to perform.
     */
    #[JsonProperty('operation')]
    public string $operation;

    /**
     * @var value-of<AnalyticsOperationColumn> $column This is the columns you want to perform the aggregation operation on.
     */
    #[JsonProperty('column')]
    public string $column;

    /**
     * @var ?string $alias This is the alias for column name returned. Defaults to `${operation}${column}`.
     */
    #[JsonProperty('alias')]
    public ?string $alias;

    /**
     * @param array{
     *   operation: value-of<AnalyticsOperationOperation>,
     *   column: value-of<AnalyticsOperationColumn>,
     *   alias?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->operation = $values['operation'];
        $this->column = $values['column'];
        $this->alias = $values['alias'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
