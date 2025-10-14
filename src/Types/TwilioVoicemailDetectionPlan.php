<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class TwilioVoicemailDetectionPlan extends JsonSerializableType
{
    /**
     * These are the AMD messages from Twilio that are considered as voicemail. Default is ['machine_end_beep', 'machine_end_silence'].
     *
     * @default {Array} ['machine_end_beep', 'machine_end_silence']
     *
     * @var ?array<value-of<TwilioVoicemailDetectionPlanVoicemailDetectionTypesItem>> $voicemailDetectionTypes
     */
    #[JsonProperty('voicemailDetectionTypes'), ArrayType(['string'])]
    public ?array $voicemailDetectionTypes;

    /**
     * This sets whether the assistant should detect voicemail. Defaults to true.
     *
     * @default true
     *
     * @var ?bool $enabled
     */
    #[JsonProperty('enabled')]
    public ?bool $enabled;

    /**
     * The number of seconds that Twilio should attempt to perform answering machine detection before timing out and returning AnsweredBy as unknown. Default is 30 seconds.
     *
     * Increasing this value will provide the engine more time to make a determination. This can be useful when DetectMessageEnd is provided in the MachineDetection parameter and there is an expectation of long answering machine greetings that can exceed 30 seconds.
     *
     * Decreasing this value will reduce the amount of time the engine has to make a determination. This can be particularly useful when the Enable option is provided in the MachineDetection parameter and you want to limit the time for initial detection.
     *
     * Check the [Twilio docs](https://www.twilio.com/docs/voice/answering-machine-detection#optional-api-tuning-parameters) for more info.
     *
     * @default 30
     *
     * @var ?float $machineDetectionTimeout
     */
    #[JsonProperty('machineDetectionTimeout')]
    public ?float $machineDetectionTimeout;

    /**
     * The number of milliseconds that is used as the measuring stick for the length of the speech activity. Durations lower than this value will be interpreted as a human, longer as a machine. Default is 2400 milliseconds.
     *
     * Increasing this value will reduce the chance of a False Machine (detected machine, actually human) for a long human greeting (e.g., a business greeting) but increase the time it takes to detect a machine.
     *
     * Decreasing this value will reduce the chances of a False Human (detected human, actually machine) for short voicemail greetings. The value of this parameter may need to be reduced by more than 1000ms to detect very short voicemail greetings. A reduction of that significance can result in increased False Machine detections. Adjusting the MachineDetectionSpeechEndThreshold is likely the better approach for short voicemails. Decreasing MachineDetectionSpeechThreshold will also reduce the time it takes to detect a machine.
     *
     * Check the [Twilio docs](https://www.twilio.com/docs/voice/answering-machine-detection#optional-api-tuning-parameters) for more info.
     *
     * @default 2400
     *
     * @var ?float $machineDetectionSpeechThreshold
     */
    #[JsonProperty('machineDetectionSpeechThreshold')]
    public ?float $machineDetectionSpeechThreshold;

    /**
     * The number of milliseconds of silence after speech activity at which point the speech activity is considered complete. Default is 1200 milliseconds.
     *
     * Increasing this value will typically be used to better address the short voicemail greeting scenarios. For short voicemails, there is typically 1000-2000ms of audio followed by 1200-2400ms of silence and then additional audio before the beep. Increasing the MachineDetectionSpeechEndThreshold to ~2500ms will treat the 1200-2400ms of silence as a gap in the greeting but not the end of the greeting and will result in a machine detection. The downsides of such a change include:
     * - Increasing the delay for human detection by the amount you increase this parameter, e.g., a change of 1200ms to 2500ms increases human detection delay by 1300ms.
     * - Cases where a human has two utterances separated by a period of silence (e.g. a "Hello", then 2000ms of silence, and another "Hello") may be interpreted as a machine.
     *
     * Decreasing this value will result in faster human detection. The consequence is that it can lead to increased False Human (detected human, actually machine) detections because a silence gap in a voicemail greeting (not necessarily just in short voicemail scenarios) can be incorrectly interpreted as the end of speech.
     *
     * Check the [Twilio docs](https://www.twilio.com/docs/voice/answering-machine-detection#optional-api-tuning-parameters) for more info.
     *
     * @default 1200
     *
     * @var ?float $machineDetectionSpeechEndThreshold
     */
    #[JsonProperty('machineDetectionSpeechEndThreshold')]
    public ?float $machineDetectionSpeechEndThreshold;

    /**
     * The number of milliseconds of initial silence after which an unknown AnsweredBy result will be returned. Default is 5000 milliseconds.
     *
     * Increasing this value will result in waiting for a longer period of initial silence before returning an 'unknown' AMD result.
     *
     * Decreasing this value will result in waiting for a shorter period of initial silence before returning an 'unknown' AMD result.
     *
     * Check the [Twilio docs](https://www.twilio.com/docs/voice/answering-machine-detection#optional-api-tuning-parameters) for more info.
     *
     * @default 5000
     *
     * @var ?float $machineDetectionSilenceTimeout
     */
    #[JsonProperty('machineDetectionSilenceTimeout')]
    public ?float $machineDetectionSilenceTimeout;

    /**
     * @param array{
     *   voicemailDetectionTypes?: ?array<value-of<TwilioVoicemailDetectionPlanVoicemailDetectionTypesItem>>,
     *   enabled?: ?bool,
     *   machineDetectionTimeout?: ?float,
     *   machineDetectionSpeechThreshold?: ?float,
     *   machineDetectionSpeechEndThreshold?: ?float,
     *   machineDetectionSilenceTimeout?: ?float,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->voicemailDetectionTypes = $values['voicemailDetectionTypes'] ?? null;
        $this->enabled = $values['enabled'] ?? null;
        $this->machineDetectionTimeout = $values['machineDetectionTimeout'] ?? null;
        $this->machineDetectionSpeechThreshold = $values['machineDetectionSpeechThreshold'] ?? null;
        $this->machineDetectionSpeechEndThreshold = $values['machineDetectionSpeechEndThreshold'] ?? null;
        $this->machineDetectionSilenceTimeout = $values['machineDetectionSilenceTimeout'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
