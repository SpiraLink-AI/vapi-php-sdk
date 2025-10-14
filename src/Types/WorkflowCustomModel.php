<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class WorkflowCustomModel extends JsonSerializableType
{
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
     * @var ?value-of<WorkflowCustomModelMetadataSendMode> $metadataSendMode
     */
    #[JsonProperty('metadataSendMode')]
    public ?string $metadataSendMode;

    /**
     * @var string $url These is the URL we'll use for the OpenAI client's `baseURL`. Ex. https://openrouter.ai/api/v1
     */
    #[JsonProperty('url')]
    public string $url;

    /**
     * @var ?array<string, mixed> $headers These are the headers we'll use for the OpenAI client's `headers`.
     */
    #[JsonProperty('headers'), ArrayType(['string' => 'mixed'])]
    public ?array $headers;

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
     * @var ?float $temperature This is the temperature of the model.
     */
    #[JsonProperty('temperature')]
    public ?float $temperature;

    /**
     * @var ?float $maxTokens This is the max tokens of the model.
     */
    #[JsonProperty('maxTokens')]
    public ?float $maxTokens;

    /**
     * @param array{
     *   url: string,
     *   model: string,
     *   metadataSendMode?: ?value-of<WorkflowCustomModelMetadataSendMode>,
     *   headers?: ?array<string, mixed>,
     *   timeoutSeconds?: ?float,
     *   temperature?: ?float,
     *   maxTokens?: ?float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->metadataSendMode = $values['metadataSendMode'] ?? null;
        $this->url = $values['url'];
        $this->headers = $values['headers'] ?? null;
        $this->timeoutSeconds = $values['timeoutSeconds'] ?? null;
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
