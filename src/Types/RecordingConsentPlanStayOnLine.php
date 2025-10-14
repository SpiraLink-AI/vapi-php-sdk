<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class RecordingConsentPlanStayOnLine extends JsonSerializableType
{
    /**
     * This is the message asking for consent to record the call.
     * If the type is `stay-on-line`, the message should ask the user to hang up if they do not consent.
     * If the type is `verbal`, the message should ask the user to verbally consent or decline.
     *
     * @var string $message
     */
    #[JsonProperty('message')]
    public string $message;

    /**
     * This is the voice to use for the consent message. If not specified, inherits from the assistant's voice.
     * Use a different voice for the consent message for a better user experience.
     *
     * @var ?RecordingConsentPlanStayOnLineVoice $voice
     */
    #[JsonProperty('voice')]
    public ?RecordingConsentPlanStayOnLineVoice $voice;

    /**
     * @var ?float $waitSeconds Number of seconds to wait before transferring to the assistant if user stays on the call
     */
    #[JsonProperty('waitSeconds')]
    public ?float $waitSeconds;

    /**
     * @param array{
     *   message: string,
     *   voice?: ?RecordingConsentPlanStayOnLineVoice,
     *   waitSeconds?: ?float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->message = $values['message'];
        $this->voice = $values['voice'] ?? null;
        $this->waitSeconds = $values['waitSeconds'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
