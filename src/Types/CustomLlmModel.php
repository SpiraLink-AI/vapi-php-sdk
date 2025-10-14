<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class CustomLlmModel extends JsonSerializableType
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
     * @var ?array<CustomLlmModelToolsItem> $tools
     */
    #[JsonProperty('tools'), ArrayType([CustomLlmModelToolsItem::class])]
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
     * This determines whether metadata is sent in requests to the custom provider.
     *
     * - `off` will not send any metadata. payload will look like `{ messages }`
     * - `variable` will send `assistant.metadata` as a variable on the payload. payload will look like `{ messages, metadata }`
     * - `destructured` will send `assistant.metadata` fields directly on the payload. payload will look like `{ messages, ...metadata }`
     *
     * Further, `variable` and `destructured` will send `call`, `phoneNumber`, and `customer` objects in the payload.
     *
     * Default is `variable`.
     *
     * @var ?value-of<CustomLlmModelMetadataSendMode> $metadataSendMode
     */
    #[JsonProperty('metadataSendMode')]
    public ?string $metadataSendMode;

    /**
     * @var ?array<string, string> $headers Custom headers to send with requests. These headers can override default OpenAI headers except for Authorization (which should be specified using a custom-llm credential).
     */
    #[JsonProperty('headers'), ArrayType(['string' => 'string'])]
    public ?array $headers;

    /**
     * @var string $url These is the URL we'll use for the OpenAI client's `baseURL`. Ex. https://openrouter.ai/api/v1
     */
    #[JsonProperty('url')]
    public string $url;

    /**
     * This determines whether the transcriber's word level confidence is sent in requests to the custom provider. Default is false.
     * This only works for Deepgram transcribers.
     *
     * @var ?bool $wordLevelConfidenceEnabled
     */
    #[JsonProperty('wordLevelConfidenceEnabled')]
    public ?bool $wordLevelConfidenceEnabled;

    /**
     * @var ?float $timeoutSeconds This sets the timeout for the connection to the custom provider without needing to stream any tokens back. Default is 20 seconds.
     */
    #[JsonProperty('timeoutSeconds')]
    public ?float $timeoutSeconds;

    /**
     * @var string $model This is the name of the model. Ex. cognitivecomputations/dolphin-mixtral-8x7b
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
     *   url: string,
     *   model: string,
     *   messages?: ?array<OpenAiMessage>,
     *   tools?: ?array<CustomLlmModelToolsItem>,
     *   toolIds?: ?array<string>,
     *   knowledgeBase?: ?CreateCustomKnowledgeBaseDto,
     *   metadataSendMode?: ?value-of<CustomLlmModelMetadataSendMode>,
     *   headers?: ?array<string, string>,
     *   wordLevelConfidenceEnabled?: ?bool,
     *   timeoutSeconds?: ?float,
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
        $this->metadataSendMode = $values['metadataSendMode'] ?? null;
        $this->headers = $values['headers'] ?? null;
        $this->url = $values['url'];
        $this->wordLevelConfidenceEnabled = $values['wordLevelConfidenceEnabled'] ?? null;
        $this->timeoutSeconds = $values['timeoutSeconds'] ?? null;
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
