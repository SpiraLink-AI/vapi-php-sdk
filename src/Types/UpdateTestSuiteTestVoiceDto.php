<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class UpdateTestSuiteTestVoiceDto extends JsonSerializableType
{
    /**
     * @var ?array<TestSuiteTestScorerAi> $scorers These are the scorers used to evaluate the test.
     */
    #[JsonProperty('scorers'), ArrayType([TestSuiteTestScorerAi::class])]
    public ?array $scorers;

    /**
     * @var ?'voice' $type This is the type of the test, which must be voice.
     */
    #[JsonProperty('type')]
    public ?string $type;

    /**
     * @var ?string $name This is the name of the test.
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?string $script This is the script to be used for the voice test.
     */
    #[JsonProperty('script')]
    public ?string $script;

    /**
     * @var ?float $numAttempts This is the number of attempts allowed for the test.
     */
    #[JsonProperty('numAttempts')]
    public ?float $numAttempts;

    /**
     * @param array{
     *   scorers?: ?array<TestSuiteTestScorerAi>,
     *   type?: ?'voice',
     *   name?: ?string,
     *   script?: ?string,
     *   numAttempts?: ?float,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->scorers = $values['scorers'] ?? null;
        $this->type = $values['type'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->script = $values['script'] ?? null;
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
