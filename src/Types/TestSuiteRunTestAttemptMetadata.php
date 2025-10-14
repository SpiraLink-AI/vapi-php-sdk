<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class TestSuiteRunTestAttemptMetadata extends JsonSerializableType
{
    /**
     * @var string $sessionId This is the session ID for the test attempt.
     */
    #[JsonProperty('sessionId')]
    public string $sessionId;

    /**
     * @param array{
     *   sessionId: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->sessionId = $values['sessionId'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
