<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class RegexCondition extends JsonSerializableType
{
    /**
     * This is the regular expression pattern to match against message content.
     *
     * Note:
     * - This works by using the RegExp.test method in Node.JS. Eg. /hello/.test("hello there") will return true.
     *
     * Hot tips:
     * - In JavaScript, escape \ when sending the regex pattern. Eg. "hello\sthere" will be sent over the wire as "hellosthere". Send "hello\\sthere" instead.
     * - RegExp.test does substring matching, so /cat/.test("I love cats") will return true. To do full string matching, use anchors: /^cat$/ will only match exactly "cat".
     * - Word boundaries \b are useful for matching whole words: /\bcat\b/ matches "cat" but not "cats" or "category".
     * - Use inline flags for portability: (?i) for case insensitive, (?m) for multiline
     *
     * @var string $regex
     */
    #[JsonProperty('regex')]
    public string $regex;

    /**
     * This is the target for messages to check against.
     * If not specified, the condition will run on the last message (position: -1).
     * If role is not specified, it will look at the last message regardless of role.
     * @default { position: -1 }
     *
     * @var ?MessageTarget $target
     */
    #[JsonProperty('target')]
    public ?MessageTarget $target;

    /**
     * This is the flag that when true, the condition matches if the pattern does NOT match.
     * Useful for ensuring certain words/phrases are absent.
     *
     * @default false
     *
     * @var ?bool $negate
     */
    #[JsonProperty('negate')]
    public ?bool $negate;

    /**
     * @param array{
     *   regex: string,
     *   target?: ?MessageTarget,
     *   negate?: ?bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->regex = $values['regex'];
        $this->target = $values['target'] ?? null;
        $this->negate = $values['negate'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
