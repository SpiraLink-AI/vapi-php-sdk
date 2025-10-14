<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class RegexReplacement extends JsonSerializableType
{
    /**
     * This is the regex pattern to replace.
     *
     * Note:
     * - This works by using the `string.replace` method in Node.JS. Eg. `"hello there".replace(/hello/g, "hi")` will return `"hi there"`.
     *
     * Hot tip:
     * - In JavaScript, escape `\` when sending the regex pattern. Eg. `"hello\sthere"` will be sent over the wire as `"hellosthere"`. Send `"hello\\sthere"` instead.
     *
     * @var string $regex
     */
    #[JsonProperty('regex')]
    public string $regex;

    /**
     * These are the options for the regex replacement. Defaults to all disabled.
     *
     * @default []
     *
     * @var ?array<RegexOption> $options
     */
    #[JsonProperty('options'), ArrayType([RegexOption::class])]
    public ?array $options;

    /**
     * @var string $value This is the value that will replace the match.
     */
    #[JsonProperty('value')]
    public string $value;

    /**
     * @param array{
     *   regex: string,
     *   value: string,
     *   options?: ?array<RegexOption>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->regex = $values['regex'];
        $this->options = $values['options'] ?? null;
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
