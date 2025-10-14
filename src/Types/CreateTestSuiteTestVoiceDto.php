<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class CreateTestSuiteTestVoiceDto extends JsonSerializableType
{
    /**
     * @var array<TestSuiteTestScorerAi> $scorers These are the scorers used to evaluate the test.
     */
    #[JsonProperty('scorers'), ArrayType([TestSuiteTestScorerAi::class])]
    public array $scorers;

    /**
     * @var 'voice' $type This is the type of the test, which must be voice.
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var string $script This is the script to be used for the voice test.
     */
    #[JsonProperty('script')]
    public string $script;

    /**
     * @var ?float $numAttempts This is the number of attempts allowed for the test.
     */
    #[JsonProperty('numAttempts')]
    public ?float $numAttempts;

    /**
     * @var ?string $name This is the name of the test.
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @param array{
     *   scorers: array<TestSuiteTestScorerAi>,
     *   type: 'voice',
     *   script: string,
     *   numAttempts?: ?float,
     *   name?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->scorers = $values['scorers'];
        $this->type = $values['type'];
        $this->script = $values['script'];
        $this->numAttempts = $values['numAttempts'] ?? null;
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
