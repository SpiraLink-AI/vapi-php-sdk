<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class TestSuiteRunTestAttempt extends JsonSerializableType
{
    /**
     * @var array<TestSuiteRunScorerAi> $scorerResults These are the results of the scorers used to evaluate the test attempt.
     */
    #[JsonProperty('scorerResults'), ArrayType([TestSuiteRunScorerAi::class])]
    public array $scorerResults;

    /**
     * @var ?TestSuiteRunTestAttemptCall $call This is the call made during the test attempt.
     */
    #[JsonProperty('call')]
    public ?TestSuiteRunTestAttemptCall $call;

    /**
     * @var ?string $callId This is the call ID for the test attempt.
     */
    #[JsonProperty('callId')]
    public ?string $callId;

    /**
     * @var ?TestSuiteRunTestAttemptMetadata $metadata This is the metadata for the test attempt.
     */
    #[JsonProperty('metadata')]
    public ?TestSuiteRunTestAttemptMetadata $metadata;

    /**
     * @param array{
     *   scorerResults: array<TestSuiteRunScorerAi>,
     *   call?: ?TestSuiteRunTestAttemptCall,
     *   callId?: ?string,
     *   metadata?: ?TestSuiteRunTestAttemptMetadata,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->scorerResults = $values['scorerResults'];
        $this->call = $values['call'] ?? null;
        $this->callId = $values['callId'] ?? null;
        $this->metadata = $values['metadata'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
