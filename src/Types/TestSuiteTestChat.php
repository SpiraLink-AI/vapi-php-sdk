<?php declare(strict_types=1);

namespace Vapi\Types;

use DateTime;
use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;
use Vapi\Core\Types\Date;

final class TestSuiteTestChat extends JsonSerializableType
{
    /**
     * @var array<TestSuiteTestScorerAi> $scorers These are the scorers used to evaluate the test.
     */
    #[JsonProperty('scorers'), ArrayType([TestSuiteTestScorerAi::class])]
    public array $scorers;

    /**
     * @var string $id This is the unique identifier for the test.
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $testSuiteId This is the unique identifier for the test suite this test belongs to.
     */
    #[JsonProperty('testSuiteId')]
    public string $testSuiteId;

    /**
     * @var string $orgId This is the unique identifier for the organization this test belongs to.
     */
    #[JsonProperty('orgId')]
    public string $orgId;

    /**
     * @var DateTime $createdAt This is the ISO 8601 date-time string of when the test was created.
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $createdAt;

    /**
     * @var DateTime $updatedAt This is the ISO 8601 date-time string of when the test was last updated.
     */
    #[JsonProperty('updatedAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $updatedAt;

    /**
     * @var ?string $name This is the name of the test.
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var string $script This is the script to be used for the chat test.
     */
    #[JsonProperty('script')]
    public string $script;

    /**
     * @var ?float $numAttempts This is the number of attempts allowed for the test.
     */
    #[JsonProperty('numAttempts')]
    public ?float $numAttempts;

    /**
     * @param array{
     *   scorers: array<TestSuiteTestScorerAi>,
     *   id: string,
     *   testSuiteId: string,
     *   orgId: string,
     *   createdAt: DateTime,
     *   updatedAt: DateTime,
     *   script: string,
     *   name?: ?string,
     *   numAttempts?: ?float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->scorers = $values['scorers'];
        $this->id = $values['id'];
        $this->testSuiteId = $values['testSuiteId'];
        $this->orgId = $values['orgId'];
        $this->createdAt = $values['createdAt'];
        $this->updatedAt = $values['updatedAt'];
        $this->name = $values['name'] ?? null;
        $this->script = $values['script'];
        $this->numAttempts = $values['numAttempts'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
