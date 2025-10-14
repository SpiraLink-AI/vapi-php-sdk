<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class OpenAiModel extends JsonSerializableType
{
    /**
     * @var ?array<OpenAiMessage> $messages This is the starting state for the conversation.
     */
    #[JsonProperty('messages'), ArrayType([OpenAiMessage::class])]
    public ?array $messages;

    /**
     * These are the tools that the assistant can use during the call. To use existing tools, use `toolIds`.
     *
     * Both `tools` and `toolIds` can be used together.
     *
     * @var ?array<OpenAiModelToolsItem> $tools
     */
    #[JsonProperty('tools'), ArrayType([OpenAiModelToolsItem::class])]
    public ?array $tools;

    /**
     * These are the tools that the assistant can use during the call. To use transient tools, use `tools`.
     *
     * Both `tools` and `toolIds` can be used together.
     *
     * @var ?array<string> $toolIds
     */
    #[JsonProperty('toolIds'), ArrayType(['string'])]
    public ?array $toolIds;

    /**
     * @var ?CreateCustomKnowledgeBaseDto $knowledgeBase These are the options for the knowledge base.
     */
    #[JsonProperty('knowledgeBase')]
    public ?CreateCustomKnowledgeBaseDto $knowledgeBase;

    /**
     * This is the OpenAI model that will be used.
     *
     * When using Vapi OpenAI or your own Azure Credentials, you have the option to specify the region for the selected model. This shouldn't be specified unless you have a specific reason to do so. Vapi will automatically find the fastest region that make sense.
     * This is helpful when you are required to comply with Data Residency rules. Learn more about Azure regions here https://azure.microsoft.com/en-us/explore/global-infrastructure/data-residency/.
     *
     * @default undefined
     *
     * @var value-of<OpenAiModelModel> $model
     */
    #[JsonProperty('model')]
    public string $model;

    /**
     * @var ?array<value-of<OpenAiModelFallbackModelsItem>> $fallbackModels These are the fallback models that will be used if the primary model fails. This shouldn't be specified unless you have a specific reason to do so. Vapi will automatically find the fastest fallbacks that make sense.
     */
    #[JsonProperty('fallbackModels'), ArrayType(['string'])]
    public ?array $fallbackModels;

    /**
     * Azure OpenAI doesn't support `maxLength` right now https://learn.microsoft.com/en-us/azure/ai-services/openai/how-to/structured-outputs?tabs=python-secure%2Cdotnet-entra-id&pivots=programming-language-csharp#unsupported-type-specific-keywords. Need to strip.
     *
     * - `strip-parameters-with-unsupported-validation` will strip parameters with unsupported validation.
     * - `strip-unsupported-validation` will keep the parameters but strip unsupported validation.
     *
     * @default `strip-unsupported-validation`
     *
     * @var ?value-of<OpenAiModelToolStrictCompatibilityMode> $toolStrictCompatibilityMode
     */
    #[JsonProperty('toolStrictCompatibilityMode')]
    public ?string $toolStrictCompatibilityMode;

    /**
     * @var ?float $temperature This is the temperature that will be used for calls. Default is 0 to leverage caching for lower latency.
     */
    #[JsonProperty('temperature')]
    public ?float $temperature;

    /**
     * @var ?float $maxTokens This is the max number of tokens that the assistant will be allowed to generate in each turn of the conversation. Default is 250.
     */
    #[JsonProperty('maxTokens')]
    public ?float $maxTokens;

    /**
     * This determines whether we detect user's emotion while they speak and send it as an additional info to model.
     *
     * Default `false` because the model is usually are good at understanding the user's emotion from text.
     *
     * @default false
     *
     * @var ?bool $emotionRecognitionEnabled
     */
    #[JsonProperty('emotionRecognitionEnabled')]
    public ?bool $emotionRecognitionEnabled;

    /**
     * This sets how many turns at the start of the conversation to use a smaller, faster model from the same provider before switching to the primary model. Example, gpt-3.5-turbo if provider is openai.
     *
     * Default is 0.
     *
     * @default 0
     *
     * @var ?float $numFastTurns
     */
    #[JsonProperty('numFastTurns')]
    public ?float $numFastTurns;

    /**
     * @param array{
     *   model: value-of<OpenAiModelModel>,
     *   messages?: ?array<OpenAiMessage>,
     *   tools?: ?array<OpenAiModelToolsItem>,
     *   toolIds?: ?array<string>,
     *   knowledgeBase?: ?CreateCustomKnowledgeBaseDto,
     *   fallbackModels?: ?array<value-of<OpenAiModelFallbackModelsItem>>,
     *   toolStrictCompatibilityMode?: ?value-of<OpenAiModelToolStrictCompatibilityMode>,
     *   temperature?: ?float,
     *   maxTokens?: ?float,
     *   emotionRecognitionEnabled?: ?bool,
     *   numFastTurns?: ?float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->messages = $values['messages'] ?? null;
        $this->tools = $values['tools'] ?? null;
        $this->toolIds = $values['toolIds'] ?? null;
        $this->knowledgeBase = $values['knowledgeBase'] ?? null;
        $this->model = $values['model'];
        $this->fallbackModels = $values['fallbackModels'] ?? null;
        $this->toolStrictCompatibilityMode = $values['toolStrictCompatibilityMode'] ?? null;
        $this->temperature = $values['temperature'] ?? null;
        $this->maxTokens = $values['maxTokens'] ?? null;
        $this->emotionRecognitionEnabled = $values['emotionRecognitionEnabled'] ?? null;
        $this->numFastTurns = $values['numFastTurns'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
