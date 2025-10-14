<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class OpenAiFunction extends JsonSerializableType
{
    /**
     * This is a boolean that controls whether to enable strict schema adherence when generating the function call. If set to true, the model will follow the exact schema defined in the parameters field. Only a subset of JSON Schema is supported when strict is true. Learn more about Structured Outputs in the [OpenAI guide](https://openai.com/index/introducing-structured-outputs-in-the-api/).
     *
     * @default false
     *
     * @var ?bool $strict
     */
    #[JsonProperty('strict')]
    public ?bool $strict;

    /**
     * This is the the name of the function to be called.
     *
     * Must be a-z, A-Z, 0-9, or contain underscores and dashes, with a maximum length of 64.
     *
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?string $description This is the description of what the function does, used by the AI to choose when and how to call the function.
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * These are the parameters the functions accepts, described as a JSON Schema object.
     *
     * See the [OpenAI guide](https://platform.openai.com/docs/guides/function-calling) for examples, and the [JSON Schema reference](https://json-schema.org/understanding-json-schema) for documentation about the format.
     *
     * Omitting parameters defines a function with an empty parameter list.
     *
     * @var ?OpenAiFunctionParameters $parameters
     */
    #[JsonProperty('parameters')]
    public ?OpenAiFunctionParameters $parameters;

    /**
     * @param array{
     *   name: string,
     *   strict?: ?bool,
     *   description?: ?string,
     *   parameters?: ?OpenAiFunctionParameters,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->strict = $values['strict'] ?? null;
        $this->name = $values['name'];
        $this->description = $values['description'] ?? null;
        $this->parameters = $values['parameters'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
