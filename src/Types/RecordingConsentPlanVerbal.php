<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class RecordingConsentPlanVerbal extends JsonSerializableType
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
     * @var ?RecordingConsentPlanVerbalVoice $voice
     */
    #[JsonProperty('voice')]
    public ?RecordingConsentPlanVerbalVoice $voice;

    /**
     * @var ?array<string, mixed> $declineTool Tool to execute if user verbally declines recording consent
     */
    #[JsonProperty('declineTool'), ArrayType(['string' => 'mixed'])]
    public ?array $declineTool;

    /**
     * @var ?string $declineToolId ID of existing tool to execute if user verbally declines recording consent
     */
    #[JsonProperty('declineToolId')]
    public ?string $declineToolId;

    /**
     * @param array{
     *   message: string,
     *   voice?: ?RecordingConsentPlanVerbalVoice,
     *   declineTool?: ?array<string, mixed>,
     *   declineToolId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->message = $values['message'];
        $this->voice = $values['voice'] ?? null;
        $this->declineTool = $values['declineTool'] ?? null;
        $this->declineToolId = $values['declineToolId'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
