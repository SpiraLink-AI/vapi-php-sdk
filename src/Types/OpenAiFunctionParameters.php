<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class OpenAiFunctionParameters extends JsonSerializableType
{
    /**
     * @var 'object' $type This must be set to 'object'. It instructs the model to return a JSON object containing the function call properties.
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * This provides a description of the properties required by the function.
     * JSON Schema can be used to specify expectations for each property.
     * Refer to [this doc](https://ajv.js.org/json-schema.html#json-data-type) for a comprehensive guide on JSON Schema.
     *
     * @var array<string, JsonSchema> $properties
     */
    #[JsonProperty('properties'), ArrayType(['string' => JsonSchema::class])]
    public array $properties;

    /**
     * @var ?array<string> $required This specifies the properties that are required by the function.
     */
    #[JsonProperty('required'), ArrayType(['string'])]
    public ?array $required;

    /**
     * @param array{
     *   type: 'object',
     *   properties: array<string, JsonSchema>,
     *   required?: ?array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->type = $values['type'];
        $this->properties = $values['properties'];
        $this->required = $values['required'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
