<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class CreateTestSuiteDto extends JsonSerializableType
{
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
     *   name?: ?string,
     *   phoneNumberId?: ?string,
     *   testerPlan?: ?TesterPlan,
     *   targetPlan?: ?TargetPlan,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
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
