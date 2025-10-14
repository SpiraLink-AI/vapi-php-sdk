<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class ArtifactPlan extends JsonSerializableType
{
    /**
     * This determines whether assistant's calls are recorded. Defaults to true.
     *
     * Usage:
     * - If you don't want to record the calls, set this to false.
     * - If you want to record the calls when `assistant.hipaaEnabled` (deprecated) or `assistant.compliancePlan.hipaaEnabled` explicity set this to true and make sure to provide S3 or GCP credentials on the Provider Credentials page in the Dashboard.
     *
     * You can find the recording at `call.artifact.recordingUrl` and `call.artifact.stereoRecordingUrl` after the call is ended.
     *
     * @default true
     *
     * @var ?bool $recordingEnabled
     */
    #[JsonProperty('recordingEnabled')]
    public ?bool $recordingEnabled;

    /**
     * This determines the format of the recording. Defaults to `wav;l16`.
     *
     * @default 'wav;l16'
     *
     * @var ?value-of<ArtifactPlanRecordingFormat> $recordingFormat
     */
    #[JsonProperty('recordingFormat')]
    public ?string $recordingFormat;

    /**
     * This determines whether to use custom storage (S3 or GCP) for call recordings when storage credentials are configured.
     *
     * When set to false, recordings will be stored on Vapi's storage instead of your custom storage, even if you have custom storage credentials configured.
     *
     * Usage:
     * - Set to false if you have custom storage configured but want to store recordings on Vapi's storage for this assistant.
     * - Set to true (or leave unset) to use your custom storage for recordings when available.
     *
     * @default true
     *
     * @var ?bool $recordingUseCustomStorageEnabled
     */
    #[JsonProperty('recordingUseCustomStorageEnabled')]
    public ?bool $recordingUseCustomStorageEnabled;

    /**
     * This determines whether the video is recorded during the call. Defaults to false. Only relevant for `webCall` type.
     *
     * You can find the video recording at `call.artifact.videoRecordingUrl` after the call is ended.
     *
     * @default false
     *
     * @var ?bool $videoRecordingEnabled
     */
    #[JsonProperty('videoRecordingEnabled')]
    public ?bool $videoRecordingEnabled;

    /**
     * @var ?bool $fullMessageHistoryEnabled This determines whether the artifact contains the full message history, even after handoff context engineering. Defaults to false.
     */
    #[JsonProperty('fullMessageHistoryEnabled')]
    public ?bool $fullMessageHistoryEnabled;

    /**
     * This determines whether the SIP packet capture is enabled. Defaults to true. Only relevant for `phone` type calls where phone number's provider is `vapi` or `byo-phone-number`.
     *
     * You can find the packet capture at `call.artifact.pcapUrl` after the call is ended.
     *
     * @default true
     *
     * @var ?bool $pcapEnabled
     */
    #[JsonProperty('pcapEnabled')]
    public ?bool $pcapEnabled;

    /**
     * This is the path where the SIP packet capture will be uploaded. This is only used if you have provided S3 or GCP credentials on the Provider Credentials page in the Dashboard.
     *
     * If credential.s3PathPrefix or credential.bucketPlan.path is set, this will append to it.
     *
     * Usage:
     * - If you want to upload the packet capture to a specific path, set this to the path. Example: `/my-assistant-captures`.
     * - If you want to upload the packet capture to the root of the bucket, set this to `/`.
     *
     * @default '/'
     *
     * @var ?string $pcapS3PathPrefix
     */
    #[JsonProperty('pcapS3PathPrefix')]
    public ?string $pcapS3PathPrefix;

    /**
     * This determines whether to use custom storage (S3 or GCP) for SIP packet captures when storage credentials are configured.
     *
     * When set to false, packet captures will be stored on Vapi's storage instead of your custom storage, even if you have custom storage credentials configured.
     *
     * Usage:
     * - Set to false if you have custom storage configured but want to store packet captures on Vapi's storage for this assistant.
     * - Set to true (or leave unset) to use your custom storage for packet captures when available.
     *
     * @default true
     *
     * @var ?bool $pcapUseCustomStorageEnabled
     */
    #[JsonProperty('pcapUseCustomStorageEnabled')]
    public ?bool $pcapUseCustomStorageEnabled;

    /**
     * This determines whether the call logs are enabled. Defaults to true.
     *
     * @default true
     *
     * @var ?bool $loggingEnabled
     */
    #[JsonProperty('loggingEnabled')]
    public ?bool $loggingEnabled;

    /**
     * This determines whether to use custom storage (S3 or GCP) for call logs when storage credentials are configured.
     *
     * When set to false, logs will be stored on Vapi's storage instead of your custom storage, even if you have custom storage credentials configured.
     *
     * Usage:
     * - Set to false if you have custom storage configured but want to store logs on Vapi's storage for this assistant.
     * - Set to true (or leave unset) to use your custom storage for logs when available.
     *
     * @default true
     *
     * @var ?bool $loggingUseCustomStorageEnabled
     */
    #[JsonProperty('loggingUseCustomStorageEnabled')]
    public ?bool $loggingUseCustomStorageEnabled;

    /**
     * @var ?TranscriptPlan $transcriptPlan This is the plan for `call.artifact.transcript`. To disable, set `transcriptPlan.enabled` to false.
     */
    #[JsonProperty('transcriptPlan')]
    public ?TranscriptPlan $transcriptPlan;

    /**
     * This is the path where the recording will be uploaded. This is only used if you have provided S3 or GCP credentials on the Provider Credentials page in the Dashboard.
     *
     * If credential.s3PathPrefix or credential.bucketPlan.path is set, this will append to it.
     *
     * Usage:
     * - If you want to upload the recording to a specific path, set this to the path. Example: `/my-assistant-recordings`.
     * - If you want to upload the recording to the root of the bucket, set this to `/`.
     *
     * @default '/'
     *
     * @var ?string $recordingPath
     */
    #[JsonProperty('recordingPath')]
    public ?string $recordingPath;

    /**
     * This is an array of structured output IDs to be calculated during the call.
     * The outputs will be extracted and stored in `call.artifact.structuredOutputs` after the call is ended.
     *
     * @var ?array<string> $structuredOutputIds
     */
    #[JsonProperty('structuredOutputIds'), ArrayType(['string'])]
    public ?array $structuredOutputIds;

    /**
     * This is the path where the call logs will be uploaded. This is only used if you have provided S3 or GCP credentials on the Provider Credentials page in the Dashboard.
     *
     * If credential.s3PathPrefix or credential.bucketPlan.path is set, this will append to it.
     *
     * Usage:
     * - If you want to upload the call logs to a specific path, set this to the path. Example: `/my-assistant-logs`.
     * - If you want to upload the call logs to the root of the bucket, set this to `/`.
     *
     * @default '/'
     *
     * @var ?string $loggingPath
     */
    #[JsonProperty('loggingPath')]
    public ?string $loggingPath;

    /**
     * @param array{
     *   recordingEnabled?: ?bool,
     *   recordingFormat?: ?value-of<ArtifactPlanRecordingFormat>,
     *   recordingUseCustomStorageEnabled?: ?bool,
     *   videoRecordingEnabled?: ?bool,
     *   fullMessageHistoryEnabled?: ?bool,
     *   pcapEnabled?: ?bool,
     *   pcapS3PathPrefix?: ?string,
     *   pcapUseCustomStorageEnabled?: ?bool,
     *   loggingEnabled?: ?bool,
     *   loggingUseCustomStorageEnabled?: ?bool,
     *   transcriptPlan?: ?TranscriptPlan,
     *   recordingPath?: ?string,
     *   structuredOutputIds?: ?array<string>,
     *   loggingPath?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->recordingEnabled = $values['recordingEnabled'] ?? null;
        $this->recordingFormat = $values['recordingFormat'] ?? null;
        $this->recordingUseCustomStorageEnabled = $values['recordingUseCustomStorageEnabled'] ?? null;
        $this->videoRecordingEnabled = $values['videoRecordingEnabled'] ?? null;
        $this->fullMessageHistoryEnabled = $values['fullMessageHistoryEnabled'] ?? null;
        $this->pcapEnabled = $values['pcapEnabled'] ?? null;
        $this->pcapS3PathPrefix = $values['pcapS3PathPrefix'] ?? null;
        $this->pcapUseCustomStorageEnabled = $values['pcapUseCustomStorageEnabled'] ?? null;
        $this->loggingEnabled = $values['loggingEnabled'] ?? null;
        $this->loggingUseCustomStorageEnabled = $values['loggingUseCustomStorageEnabled'] ?? null;
        $this->transcriptPlan = $values['transcriptPlan'] ?? null;
        $this->recordingPath = $values['recordingPath'] ?? null;
        $this->structuredOutputIds = $values['structuredOutputIds'] ?? null;
        $this->loggingPath = $values['loggingPath'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
