<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class TestSuiteRunTestResult extends JsonSerializableType
{
    /**
     * @var TestSuiteTestVoice $test This is the test that was run.
     */
    #[JsonProperty('test')]
    public TestSuiteTestVoice $test;

    /**
     * @var array<TestSuiteRunTestAttempt> $attempts These are the attempts made for this test.
     */
    #[JsonProperty('attempts'), ArrayType([TestSuiteRunTestAttempt::class])]
    public array $attempts;

    /**
     * @param array{
     *   test: TestSuiteTestVoice,
     *   attempts: array<TestSuiteRunTestAttempt>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->test = $values['test'];
        $this->attempts = $values['attempts'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
