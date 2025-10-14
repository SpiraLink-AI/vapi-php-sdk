<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class RegexOption extends JsonSerializableType
{
    /**
     * This is the type of the regex option. Options are:
     * - `ignore-case`: Ignores the case of the text being matched. Add
     * - `whole-word`: Matches whole words only.
     * - `multi-line`: Matches across multiple lines.
     *
     * @var value-of<RegexOptionType> $type
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * This is whether to enable the option.
     *
     * @default false
     *
     * @var bool $enabled
     */
    #[JsonProperty('enabled')]
    public bool $enabled;

    /**
     * @param array{
     *   type: value-of<RegexOptionType>,
     *   enabled: bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->type = $values['type'];
        $this->enabled = $values['enabled'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
