<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class DeepSeekModel extends JsonSerializableType
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
     * @var ?array<DeepSeekModelToolsItem> $tools
     */
    #[JsonProperty('tools'), ArrayType([DeepSeekModelToolsItem::class])]
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
     * @var value-of<DeepSeekModelModel> $model This is the name of the model. Ex. cognitivecomputations/dolphin-mixtral-8x7b
     */
    #[JsonProperty('model')]
    public string $model;

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
     *   model: value-of<DeepSeekModelModel>,
     *   messages?: ?array<OpenAiMessage>,
     *   tools?: ?array<DeepSeekModelToolsItem>,
     *   toolIds?: ?array<string>,
     *   knowledgeBase?: ?CreateCustomKnowledgeBaseDto,
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
