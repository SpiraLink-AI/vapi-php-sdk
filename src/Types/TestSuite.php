<?php declare(strict_types=1);

namespace Vapi\Types;

use DateTime;
use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\Date;

final class TestSuite extends JsonSerializableType
{
    /**
     * @var string $id This is the unique identifier for the test suite.
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $orgId This is the unique identifier for the org that this test suite belongs to.
     */
    #[JsonProperty('orgId')]
    public string $orgId;

    /**
     * @var DateTime $createdAt This is the ISO 8601 date-time string of when the test suite was created.
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $createdAt;

    /**
     * @var DateTime $updatedAt This is the ISO 8601 date-time string of when the test suite was last updated.
     */
    #[JsonProperty('updatedAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $updatedAt;

    /**
     * @var ?string $name This is the name of the test suite.
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?string $phoneNumberId This is the phone number ID associated with this test suite.
     */
    #[JsonProperty('phoneNumberId')]
    public ?string $phoneNumberId;

    /**
     * Override the default tester plan by providing custom assistant configuration for the test agent.
     *
     * We recommend only using this if you are confident, as we have already set sensible defaults on the tester plan.
     *
     * @var ?TesterPlan $testerPlan
     */
    #[JsonProperty('testerPlan')]
    public ?TesterPlan $testerPlan;

    /**
     * @var ?TargetPlan $targetPlan These are the configuration for the assistant / phone number that is being tested.
     */
    #[JsonProperty('targetPlan')]
    public ?TargetPlan $targetPlan;

    /**
     * @param array{
     *   id: string,
     *   orgId: string,
     *   createdAt: DateTime,
     *   updatedAt: DateTime,
     *   name?: ?string,
     *   phoneNumberId?: ?string,
     *   testerPlan?: ?TesterPlan,
     *   targetPlan?: ?TargetPlan,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->orgId = $values['orgId'];
        $this->createdAt = $values['createdAt'];
        $this->updatedAt = $values['updatedAt'];
        $this->name = $values['name'] ?? null;
        $this->phoneNumberId = $values['phoneNumberId'] ?? null;
        $this->testerPlan = $values['testerPlan'] ?? null;
        $this->targetPlan = $values['targetPlan'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
