<?php declare(strict_types=1);

namespace Vapi\StructuredOutputs\Requests;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;
use Vapi\StructuredOutputs\Types\CreateStructuredOutputDtoModel;
use Vapi\Types\JsonSchema;

final class CreateStructuredOutputDto extends JsonSerializableType
{
    /**
     * This is the model that will be used to extract the structured output.
     *
     * To provide your own custom system and user prompts for structured output extraction, populate the messages array with your system and user messages. You can specify liquid templating in your system and user messages.
     * Between the system or user messages, you must reference either 'transcript' or 'messages' with the '{{}}' syntax to access the conversation history.
     * Between the system or user messages, you must reference a variation of the structured output with the '{{}}' syntax to access the structured output definition.
     * i.e.:
     * {{structuredOutput}}
     * {{structuredOutput.name}}
     * {{structuredOutput.description}}
     * {{structuredOutput.schema}}
     *
     * If model is not specified, GPT-4.1 will be used by default for extraction, utilizing default system and user prompts.
     * If messages or required fields are not specified, the default system and user prompts will be used.
     *
     * @var ?CreateStructuredOutputDtoModel $model
     */
    #[JsonProperty('model')]
    public ?CreateStructuredOutputDtoModel $model;

    /**
     * @var string $name This is the name of the structured output.
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * This is the JSON Schema definition for the structured output.
     *
     * This is required when creating a structured output. Defines the structure and validation rules for the data that will be extracted. Supports all JSON Schema features including:
     * - Objects and nested properties
     * - Arrays and array validation
     * - String, number, boolean, and null types
     * - Enums and const values
     * - Validation constraints (min/max, patterns, etc.)
     * - Composition with allOf, anyOf, oneOf
     *
     * @var JsonSchema $schema
     */
    #[JsonProperty('schema')]
    public JsonSchema $schema;

    /**
     * This is the description of what the structured output extracts.
     *
     * Use this to provide context about what data will be extracted and how it will be used.
     *
     * @var ?string $description
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * These are the assistant IDs that this structured output is linked to.
     *
     * When linked to assistants, this structured output will be available for extraction during those assistant's calls.
     *
     * @var ?array<string> $assistantIds
     */
    #[JsonProperty('assistantIds'), ArrayType(['string'])]
    public ?array $assistantIds;

    /**
     * These are the workflow IDs that this structured output is linked to.
     *
     * When linked to workflows, this structured output will be available for extraction during those workflow's execution.
     *
     * @var ?array<string> $workflowIds
     */
    #[JsonProperty('workflowIds'), ArrayType(['string'])]
    public ?array $workflowIds;

    /**
     * @param array{
     *   name: string,
     *   schema: JsonSchema,
     *   model?: ?CreateStructuredOutputDtoModel,
     *   description?: ?string,
     *   assistantIds?: ?array<string>,
     *   workflowIds?: ?array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->model = $values['model'] ?? null;
        $this->name = $values['name'];
        $this->schema = $values['schema'];
        $this->description = $values['description'] ?? null;
        $this->assistantIds = $values['assistantIds'] ?? null;
        $this->workflowIds = $values['workflowIds'] ?? null;
    }
}
