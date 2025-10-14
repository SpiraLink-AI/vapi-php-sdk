<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class CustomerCustomEndpointingRule extends JsonSerializableType
{
    /**
     * This is the regex pattern to match.
     *
     * Note:
     * - This works by using the `RegExp.test` method in Node.JS. Eg. `/hello/.test("hello there")` will return `true`.
     *
     * Hot tip:
     * - In JavaScript, escape `\` when sending the regex pattern. Eg. `"hello\sthere"` will be sent over the wire as `"hellosthere"`. Send `"hello\\sthere"` instead.
     * - `RegExp.test` does substring matching, so `/cat/.test("I love cats")` will return `true`. To do full string matching, send "^cat$".
     *
     * @var string $regex
     */
    #[JsonProperty('regex')]
    public string $regex;

    /**
     * These are the options for the regex match. Defaults to all disabled.
     *
     * @default []
     *
     * @var ?array<RegexOption> $regexOptions
     */
    #[JsonProperty('regexOptions'), ArrayType([RegexOption::class])]
    public ?array $regexOptions;

    /**
     * @var float $timeoutSeconds This is the endpointing timeout in seconds, if the rule is matched.
     */
    #[JsonProperty('timeoutSeconds')]
    public float $timeoutSeconds;

    /**
     * @param array{
     *   regex: string,
     *   timeoutSeconds: float,
     *   regexOptions?: ?array<RegexOption>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->regex = $values['regex'];
        $this->regexOptions = $values['regexOptions'] ?? null;
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
