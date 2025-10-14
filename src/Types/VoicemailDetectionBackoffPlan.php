<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class VoicemailDetectionBackoffPlan extends JsonSerializableType
{
    /**
     * @var ?float $startAtSeconds This is the number of seconds to wait before starting the first retry attempt.
     */
    #[JsonProperty('startAtSeconds')]
    public ?float $startAtSeconds;

    /**
     * @var ?float $frequencySeconds This is the interval in seconds between retry attempts.
     */
    #[JsonProperty('frequencySeconds')]
    public ?float $frequencySeconds;

    /**
     * @var ?float $maxRetries This is the maximum number of retry attempts before giving up.
     */
    #[JsonProperty('maxRetries')]
    public ?float $maxRetries;

    /**
     * @param array{
     *   startAtSeconds?: ?float,
     *   frequencySeconds?: ?float,
     *   maxRetries?: ?float,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->startAtSeconds = $values['startAtSeconds'] ?? null;
        $this->frequencySeconds = $values['frequencySeconds'] ?? null;
        $this->maxRetries = $values['maxRetries'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
