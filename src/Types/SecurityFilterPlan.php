<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class SecurityFilterPlan extends JsonSerializableType
{
    /**
     * Whether the security filter is enabled.
     * @default false
     *
     * @var ?bool $enabled
     */
    #[JsonProperty('enabled')]
    public ?bool $enabled;

    /**
     * Array of security filter types to apply.
     * If array is not empty, only those security filters are run.
     *
     * @var ?array<SecurityFilterBase> $filters
     */
    #[JsonProperty('filters'), ArrayType([SecurityFilterBase::class])]
    public ?array $filters;

    /**
     * Mode of operation when a security threat is detected.
     * - 'sanitize': Remove or replace the threatening content
     * - 'reject': Replace the entire transcript with replacement text
     * - 'replace': Replace threatening patterns with replacement text
     * @default 'sanitize'
     *
     * @var ?value-of<SecurityFilterPlanMode> $mode
     */
    #[JsonProperty('mode')]
    public ?string $mode;

    /**
     * Text to use when replacing filtered content.
     * @default '[FILTERED]'
     *
     * @var ?string $replacementText
     */
    #[JsonProperty('replacementText')]
    public ?string $replacementText;

    /**
     * @param array{
     *   enabled?: ?bool,
     *   filters?: ?array<SecurityFilterBase>,
     *   mode?: ?value-of<SecurityFilterPlanMode>,
     *   replacementText?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->enabled = $values['enabled'] ?? null;
        $this->filters = $values['filters'] ?? null;
        $this->mode = $values['mode'] ?? null;
        $this->replacementText = $values['replacementText'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
