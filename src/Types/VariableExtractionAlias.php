<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class VariableExtractionAlias extends JsonSerializableType
{
    /**
     * This is the key of the variable.
     *
     * This variable will be accessible during the call as `{{key}}` and stored in `call.artifact.variableValues` after the call.
     *
     * Rules:
     * - Must start with a letter (a-z, A-Z).
     * - Subsequent characters can be letters, numbers, or underscores.
     * - Minimum length of 1 and maximum length of 40.
     *
     * @var string $key
     */
    #[JsonProperty('key')]
    public string $key;

    /**
     * This is the value of the variable.
     *
     * This can reference existing variables, use filters, and perform transformations.
     *
     * Examples: "{{name}}", "{{customer.email}}", "Hello {{name | upcase}}"
     *
     * @var string $value
     */
    #[JsonProperty('value')]
    public string $value;

    /**
     * @param array{
     *   key: string,
     *   value: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->key = $values['key'];
        $this->value = $values['value'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
