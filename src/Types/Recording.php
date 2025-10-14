<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class Recording extends JsonSerializableType
{
    /**
     * @var ?string $stereoUrl This is the stereo recording url for the call. To enable, set `assistant.artifactPlan.recordingEnabled`.
     */
    #[JsonProperty('stereoUrl')]
    public ?string $stereoUrl;

    /**
     * @var ?string $videoUrl This is the video recording url for the call. To enable, set `assistant.artifactPlan.videoRecordingEnabled`.
     */
    #[JsonProperty('videoUrl')]
    public ?string $videoUrl;

    /**
     * @var ?float $videoRecordingStartDelaySeconds This is video recording start delay in ms. To enable, set `assistant.artifactPlan.videoRecordingEnabled`. This can be used to align the playback of the recording with artifact.messages timestamps.
     */
    #[JsonProperty('videoRecordingStartDelaySeconds')]
    public ?float $videoRecordingStartDelaySeconds;

    /**
     * @var ?Mono $mono This is the mono recording url for the call. To enable, set `assistant.artifactPlan.recordingEnabled`.
     */
    #[JsonProperty('mono')]
    public ?Mono $mono;

    /**
     * @param array{
     *   stereoUrl?: ?string,
     *   videoUrl?: ?string,
     *   videoRecordingStartDelaySeconds?: ?float,
     *   mono?: ?Mono,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->stereoUrl = $values['stereoUrl'] ?? null;
        $this->videoUrl = $values['videoUrl'] ?? null;
        $this->videoRecordingStartDelaySeconds = $values['videoRecordingStartDelaySeconds'] ?? null;
        $this->mono = $values['mono'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
