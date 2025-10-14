<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class BothCustomEndpointingRule extends JsonSerializableType
{
    /**
     * This is the regex pattern to match the assistant's message.
     *
     * Note:
     * - This works by using the `RegExp.test` method in Node.JS. Eg. `/hello/.test("hello there")` will return `true`.
     *
     * Hot tip:
     * - In JavaScript, escape `\` when sending the regex pattern. Eg. `"hello\sthere"` will be sent over the wire as `"hellosthere"`. Send `"hello\\sthere"` instead.
     * - `RegExp.test` does substring matching, so `/cat/.test("I love cats")` will return `true`. To do full string matching, send "^cat$".
     *
     * @var string $assistantRegex
     */
    #[JsonProperty('assistantRegex')]
    public string $assistantRegex;

    /**
     * These are the options for the assistant's message regex match. Defaults to all disabled.
     *
     * @default []
     *
     * @var ?array<RegexOption> $assistantRegexOptions
     */
    #[JsonProperty('assistantRegexOptions'), ArrayType([RegexOption::class])]
    public ?array $assistantRegexOptions;

    /**
     * @var string $customerRegex
     */
    #[JsonProperty('customerRegex')]
    public string $customerRegex;

    /**
     * These are the options for the customer's message regex match. Defaults to all disabled.
     *
     * @default []
     *
     * @var ?array<RegexOption> $customerRegexOptions
     */
    #[JsonProperty('customerRegexOptions'), ArrayType([RegexOption::class])]
    public ?array $customerRegexOptions;

    /**
     * @var float $timeoutSeconds This is the endpointing timeout in seconds, if the rule is matched.
     */
    #[JsonProperty('timeoutSeconds')]
    public float $timeoutSeconds;

    /**
     * @param array{
     *   assistantRegex: string,
     *   customerRegex: string,
     *   timeoutSeconds: float,
     *   assistantRegexOptions?: ?array<RegexOption>,
     *   customerRegexOptions?: ?array<RegexOption>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->assistantRegex = $values['assistantRegex'];
        $this->assistantRegexOptions = $values['assistantRegexOptions'] ?? null;
        $this->customerRegex = $values['customerRegex'];
        $this->customerRegexOptions = $values['customerRegexOptions'] ?? null;
        $this->timeoutSeconds = $values['timeoutSeconds'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
