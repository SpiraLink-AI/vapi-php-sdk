<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class TransportConfigurationTwilio extends JsonSerializableType
{
    /**
     * @var 'twilio' $provider
     */
    #[JsonProperty('provider')]
    public string $provider;

    /**
     * The integer number of seconds that we should allow the phone to ring before assuming there is no answer.
     * The default is `60` seconds and the maximum is `600` seconds.
     * For some call flows, we will add a 5-second buffer to the timeout value you provide.
     * For this reason, a timeout value of 10 seconds could result in an actual timeout closer to 15 seconds.
     * You can set this to a short time, such as `15` seconds, to hang up before reaching an answering machine or voicemail.
     *
     * @default 60
     *
     * @var ?float $timeout
     */
    #[JsonProperty('timeout')]
    public ?float $timeout;

    /**
     * Whether to record the call.
     * Can be `true` to record the phone call, or `false` to not.
     * The default is `false`.
     *
     * @default false
     *
     * @var ?bool $record
     */
    #[JsonProperty('record')]
    public ?bool $record;

    /**
     * The number of channels in the final recording.
     * Can be: `mono` or `dual`.
     * The default is `mono`.
     * `mono` records both legs of the call in a single channel of the recording file.
     * `dual` records each leg to a separate channel of the recording file.
     * The first channel of a dual-channel recording contains the parent call and the second channel contains the child call.
     *
     * @default 'mono'
     *
     * @var ?value-of<TransportConfigurationTwilioRecordingChannels> $recordingChannels
     */
    #[JsonProperty('recordingChannels')]
    public ?string $recordingChannels;

    /**
     * @param array{
     *   provider: 'twilio',
     *   timeout?: ?float,
     *   record?: ?bool,
     *   recordingChannels?: ?value-of<TransportConfigurationTwilioRecordingChannels>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->provider = $values['provider'];
        $this->timeout = $values['timeout'] ?? null;
        $this->record = $values['record'] ?? null;
        $this->recordingChannels = $values['recordingChannels'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
