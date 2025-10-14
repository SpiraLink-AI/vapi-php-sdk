<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class JsonSchema extends JsonSerializableType
{
    /**
     * This is the type of output you'd like.
     *
     * `string`, `number`, `integer`, `boolean` are the primitive types and should be obvious.
     *
     * `array` and `object` are more interesting and quite powerful. They allow you to define nested structures.
     *
     * For `array`, you can define the schema of the items in the array using the `items` property.
     *
     * For `object`, you can define the properties of the object using the `properties` property.
     *
     * @var value-of<JsonSchemaType> $type
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * This is required if the type is "array". This is the schema of the items in the array.
     *
     * This is of type JsonSchema. However, Swagger doesn't support circular references.
     *
     * @var ?array<string, mixed> $items
     */
    #[JsonProperty('items'), ArrayType(['string' => 'mixed'])]
    public ?array $items;

    /**
     * This is required if the type is "object". This specifies the properties of the object.
     *
     * This is a map of string to JsonSchema. However, Swagger doesn't support circular references.
     *
     * @var ?array<string, mixed> $properties
     */
    #[JsonProperty('properties'), ArrayType(['string' => 'mixed'])]
    public ?array $properties;

    /**
     * @var ?string $description This is the description to help the model understand what it needs to output.
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * This is the pattern of the string. This is a regex that will be used to validate the data in question. To use a common format, use the `format` property instead.
     *
     * OpenAI documentation: https://platform.openai.com/docs/guides/structured-outputs#supported-properties
     *
     * @var ?string $pattern
     */
    #[JsonProperty('pattern')]
    public ?string $pattern;

    /**
     * This is the format of the string. To pass a regex, use the `pattern` property instead.
     *
     * OpenAI documentation: https://platform.openai.com/docs/guides/structured-outputs?api-mode=chat&type-restrictions=string-restrictions
     *
     * @var ?value-of<JsonSchemaFormat> $format
     */
    #[JsonProperty('format')]
    public ?string $format;

    /**
     * This is a list of properties that are required.
     *
     * This only makes sense if the type is "object".
     *
     * @var ?array<string> $required
     */
    #[JsonProperty('required'), ArrayType(['string'])]
    public ?array $required;

    /**
     * @var ?array<string> $enum This array specifies the allowed values that can be used to restrict the output of the model.
     */
    #[JsonProperty('enum'), ArrayType(['string'])]
    public ?array $enum;

    /**
     * @var ?string $title This is the title of the schema.
     */
    #[JsonProperty('title')]
    public ?string $title;

    /**
     * @param array{
     *   type: value-of<JsonSchemaType>,
     *   items?: ?array<string, mixed>,
     *   properties?: ?array<string, mixed>,
     *   description?: ?string,
     *   pattern?: ?string,
     *   format?: ?value-of<JsonSchemaFormat>,
     *   required?: ?array<string>,
     *   enum?: ?array<string>,
     *   title?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->type = $values['type'];
        $this->items = $values['items'] ?? null;
        $this->properties = $values['properties'] ?? null;
        $this->description = $values['description'] ?? null;
        $this->pattern = $values['pattern'] ?? null;
        $this->format = $values['format'] ?? null;
        $this->required = $values['required'] ?? null;
        $this->enum = $values['enum'] ?? null;
        $this->title = $values['title'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
