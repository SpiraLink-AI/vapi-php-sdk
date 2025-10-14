<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class AnalyticsQueryResult extends JsonSerializableType
{
    /**
     * @var string $name This is the unique key for the query.
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var TimeRange $timeRange This is the time range for the query.
     */
    #[JsonProperty('timeRange')]
    public TimeRange $timeRange;

    /**
     * This is the result of the query, a list of unique groups with result of their aggregations.
     *
     * Example:
     * "result": [
     *   { "date": "2023-01-01", "assistantId": "123", "endedReason": "customer-ended-call", "sumDuration": 120, "avgCost": 10.5 },
     *   { "date": "2023-01-02", "assistantId": "123", "endedReason": "customer-did-not-give-microphone-permission", "sumDuration": 0, "avgCost": 0 },
     *   // Additional results
     * ]
     *
     * @var array<array<string, mixed>> $result
     */
    #[JsonProperty('result'), ArrayType([['string' => 'mixed']])]
    public array $result;

    /**
     * @param array{
     *   name: string,
     *   timeRange: TimeRange,
     *   result: array<array<string, mixed>>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->timeRange = $values['timeRange'];
        $this->result = $values['result'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
