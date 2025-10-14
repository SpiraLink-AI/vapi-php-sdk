<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class ExactReplacement extends JsonSerializableType
{
    /**
     * This option let's you control whether to replace all instances of the key or only the first one. By default, it only replaces the first instance.
     * Examples:
     * - For { type: 'exact', key: 'hello', value: 'hi', replaceAllEnabled: false }. Before: "hello world, hello universe" | After: "hi world, hello universe"
     * - For { type: 'exact', key: 'hello', value: 'hi', replaceAllEnabled: true }. Before: "hello world, hello universe" | After: "hi world, hi universe"
     * @default false
     *
     * @var ?bool $replaceAllEnabled
     */
    #[JsonProperty('replaceAllEnabled')]
    public ?bool $replaceAllEnabled;

    /**
     * @var string $key This is the key to replace.
     */
    #[JsonProperty('key')]
    public string $key;

    /**
     * @var string $value This is the value that will replace the match.
     */
    #[JsonProperty('value')]
    public string $value;

    /**
     * @param array{
     *   key: string,
     *   value: string,
     *   replaceAllEnabled?: ?bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->replaceAllEnabled = $values['replaceAllEnabled'] ?? null;
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
