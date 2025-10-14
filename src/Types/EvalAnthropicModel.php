<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class EvalAnthropicModel extends JsonSerializableType
{
    /**
     * @var value-of<EvalAnthropicModelModel> $model This is the specific model that will be used.
     */
    #[JsonProperty('model')]
    public string $model;

    /**
     * This is the optional configuration for Anthropic's thinking feature.
     *
     * - Only applicable for `claude-3-7-sonnet-20250219` model.
     * - If provided, `maxTokens` must be greater than `thinking.budgetTokens`.
     *
     * @var ?AnthropicThinkingConfig $thinking
     */
    #[JsonProperty('thinking')]
    public ?AnthropicThinkingConfig $thinking;

    /**
     * @var ?float $temperature This is the temperature of the model. For LLM-as-a-judge, it's recommended to set it between 0 - 0.3 to avoid hallucinations and ensure the model judges the output correctly based on the instructions.
     */
    #[JsonProperty('temperature')]
    public ?float $temperature;

    /**
     * This is the max tokens of the model.
     * If your Judge instructions return `true` or `false` takes only 1 token (as per the OpenAI Tokenizer), and therefore is recommended to set it to a low number to force the model to return a short response.
     *
     * @var ?float $maxTokens
     */
    #[JsonProperty('maxTokens')]
    public ?float $maxTokens;

    /**
     * @param array{
     *   model: value-of<EvalAnthropicModelModel>,
     *   thinking?: ?AnthropicThinkingConfig,
     *   temperature?: ?float,
     *   maxTokens?: ?float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->model = $values['model'];
        $this->thinking = $values['thinking'] ?? null;
        $this->temperature = $values['temperature'] ?? null;
        $this->maxTokens = $values['maxTokens'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
