<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class StructuredDataPlan extends JsonSerializableType
{
    /**
     * These are the messages used to generate the structured data.
     *
     * @default: ```
     * [
     *   {
     *     "role": "system",
     *     "content": "You are an expert data extractor. You will be given a transcript of a call. Extract structured data per the JSON Schema. DO NOT return anything except the structured data.\n\nJson Schema:\\n{{schema}}\n\nOnly respond with the JSON."
     *   },
     *   {
     *     "role": "user",
     *     "content": "Here is the transcript:\n\n{{transcript}}\n\n. Here is the ended reason of the call:\n\n{{endedReason}}\n\n"
     *   }
     * ]```
     *
     * You can customize by providing any messages you want.
     *
     * Here are the template variables available:
     * - {{transcript}}: the transcript of the call from `call.artifact.transcript`- {{systemPrompt}}: the system prompt of the call from `assistant.model.messages[type=system].content`- {{messages}}: the messages of the call from `assistant.model.messages`- {{schema}}: the schema of the structured data from `structuredDataPlan.schema`- {{endedReason}}: the ended reason of the call from `call.endedReason`
     *
     * @var ?array<array<string, mixed>> $messages
     */
    #[JsonProperty('messages'), ArrayType([['string' => 'mixed']])]
    public ?array $messages;

    /**
     * This determines whether structured data is generated and stored in `call.analysis.structuredData`. Defaults to false.
     *
     * Usage:
     * - If you want to extract structured data, set this to true and provide a `schema`.
     *
     * @default false
     *
     * @var ?bool $enabled
     */
    #[JsonProperty('enabled')]
    public ?bool $enabled;

    /**
     * This is the schema of the structured data. The output is stored in `call.analysis.structuredData`.
     *
     * Complete guide on JSON Schema can be found [here](https://ajv.js.org/json-schema.html#json-data-type).
     *
     * @var ?JsonSchema $schema
     */
    #[JsonProperty('schema')]
    public ?JsonSchema $schema;

    /**
     * This is how long the request is tried before giving up. When request times out, `call.analysis.structuredData` will be empty.
     *
     * Usage:
     * - To guarantee the structured data is generated, set this value high. Note, this will delay the end of call report in cases where model is slow to respond.
     *
     * @default 5 seconds
     *
     * @var ?float $timeoutSeconds
     */
    #[JsonProperty('timeoutSeconds')]
    public ?float $timeoutSeconds;

    /**
     * @param array{
     *   messages?: ?array<array<string, mixed>>,
     *   enabled?: ?bool,
     *   schema?: ?JsonSchema,
     *   timeoutSeconds?: ?float,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->messages = $values['messages'] ?? null;
        $this->enabled = $values['enabled'] ?? null;
        $this->schema = $values['schema'] ?? null;
        $this->timeoutSeconds = $values['timeoutSeconds'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
