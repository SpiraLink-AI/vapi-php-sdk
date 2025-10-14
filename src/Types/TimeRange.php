<?php declare(strict_types=1);

namespace Vapi\Types;

use DateTime;
use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\Date;

final class TimeRange extends JsonSerializableType
{
    /**
     * This is the time step for aggregations.
     *
     * If not provided, defaults to returning for the entire time range.
     *
     * @var ?value-of<TimeRangeStep> $step
     */
    #[JsonProperty('step')]
    public ?string $step;

    /**
     * This is the start date for the time range.
     *
     * If not provided, defaults to the 7 days ago.
     *
     * @var ?DateTime $start
     */
    #[JsonProperty('start'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $start;

    /**
     * This is the end date for the time range.
     *
     * If not provided, defaults to now.
     *
     * @var ?DateTime $end
     */
    #[JsonProperty('end'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $end;

    /**
     * This is the timezone you want to set for the query.
     *
     * If not provided, defaults to UTC.
     *
     * @var ?string $timezone
     */
    #[JsonProperty('timezone')]
    public ?string $timezone;

    /**
     * @param array{
     *   step?: ?value-of<TimeRangeStep>,
     *   start?: ?DateTime,
     *   end?: ?DateTime,
     *   timezone?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->step = $values['step'] ?? null;
        $this->start = $values['start'] ?? null;
        $this->end = $values['end'] ?? null;
        $this->timezone = $values['timezone'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
