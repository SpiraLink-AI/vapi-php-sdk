<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class FallbackAzureSpeechTranscriber extends JsonSerializableType
{
    /**
     * @var ?value-of<FallbackAzureSpeechTranscriberLanguage> $language This is the language that will be set for the transcription. The list of languages Azure supports can be found here: https://learn.microsoft.com/en-us/azure/ai-services/speech-service/language-support?tabs=stt
     */
    #[JsonProperty('language')]
    public ?string $language;

    /**
     * @var ?value-of<FallbackAzureSpeechTranscriberSegmentationStrategy> $segmentationStrategy Controls how phrase boundaries are detected, enabling either simple time/silence heuristics or more advanced semantic segmentation.
     */
    #[JsonProperty('segmentationStrategy')]
    public ?string $segmentationStrategy;

    /**
     * @var ?float $segmentationSilenceTimeoutMs Duration of detected silence after which the service finalizes a phrase. Configure to adjust sensitivity to pauses in speech.
     */
    #[JsonProperty('segmentationSilenceTimeoutMs')]
    public ?float $segmentationSilenceTimeoutMs;

    /**
     * @var ?float $segmentationMaximumTimeMs Maximum duration a segment can reach before being cut off when using time-based segmentation.
     */
    #[JsonProperty('segmentationMaximumTimeMs')]
    public ?float $segmentationMaximumTimeMs;

    /**
     * @param array{
     *   language?: ?value-of<FallbackAzureSpeechTranscriberLanguage>,
     *   segmentationStrategy?: ?value-of<FallbackAzureSpeechTranscriberSegmentationStrategy>,
     *   segmentationSilenceTimeoutMs?: ?float,
     *   segmentationMaximumTimeMs?: ?float,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->language = $values['language'] ?? null;
        $this->segmentationStrategy = $values['segmentationStrategy'] ?? null;
        $this->segmentationSilenceTimeoutMs = $values['segmentationSilenceTimeoutMs'] ?? null;
        $this->segmentationMaximumTimeMs = $values['segmentationMaximumTimeMs'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
