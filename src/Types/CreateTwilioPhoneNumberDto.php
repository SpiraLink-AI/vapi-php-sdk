<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class CreateTwilioPhoneNumberDto extends JsonSerializableType
{
    /**
     * This is the fallback destination an inbound call will be transferred to if:
     * 1. `assistantId` is not set
     * 2. `squadId` is not set
     * 3. and, `assistant-request` message to the `serverUrl` fails
     *
     * If this is not set and above conditions are met, the inbound call is hung up with an error message.
     *
     * @var ?CreateTwilioPhoneNumberDtoFallbackDestination $fallbackDestination
     */
    #[JsonProperty('fallbackDestination')]
    public ?CreateTwilioPhoneNumberDtoFallbackDestination $fallbackDestination;

    /**
     * @var ?array<CreateTwilioPhoneNumberDtoHooksItem> $hooks This is the hooks that will be used for incoming calls to this phone number.
     */
    #[JsonProperty('hooks'), ArrayType([CreateTwilioPhoneNumberDtoHooksItem::class])]
    public ?array $hooks;

    /**
     * Controls whether Vapi sets the messaging webhook URL on the Twilio number during import.
     *
     * If set to `false`, Vapi will not update the Twilio messaging URL, leaving it as is.
     * If `true` or omitted (default), Vapi will configure both the voice and messaging URLs.
     *
     * @default true
     *
     * @var ?bool $smsEnabled
     */
    #[JsonProperty('smsEnabled')]
    public ?bool $smsEnabled;

    /**
     * @var string $number These are the digits of the phone number you own on your Twilio.
     */
    #[JsonProperty('number')]
    public string $number;

    /**
     * @var string $twilioAccountSid This is the Twilio Account SID for the phone number.
     */
    #[JsonProperty('twilioAccountSid')]
    public string $twilioAccountSid;

    /**
     * @var ?string $twilioAuthToken This is the Twilio Auth Token for the phone number.
     */
    #[JsonProperty('twilioAuthToken')]
    public ?string $twilioAuthToken;

    /**
     * @var ?string $twilioApiKey This is the Twilio API Key for the phone number.
     */
    #[JsonProperty('twilioApiKey')]
    public ?string $twilioApiKey;

    /**
     * @var ?string $twilioApiSecret This is the Twilio API Secret for the phone number.
     */
    #[JsonProperty('twilioApiSecret')]
    public ?string $twilioApiSecret;

    /**
     * @var ?string $name This is the name of the phone number. This is just for your own reference.
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * This is the assistant that will be used for incoming calls to this phone number.
     *
     * If neither `assistantId`, `squadId` nor `workflowId` is set, `assistant-request` will be sent to your Server URL. Check `ServerMessage` and `ServerMessageResponse` for the shape of the message and response that is expected.
     *
     * @var ?string $assistantId
     */
    #[JsonProperty('assistantId')]
    public ?string $assistantId;

    /**
     * This is the workflow that will be used for incoming calls to this phone number.
     *
     * If neither `assistantId`, `squadId`, nor `workflowId` is set, `assistant-request` will be sent to your Server URL. Check `ServerMessage` and `ServerMessageResponse` for the shape of the message and response that is expected.
     *
     * @var ?string $workflowId
     */
    #[JsonProperty('workflowId')]
    public ?string $workflowId;

    /**
     * This is the squad that will be used for incoming calls to this phone number.
     *
     * If neither `assistantId`, `squadId`, nor `workflowId` is set, `assistant-request` will be sent to your Server URL. Check `ServerMessage` and `ServerMessageResponse` for the shape of the message and response that is expected.
     *
     * @var ?string $squadId
     */
    #[JsonProperty('squadId')]
    public ?string $squadId;

    /**
     * This is where Vapi will send webhooks. You can find all webhooks available along with their shape in ServerMessage schema.
     *
     * The order of precedence is:
     *
     * 1. assistant.server
     * 2. phoneNumber.server
     * 3. org.server
     *
     * @var ?Server $server
     */
    #[JsonProperty('server')]
    public ?Server $server;

    /**
     * @param array{
     *   number: string,
     *   twilioAccountSid: string,
     *   fallbackDestination?: ?CreateTwilioPhoneNumberDtoFallbackDestination,
     *   hooks?: ?array<CreateTwilioPhoneNumberDtoHooksItem>,
     *   smsEnabled?: ?bool,
     *   twilioAuthToken?: ?string,
     *   twilioApiKey?: ?string,
     *   twilioApiSecret?: ?string,
     *   name?: ?string,
     *   assistantId?: ?string,
     *   workflowId?: ?string,
     *   squadId?: ?string,
     *   server?: ?Server,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->fallbackDestination = $values['fallbackDestination'] ?? null;
        $this->hooks = $values['hooks'] ?? null;
        $this->smsEnabled = $values['smsEnabled'] ?? null;
        $this->number = $values['number'];
        $this->twilioAccountSid = $values['twilioAccountSid'];
        $this->twilioAuthToken = $values['twilioAuthToken'] ?? null;
        $this->twilioApiKey = $values['twilioApiKey'] ?? null;
        $this->twilioApiSecret = $values['twilioApiSecret'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->assistantId = $values['assistantId'] ?? null;
        $this->workflowId = $values['workflowId'] ?? null;
        $this->squadId = $values['squadId'] ?? null;
        $this->server = $values['server'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
