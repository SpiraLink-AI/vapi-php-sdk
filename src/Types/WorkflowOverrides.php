<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class WorkflowOverrides extends JsonSerializableType
{
    /**
     * These are values that will be used to replace the template variables in the workflow messages and other text-based fields.
     * This uses LiquidJS syntax. https://liquidjs.com/tutorials/intro-to-liquid.html
     *
     * So for example, `{{ name }}` will be replaced with the value of `name` in `variableValues`.
     * `{{"now" | date: "%b %d, %Y, %I:%M %p", "America/New_York"}}` will be replaced with the current date and time in New York.
     *  Some VAPI reserved defaults:
     *  - *customer* - the customer object
     *
     * @var ?array<string, mixed> $variableValues
     */
    #[JsonProperty('variableValues'), ArrayType(['string' => 'mixed'])]
    public ?array $variableValues;

    /**
     * @param array{
     *   variableValues?: ?array<string, mixed>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->variableValues = $values['variableValues'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
