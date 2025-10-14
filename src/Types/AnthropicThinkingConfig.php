<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class AnthropicThinkingConfig extends JsonSerializableType
{
    /**
     * @var 'enabled' $type
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * The maximum number of tokens to allocate for thinking.
     * Must be between 1024 and 100000 tokens.
     *
     * @var float $budgetTokens
     */
    #[JsonProperty('budgetTokens')]
    public float $budgetTokens;

    /**
     * @param array{
     *   type: 'enabled',
     *   budgetTokens: float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->type = $values['type'];
        $this->budgetTokens = $values['budgetTokens'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
