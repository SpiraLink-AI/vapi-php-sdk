<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class ServerMessageResponseCallEndpointingRequest extends JsonSerializableType
{
    /**
     * @var float $timeoutSeconds This is the timeout in seconds to wait before considering the user's speech as finished.
     */
    #[JsonProperty('timeoutSeconds')]
    public float $timeoutSeconds;

    /**
     * @param array{
     *   timeoutSeconds: float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->timeoutSeconds = $values['timeoutSeconds'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
