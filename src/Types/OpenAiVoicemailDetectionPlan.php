<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class OpenAiVoicemailDetectionPlan extends JsonSerializableType
{
    /**
     * This is the maximum duration from the start of the call that we will wait for a voicemail beep, before speaking our message
     *
     * - If we detect a voicemail beep before this, we will speak the message at that point.
     *
     * - Setting too low a value means that the bot will start speaking its voicemail message too early. If it does so before the actual beep, it will get cut off. You should definitely tune this to your use case.
     *
     * @default 30
     * @min 0
     * @max 60
     *
     * @var ?float $beepMaxAwaitSeconds
     */
    #[JsonProperty('beepMaxAwaitSeconds')]
    public ?float $beepMaxAwaitSeconds;

    /**
     * @var ?VoicemailDetectionBackoffPlan $backoffPlan This is the backoff plan for the voicemail detection.
     */
    #[JsonProperty('backoffPlan')]
    public ?VoicemailDetectionBackoffPlan $backoffPlan;

    /**
     * This is the detection type to use for voicemail detection.
     * - 'audio': Uses native audio models (default)
     * - 'transcript': Uses ASR/transcript-based detection
     * @default 'audio' (audio detection)
     *
     * @var ?value-of<OpenAiVoicemailDetectionPlanType> $type
     */
    #[JsonProperty('type')]
    public ?string $type;

    /**
     * @param array{
     *   beepMaxAwaitSeconds?: ?float,
     *   backoffPlan?: ?VoicemailDetectionBackoffPlan,
     *   type?: ?value-of<OpenAiVoicemailDetectionPlanType>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->beepMaxAwaitSeconds = $values['beepMaxAwaitSeconds'] ?? null;
        $this->backoffPlan = $values['backoffPlan'] ?? null;
        $this->type = $values['type'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
