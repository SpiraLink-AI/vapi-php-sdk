<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class EvalOpenAiModel extends JsonSerializableType
{
    /**
     * This is the OpenAI model that will be used.
     *
     * When using Vapi OpenAI or your own Azure Credentials, you have the option to specify the region for the selected model. This shouldn't be specified unless you have a specific reason to do so. Vapi will automatically find the fastest region that make sense.
     * This is helpful when you are required to comply with Data Residency rules. Learn more about Azure regions here https://azure.microsoft.com/en-us/explore/global-infrastructure/data-residency/.
     *
     * @var value-of<EvalOpenAiModelModel> $model
     */
    #[JsonProperty('model')]
    public string $model;

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
     *   model: value-of<EvalOpenAiModelModel>,
     *   temperature?: ?float,
     *   maxTokens?: ?float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->model = $values['model'];
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
