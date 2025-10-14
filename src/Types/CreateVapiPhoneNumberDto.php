<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class CreateVapiPhoneNumberDto extends JsonSerializableType
{
    /**
     * This is the fallback destination an inbound call will be transferred to if:
     * 1. `assistantId` is not set
     * 2. `squadId` is not set
     * 3. and, `assistant-request` message to the `serverUrl` fails
     *
     * If this is not set and above conditions are met, the inbound call is hung up with an error message.
     *
     * @var ?CreateVapiPhoneNumberDtoFallbackDestination $fallbackDestination
     */
    #[JsonProperty('fallbackDestination')]
    public ?CreateVapiPhoneNumberDtoFallbackDestination $fallbackDestination;

    /**
     * @var ?array<CreateVapiPhoneNumberDtoHooksItem> $hooks This is the hooks that will be used for incoming calls to this phone number.
     */
    #[JsonProperty('hooks'), ArrayType([CreateVapiPhoneNumberDtoHooksItem::class])]
    public ?array $hooks;

    /**
     * @var ?string $numberDesiredAreaCode This is the area code of the phone number to purchase.
     */
    #[JsonProperty('numberDesiredAreaCode')]
    public ?string $numberDesiredAreaCode;

    /**
     * This is the SIP URI of the phone number. You can SIP INVITE this. The assistant attached to this number will answer.
     *
     * This is case-insensitive.
     *
     * @var ?string $sipUri
     */
    #[JsonProperty('sipUri')]
    public ?string $sipUri;

    /**
     * This enables authentication for incoming SIP INVITE requests to the `sipUri`.
     *
     * If not set, any username/password to the 401 challenge of the SIP INVITE will be accepted.
     *
     * @var ?SipAuthentication $authentication
     */
    #[JsonProperty('authentication')]
    public ?SipAuthentication $authentication;

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
     *   fallbackDestination?: ?CreateVapiPhoneNumberDtoFallbackDestination,
     *   hooks?: ?array<CreateVapiPhoneNumberDtoHooksItem>,
     *   numberDesiredAreaCode?: ?string,
     *   sipUri?: ?string,
     *   authentication?: ?SipAuthentication,
     *   name?: ?string,
     *   assistantId?: ?string,
     *   workflowId?: ?string,
     *   squadId?: ?string,
     *   server?: ?Server,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->fallbackDestination = $values['fallbackDestination'] ?? null;
        $this->hooks = $values['hooks'] ?? null;
        $this->numberDesiredAreaCode = $values['numberDesiredAreaCode'] ?? null;
        $this->sipUri = $values['sipUri'] ?? null;
        $this->authentication = $values['authentication'] ?? null;
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
