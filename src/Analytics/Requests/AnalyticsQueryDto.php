<?php declare(strict_types=1);

namespace Vapi\Analytics\Requests;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;
use Vapi\Types\AnalyticsQuery;

final class AnalyticsQueryDto extends JsonSerializableType
{
    /**
     * @var array<AnalyticsQuery> $queries This is the list of metric queries you want to perform.
     */
    #[JsonProperty('queries'), ArrayType([AnalyticsQuery::class])]
    public array $queries;

    /**
     * @param array{
     *   queries: array<AnalyticsQuery>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->queries = $values['queries'];
    }
}
