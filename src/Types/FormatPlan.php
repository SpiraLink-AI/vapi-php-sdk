<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class FormatPlan extends JsonSerializableType
{
    /**
     * This determines whether the chunk is formatted before being sent to the voice provider. This helps with enunciation. This includes phone numbers, emails and addresses. Default `true`.
     *
     * Usage:
     * - To rely on the voice provider's formatting logic, set this to `false`.
     *
     * If `voice.chunkPlan.enabled` is `false`, this is automatically `false` since there's no chunk to format.
     *
     * @default true
     *
     * @var ?bool $enabled
     */
    #[JsonProperty('enabled')]
    public ?bool $enabled;

    /**
     * This is the cutoff after which a number is converted to individual digits instead of being spoken as words.
     *
     * Example:
     * - If cutoff 2025, "12345" is converted to "1 2 3 4 5" while "1200" is converted to "twelve hundred".
     *
     * Usage:
     * - If your use case doesn't involve IDs like zip codes, set this to a high value.
     * - If your use case involves IDs that are shorter than 5 digits, set this to a lower value.
     *
     * @default 2025
     *
     * @var ?float $numberToDigitsCutoff
     */
    #[JsonProperty('numberToDigitsCutoff')]
    public ?float $numberToDigitsCutoff;

    /**
     * These are the custom replacements you can make to the chunk before it is sent to the voice provider.
     *
     * Usage:
     * - To replace a specific word or phrase with a different word or phrase, use the `ExactReplacement` type. Eg. `{ type: 'exact', key: 'hello', value: 'hi' }`
     * - To replace a word or phrase that matches a pattern, use the `RegexReplacement` type. Eg. `{ type: 'regex', regex: '\\b[a-zA-Z]{5}\\b', value: 'hi' }`
     *
     * @default []
     *
     * @var ?array<FormatPlanReplacementsItem> $replacements
     */
    #[JsonProperty('replacements'), ArrayType([FormatPlanReplacementsItem::class])]
    public ?array $replacements;

    /**
     * List of formatters to apply. If not provided, all default formatters will be applied.
     * If provided, only the specified formatters will be applied.
     * Note: Some essential formatters like angle bracket removal will always be applied.
     * @default undefined
     *
     * @var ?array<value-of<FormatPlanFormattersEnabledItem>> $formattersEnabled
     */
    #[JsonProperty('formattersEnabled'), ArrayType(['string'])]
    public ?array $formattersEnabled;

    /**
     * @param array{
     *   enabled?: ?bool,
     *   numberToDigitsCutoff?: ?float,
     *   replacements?: ?array<FormatPlanReplacementsItem>,
     *   formattersEnabled?: ?array<value-of<FormatPlanFormattersEnabledItem>>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->enabled = $values['enabled'] ?? null;
        $this->numberToDigitsCutoff = $values['numberToDigitsCutoff'] ?? null;
        $this->replacements = $values['replacements'] ?? null;
        $this->formattersEnabled = $values['formattersEnabled'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
