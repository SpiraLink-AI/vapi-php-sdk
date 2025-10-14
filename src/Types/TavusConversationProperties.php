<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class TavusConversationProperties extends JsonSerializableType
{
    /**
     * The maximum duration of the call in seconds. The default `maxCallDuration` is 3600 seconds (1 hour).
     * Once the time limit specified by this parameter has been reached, the conversation will automatically shut down.
     *
     * @var ?float $maxCallDuration
     */
    #[JsonProperty('maxCallDuration')]
    public ?float $maxCallDuration;

    /**
     * @var ?float $participantLeftTimeout The duration in seconds after which the call will be automatically shut down once the last participant leaves.
     */
    #[JsonProperty('participantLeftTimeout')]
    public ?float $participantLeftTimeout;

    /**
     * Starting from conversation creation, the duration in seconds after which the call will be automatically shut down if no participant joins the call.
     * Default is 300 seconds (5 minutes).
     *
     * @var ?float $participantAbsentTimeout
     */
    #[JsonProperty('participantAbsentTimeout')]
    public ?float $participantAbsentTimeout;

    /**
     * @var ?bool $enableRecording If true, the user will be able to record the conversation.
     */
    #[JsonProperty('enableRecording')]
    public ?bool $enableRecording;

    /**
     * If true, the user will be able to transcribe the conversation.
     * You can find more instructions on displaying transcriptions if you are using your custom DailyJS components here.
     * You need to have an event listener on Daily that listens for `app-messages`.
     *
     * @var ?bool $enableTranscription
     */
    #[JsonProperty('enableTranscription')]
    public ?bool $enableTranscription;

    /**
     * If true, the background will be replaced with a greenscreen (RGB values: `[0, 255, 155]`).
     * You can use WebGL on the frontend to make the greenscreen transparent or change its color.
     *
     * @var ?bool $applyGreenscreen
     */
    #[JsonProperty('applyGreenscreen')]
    public ?bool $applyGreenscreen;

    /**
     * The language of the conversation. Please provide the **full language name**, not the two-letter code.
     * If you are using your own TTS voice, please ensure it supports the language you provide.
     * If you are using a stock replica or default persona, please note that only ElevenLabs and Cartesia supported languages are available.
     * You can find a full list of supported languages for Cartesia here, for ElevenLabs here, and for PlayHT here.
     *
     * @var ?string $language
     */
    #[JsonProperty('language')]
    public ?string $language;

    /**
     * @var ?string $recordingS3BucketName The name of the S3 bucket where the recording will be stored.
     */
    #[JsonProperty('recordingS3BucketName')]
    public ?string $recordingS3BucketName;

    /**
     * @var ?string $recordingS3BucketRegion The region of the S3 bucket where the recording will be stored.
     */
    #[JsonProperty('recordingS3BucketRegion')]
    public ?string $recordingS3BucketRegion;

    /**
     * @var ?string $awsAssumeRoleArn The ARN of the role that will be assumed to access the S3 bucket.
     */
    #[JsonProperty('awsAssumeRoleArn')]
    public ?string $awsAssumeRoleArn;

    /**
     * @param array{
     *   maxCallDuration?: ?float,
     *   participantLeftTimeout?: ?float,
     *   participantAbsentTimeout?: ?float,
     *   enableRecording?: ?bool,
     *   enableTranscription?: ?bool,
     *   applyGreenscreen?: ?bool,
     *   language?: ?string,
     *   recordingS3BucketName?: ?string,
     *   recordingS3BucketRegion?: ?string,
     *   awsAssumeRoleArn?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->maxCallDuration = $values['maxCallDuration'] ?? null;
        $this->participantLeftTimeout = $values['participantLeftTimeout'] ?? null;
        $this->participantAbsentTimeout = $values['participantAbsentTimeout'] ?? null;
        $this->enableRecording = $values['enableRecording'] ?? null;
        $this->enableTranscription = $values['enableTranscription'] ?? null;
        $this->applyGreenscreen = $values['applyGreenscreen'] ?? null;
        $this->language = $values['language'] ?? null;
        $this->recordingS3BucketName = $values['recordingS3BucketName'] ?? null;
        $this->recordingS3BucketRegion = $values['recordingS3BucketRegion'] ?? null;
        $this->awsAssumeRoleArn = $values['awsAssumeRoleArn'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
