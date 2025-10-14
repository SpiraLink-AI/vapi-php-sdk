<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class UpdateApiRequestToolDto extends JsonSerializableType
{
    /**
     * These are the messages that will be spoken to the user as the tool is running.
     *
     * For some tools, this is auto-filled based on special fields like `tool.destinations`. For others like the function tool, these can be custom configured.
     *
     * @var ?array<UpdateApiRequestToolDtoMessagesItem> $messages
     */
    #[JsonProperty('messages'), ArrayType([UpdateApiRequestToolDtoMessagesItem::class])]
    public ?array $messages;

    /**
     * @var ?value-of<UpdateApiRequestToolDtoMethod> $method
     */
    #[JsonProperty('method')]
    public ?string $method;

    /**
     * This is the timeout in seconds for the request. Defaults to 20 seconds.
     *
     * @default 20
     *
     * @var ?float $timeoutSeconds
     */
    #[JsonProperty('timeoutSeconds')]
    public ?float $timeoutSeconds;

    /**
     * @var ?string $credentialId The credential ID for API request authentication
     */
    #[JsonProperty('credentialId')]
    public ?string $credentialId;

    /**
     * This is the plan to reject a tool call based on the conversation state.
     *
     * // Example 1: Reject endCall if user didn't say goodbye
     * ```json
     * {
     *   conditions: [{
     *     type: 'regex',
     *     regex: '(?i)\\b(bye|goodbye|farewell|see you later|take care)\\b',
     *     target: { position: -1, role: 'user' },
     *     negate: true  // Reject if pattern does NOT match
     *   }]
     * }
     * ```
     *
     * // Example 2: Reject transfer if user is actually asking a question
     * ```json
     * {
     *   conditions: [{
     *     type: 'regex',
     *     regex: '\\?',
     *     target: { position: -1, role: 'user' }
     *   }]
     * }
     * ```
     *
     * // Example 3: Reject transfer if user didn't mention transfer recently
     * ```json
     * {
     *   conditions: [{
     *     type: 'liquid',
     *     liquid: `{% assign recentMessages = messages | last: 5 %}
     * {% assign userMessages = recentMessages | where: 'role', 'user' %}
     * {% assign mentioned = false %}
     * {% for msg in userMessages %}
     *   {% if msg.content contains 'transfer' or msg.content contains 'connect' or msg.content contains 'speak to' %}
     *     {% assign mentioned = true %}
     *     {% break %}
     *   {% endif %}
     * {% endfor %}
     * {% if mentioned %}
     *   false
     * {% else %}
     *   true
     * {% endif %}`
     *   }]
     * }
     * ```
     *
     * // Example 4: Reject endCall if the bot is looping and trying to exit
     * ```json
     * {
     *   conditions: [{
     *     type: 'liquid',
     *     liquid: `{% assign recentMessages = messages | last: 6 %}
     * {% assign userMessages = recentMessages | where: 'role', 'user' | reverse %}
     * {% if userMessages.size < 3 %}
     *   false
     * {% else %}
     *   {% assign msg1 = userMessages[0].content | downcase %}
     *   {% assign msg2 = userMessages[1].content | downcase %}
     *   {% assign msg3 = userMessages[2].content | downcase %}
     *   {% comment %} Check for repetitive messages {% endcomment %}
     *   {% if msg1 == msg2 or msg1 == msg3 or msg2 == msg3 %}
     *     true
     *   {% comment %} Check for common loop phrases {% endcomment %}
     *   {% elsif msg1 contains 'cool thanks' or msg2 contains 'cool thanks' or msg3 contains 'cool thanks' %}
     *     true
     *   {% elsif msg1 contains 'okay thanks' or msg2 contains 'okay thanks' or msg3 contains 'okay thanks' %}
     *     true
     *   {% elsif msg1 contains 'got it' or msg2 contains 'got it' or msg3 contains 'got it' %}
     *     true
     *   {% else %}
     *     false
     *   {% endif %}
     * {% endif %}`
     *   }]
     * }
     * ```
     *
     * @var ?ToolRejectionPlan $rejectionPlan
     */
    #[JsonProperty('rejectionPlan')]
    public ?ToolRejectionPlan $rejectionPlan;

    /**
     * This is the name of the tool. This will be passed to the model.
     *
     * Must be a-z, A-Z, 0-9, or contain underscores and dashes, with a maximum length of 40.
     *
     * @var ?string $name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?string $description This is the description of the tool. This will be passed to the model.
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @var ?string $url This is where the request will be sent.
     */
    #[JsonProperty('url')]
    public ?string $url;

    /**
     * @var ?JsonSchema $body This is the body of the request.
     */
    #[JsonProperty('body')]
    public ?JsonSchema $body;

    /**
     * @var ?JsonSchema $headers These are the headers to send with the request.
     */
    #[JsonProperty('headers')]
    public ?JsonSchema $headers;

    /**
     * This is the backoff plan if the request fails. Defaults to undefined (the request will not be retried).
     *
     * @default undefined (the request will not be retried)
     *
     * @var ?BackoffPlan $backoffPlan
     */
    #[JsonProperty('backoffPlan')]
    public ?BackoffPlan $backoffPlan;

    /**
     * This is the plan to extract variables from the tool's response. These will be accessible during the call and stored in `call.artifact.variableValues` after the call.
     *
     * Usage:
     * 1. Use `aliases` to extract variables from the tool's response body. (Most common case)
     *
     * ```json
     * {
     *   "aliases": [
     *     {
     *       "key": "customerName",
     *       "value": "{{customer.name}}"
     *     },
     *     {
     *       "key": "customerAge",
     *       "value": "{{customer.age}}"
     *     }
     *   ]
     * }
     * ```
     *
     * The tool response body is made available to the liquid template.
     *
     * 2. Use `aliases` to extract variables from the tool's response body if the response is an array.
     *
     * ```json
     * {
     *   "aliases": [
     *     {
     *       "key": "customerName",
     *       "value": "{{$[0].name}}"
     *     },
     *     {
     *       "key": "customerAge",
     *       "value": "{{$[0].age}}"
     *     }
     *   ]
     * }
     * ```
     *
     * $ is a shorthand for the tool's response body. `$[0]` is the first item in the array. `$[n]` is the nth item in the array. Note, $ is available regardless of the response body type (both object and array).
     *
     * 3. Use `aliases` to extract variables from the tool's response headers.
     *
     * ```json
     * {
     *   "aliases": [
     *     {
     *       "key": "customerName",
     *       "value": "{{tool.response.headers.customer-name}}"
     *     },
     *     {
     *       "key": "customerAge",
     *       "value": "{{tool.response.headers.customer-age}}"
     *     }
     *   ]
     * }
     * ```
     *
     * `tool.response` is made available to the liquid template. Particularly, both `tool.response.headers` and `tool.response.body` are available. Note, `tool.response` is available regardless of the response body type (both object and array).
     *
     * 4. Use `schema` to extract a large portion of the tool's response body.
     *
     * 4.1. If you hit example.com and it returns `{"name": "John", "age": 30}`, then you can specify the schema as:
     *
     * ```json
     * {
     *   "schema": {
     *     "type": "object",
     *     "properties": {
     *       "name": {
     *         "type": "string"
     *       },
     *       "age": {
     *         "type": "number"
     *       }
     *     }
     *   }
     * }
     * ```
     * These will be extracted as `{{ name }}` and `{{ age }}` respectively. To emphasize, object properties are extracted as direct global variables.
     *
     * 4.2. If you hit example.com and it returns `{"name": {"first": "John", "last": "Doe"}}`, then you can specify the schema as:
     *
     * ```json
     * {
     *   "schema": {
     *     "type": "object",
     *     "properties": {
     *       "name": {
     *         "type": "object",
     *         "properties": {
     *           "first": {
     *             "type": "string"
     *           },
     *           "last": {
     *             "type": "string"
     *           }
     *         }
     *       }
     *     }
     *   }
     * }
     * ```
     *
     * These will be extracted as `{{ name }}`. And, `{{ name.first }}` and `{{ name.last }}` will be accessible.
     *
     * 4.3. If you hit example.com and it returns `["94123", "94124"]`, then you can specify the schema as:
     *
     * ```json
     * {
     *   "schema": {
     *     "type": "array",
     *     "title": "zipCodes",
     *     "items": {
     *       "type": "string"
     *     }
     *   }
     * }
     * ```
     *
     * This will be extracted as `{{ zipCodes }}`. To access the array items, you can use `{{ zipCodes[0] }}` and `{{ zipCodes[1] }}`.
     *
     * 4.4. If you hit example.com and it returns `[{"name": "John", "age": 30, "zipCodes": ["94123", "94124"]}, {"name": "Jane", "age": 25, "zipCodes": ["94125", "94126"]}]`, then you can specify the schema as:
     *
     * ```json
     * {
     *   "schema": {
     *     "type": "array",
     *     "title": "people",
     *     "items": {
     *       "type": "object",
     *       "properties": {
     *         "name": {
     *           "type": "string"
     *         },
     *         "age": {
     *           "type": "number"
     *         },
     *         "zipCodes": {
     *           "type": "array",
     *           "items": {
     *             "type": "string"
     *           }
     *         }
     *       }
     *     }
     *   }
     * }
     * ```
     *
     * This will be extracted as `{{ people }}`. To access the array items, you can use `{{ people[n].name }}`, `{{ people[n].age }}`, `{{ people[n].zipCodes }}`, `{{ people[n].zipCodes[0] }}` and `{{ people[n].zipCodes[1] }}`.
     *
     * Note: Both `aliases` and `schema` can be used together.
     *
     * @var ?VariableExtractionPlan $variableExtractionPlan
     */
    #[JsonProperty('variableExtractionPlan')]
    public ?VariableExtractionPlan $variableExtractionPlan;

    /**
     * @param array{
     *   messages?: ?array<UpdateApiRequestToolDtoMessagesItem>,
     *   method?: ?value-of<UpdateApiRequestToolDtoMethod>,
     *   timeoutSeconds?: ?float,
     *   credentialId?: ?string,
     *   rejectionPlan?: ?ToolRejectionPlan,
     *   name?: ?string,
     *   description?: ?string,
     *   url?: ?string,
     *   body?: ?JsonSchema,
     *   headers?: ?JsonSchema,
     *   backoffPlan?: ?BackoffPlan,
     *   variableExtractionPlan?: ?VariableExtractionPlan,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->messages = $values['messages'] ?? null;
        $this->method = $values['method'] ?? null;
        $this->timeoutSeconds = $values['timeoutSeconds'] ?? null;
        $this->credentialId = $values['credentialId'] ?? null;
        $this->rejectionPlan = $values['rejectionPlan'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->description = $values['description'] ?? null;
        $this->url = $values['url'] ?? null;
        $this->body = $values['body'] ?? null;
        $this->headers = $values['headers'] ?? null;
        $this->backoffPlan = $values['backoffPlan'] ?? null;
        $this->variableExtractionPlan = $values['variableExtractionPlan'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
