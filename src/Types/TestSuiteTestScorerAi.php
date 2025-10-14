<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class TestSuiteTestScorerAi extends JsonSerializableType
{
    /**
     * @var 'ai' $type This is the type of the scorer, which must be AI.
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var string $rubric This is the rubric used by the AI scorer.
     */
    #[JsonProperty('rubric')]
    public string $rubric;

    /**
     * @param array{
     *   type: 'ai',
     *   rubric: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->type = $values['type'];
        $this->rubric = $values['rubric'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
