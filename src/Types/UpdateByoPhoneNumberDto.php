<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class UpdateByoPhoneNumberDto extends JsonSerializableType
{
    /**
     * This is the fallback destination an inbound call will be transferred to if:
     * 1. `assistantId` is not set
     * 2. `squadId` is not set
     * 3. and, `assistant-request` message to the `serverUrl` fails
     *
     * If this is not set and above conditions are met, the inbound call is hung up with an error message.
     *
     * @var ?UpdateByoPhoneNumberDtoFallbackDestination $fallbackDestination
     */
    #[JsonProperty('fallbackDestination')]
    public ?UpdateByoPhoneNumberDtoFallbackDestination $fallbackDestination;

    /**
     * @var ?array<UpdateByoPhoneNumberDtoHooksItem> $hooks This is the hooks that will be used for incoming calls to this phone number.
     */
    #[JsonProperty('hooks'), ArrayType([UpdateByoPhoneNumberDtoHooksItem::class])]
    public ?array $hooks;

    /**
     * This is the flag to toggle the E164 check for the `number` field. This is an advanced property which should be used if you know your use case requires it.
     *
     * Use cases:
     * - `false`: To allow non-E164 numbers like `+001234567890`, `1234`, or `abc`. This is useful for dialing out to non-E164 numbers on your SIP trunks.
     * - `true` (default): To allow only E164 numbers like `+14155551234`. This is standard for PSTN calls.
     *
     * If `false`, the `number` is still required to only contain alphanumeric characters (regex: `/^\+?[a-zA-Z0-9]+$/`).
     *
     * @default true (E164 check is enabled)
     *
     * @var ?bool $numberE164CheckEnabled
     */
    #[JsonProperty('numberE164CheckEnabled')]
    public ?bool $numberE164CheckEnabled;

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
     * @var ?string $number This is the number of the customer.
     */
    #[JsonProperty('number')]
    public ?string $number;

    /**
     * This is the credential of your own SIP trunk or Carrier (type `byo-sip-trunk`) which can be used to make calls to this phone number.
     *
     * You can add the SIP trunk or Carrier credential in the Provider Credentials page on the Dashboard to get the credentialId.
     *
     * @var ?string $credentialId
     */
    #[JsonProperty('credentialId')]
    public ?string $credentialId;

    /**
     * @param array{
     *   fallbackDestination?: ?UpdateByoPhoneNumberDtoFallbackDestination,
     *   hooks?: ?array<UpdateByoPhoneNumberDtoHooksItem>,
     *   numberE164CheckEnabled?: ?bool,
     *   name?: ?string,
     *   assistantId?: ?string,
     *   workflowId?: ?string,
     *   squadId?: ?string,
     *   server?: ?Server,
     *   number?: ?string,
     *   credentialId?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->fallbackDestination = $values['fallbackDestination'] ?? null;
        $this->hooks = $values['hooks'] ?? null;
        $this->numberE164CheckEnabled = $values['numberE164CheckEnabled'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->assistantId = $values['assistantId'] ?? null;
        $this->workflowId = $values['workflowId'] ?? null;
        $this->squadId = $values['squadId'] ?? null;
        $this->server = $values['server'] ?? null;
        $this->number = $values['number'] ?? null;
        $this->credentialId = $values['credentialId'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
