<?php declare(strict_types=1);

namespace Vapi\Types;

use DateTime;
use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;
use Vapi\Core\Types\Date;

final class TestSuiteRun extends JsonSerializableType
{
    /**
     * @var value-of<TestSuiteRunStatus> $status This is the current status of the test suite run.
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var string $id This is the unique identifier for the test suite run.
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $orgId This is the unique identifier for the organization this run belongs to.
     */
    #[JsonProperty('orgId')]
    public string $orgId;

    /**
     * @var string $testSuiteId This is the unique identifier for the test suite this run belongs to.
     */
    #[JsonProperty('testSuiteId')]
    public string $testSuiteId;

    /**
     * @var DateTime $createdAt This is the ISO 8601 date-time string of when the test suite run was created.
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $createdAt;

    /**
     * @var DateTime $updatedAt This is the ISO 8601 date-time string of when the test suite run was last updated.
     */
    #[JsonProperty('updatedAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $updatedAt;

    /**
     * @var array<TestSuiteRunTestResult> $testResults These are the results of the tests in this test suite run.
     */
    #[JsonProperty('testResults'), ArrayType([TestSuiteRunTestResult::class])]
    public array $testResults;

    /**
     * @var ?string $name This is the name of the test suite run.
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @param array{
     *   status: value-of<TestSuiteRunStatus>,
     *   id: string,
     *   orgId: string,
     *   testSuiteId: string,
     *   createdAt: DateTime,
     *   updatedAt: DateTime,
     *   testResults: array<TestSuiteRunTestResult>,
     *   name?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->status = $values['status'];
        $this->id = $values['id'];
        $this->orgId = $values['orgId'];
        $this->testSuiteId = $values['testSuiteId'];
        $this->createdAt = $values['createdAt'];
        $this->updatedAt = $values['updatedAt'];
        $this->testResults = $values['testResults'];
        $this->name = $values['name'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
