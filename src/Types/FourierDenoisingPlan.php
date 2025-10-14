<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class FourierDenoisingPlan extends JsonSerializableType
{
    /**
     * @var ?bool $enabled Whether Fourier denoising is enabled. Note that this is experimental and may not work as expected.
     */
    #[JsonProperty('enabled')]
    public ?bool $enabled;

    /**
     * Whether automatic media detection is enabled. When enabled, the filter will automatically
     * detect consistent background TV/music/radio and switch to more aggressive filtering settings.
     * Only applies when enabled is true.
     *
     * @var ?bool $mediaDetectionEnabled
     */
    #[JsonProperty('mediaDetectionEnabled')]
    public ?bool $mediaDetectionEnabled;

    /**
     * @var ?float $staticThreshold Static threshold in dB used as fallback when no baseline is established.
     */
    #[JsonProperty('staticThreshold')]
    public ?float $staticThreshold;

    /**
     * How far below the rolling baseline to filter audio, in dB.
     * Lower values (e.g., -10) are more aggressive, higher values (e.g., -20) are more conservative.
     *
     * @var ?float $baselineOffsetDb
     */
    #[JsonProperty('baselineOffsetDb')]
    public ?float $baselineOffsetDb;

    /**
     * Rolling window size in milliseconds for calculating the audio baseline.
     * Larger windows adapt more slowly but are more stable.
     *
     * @var ?float $windowSizeMs
     */
    #[JsonProperty('windowSizeMs')]
    public ?float $windowSizeMs;

    /**
     * Percentile to use for baseline calculation (1-99).
     * Higher percentiles (e.g., 85) focus on louder speech, lower percentiles (e.g., 50) include quieter speech.
     *
     * @var ?float $baselinePercentile
     */
    #[JsonProperty('baselinePercentile')]
    public ?float $baselinePercentile;

    /**
     * @param array{
     *   enabled?: ?bool,
     *   mediaDetectionEnabled?: ?bool,
     *   staticThreshold?: ?float,
     *   baselineOffsetDb?: ?float,
     *   windowSizeMs?: ?float,
     *   baselinePercentile?: ?float,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->enabled = $values['enabled'] ?? null;
        $this->mediaDetectionEnabled = $values['mediaDetectionEnabled'] ?? null;
        $this->staticThreshold = $values['staticThreshold'] ?? null;
        $this->baselineOffsetDb = $values['baselineOffsetDb'] ?? null;
        $this->windowSizeMs = $values['windowSizeMs'] ?? null;
        $this->baselinePercentile = $values['baselinePercentile'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
