<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class ChunkPlan extends JsonSerializableType
{
    /**
     * This determines whether the model output is chunked before being sent to the voice provider. Default `true`.
     *
     * Usage:
     * - To rely on the voice provider's audio generation logic, set this to `false`.
     * - If seeing issues with quality, set this to `true`.
     *
     * If disabled, Vapi-provided audio control tokens like <flush /> will not work.
     *
     * @default true
     *
     * @var ?bool $enabled
     */
    #[JsonProperty('enabled')]
    public ?bool $enabled;

    /**
     * This is the minimum number of characters in a chunk.
     *
     * Usage:
     * - To increase quality, set this to a higher value.
     * - To decrease latency, set this to a lower value.
     *
     * @default 30
     *
     * @var ?float $minCharacters
     */
    #[JsonProperty('minCharacters')]
    public ?float $minCharacters;

    /**
     * These are the punctuations that are considered valid boundaries for a chunk to be created.
     *
     * Usage:
     * - To increase quality, constrain to fewer boundaries.
     * - To decrease latency, enable all.
     *
     * Default is automatically set to balance the trade-off between quality and latency based on the provider.
     *
     * @var ?array<value-of<ChunkPlanPunctuationBoundariesItem>> $punctuationBoundaries
     */
    #[JsonProperty('punctuationBoundaries'), ArrayType(['string'])]
    public ?array $punctuationBoundaries;

    /**
     * @var ?FormatPlan $formatPlan This is the plan for formatting the chunk before it is sent to the voice provider.
     */
    #[JsonProperty('formatPlan')]
    public ?FormatPlan $formatPlan;

    /**
     * @param array{
     *   enabled?: ?bool,
     *   minCharacters?: ?float,
     *   punctuationBoundaries?: ?array<value-of<ChunkPlanPunctuationBoundariesItem>>,
     *   formatPlan?: ?FormatPlan,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->enabled = $values['enabled'] ?? null;
        $this->minCharacters = $values['minCharacters'] ?? null;
        $this->punctuationBoundaries = $values['punctuationBoundaries'] ?? null;
        $this->formatPlan = $values['formatPlan'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
