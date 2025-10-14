<?php declare(strict_types=1);

namespace Vapi\Types;

use DateTime;
use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\Date;

final class SchedulePlan extends JsonSerializableType
{
    /**
     * @var DateTime $earliestAt This is the ISO 8601 date-time string of the earliest time the call can be scheduled.
     */
    #[JsonProperty('earliestAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $earliestAt;

    /**
     * @var ?DateTime $latestAt This is the ISO 8601 date-time string of the latest time the call can be scheduled.
     */
    #[JsonProperty('latestAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $latestAt;

    /**
     * @param array{
     *   earliestAt: DateTime,
     *   latestAt?: ?DateTime,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->earliestAt = $values['earliestAt'];
        $this->latestAt = $values['latestAt'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
