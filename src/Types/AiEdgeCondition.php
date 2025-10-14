<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class AiEdgeCondition extends JsonSerializableType
{
    /**
     * @var 'ai' $type
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var string $prompt This is the prompt for the AI edge condition. It should evaluate to a boolean.
     */
    #[JsonProperty('prompt')]
    public string $prompt;

    /**
     * @param array{
     *   type: 'ai',
     *   prompt: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->type = $values['type'];
        $this->prompt = $values['prompt'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
