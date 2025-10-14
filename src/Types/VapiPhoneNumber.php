<?php declare(strict_types=1);

namespace Vapi\Types;

use DateTime;
use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;
use Vapi\Core\Types\Date;

final class VapiPhoneNumber extends JsonSerializableType
{
    /**
     * This is the fallback destination an inbound call will be transferred to if:
     * 1. `assistantId` is not set
     * 2. `squadId` is not set
     * 3. and, `assistant-request` message to the `serverUrl` fails
     *
     * If this is not set and above conditions are met, the inbound call is hung up with an error message.
     *
     * @var ?VapiPhoneNumberFallbackDestination $fallbackDestination
     */
    #[JsonProperty('fallbackDestination')]
    public ?VapiPhoneNumberFallbackDestination $fallbackDestination;

    /**
     * @var ?array<VapiPhoneNumberHooksItem> $hooks This is the hooks that will be used for incoming calls to this phone number.
     */
    #[JsonProperty('hooks'), ArrayType([VapiPhoneNumberHooksItem::class])]
    public ?array $hooks;

    /**
     * @var string $id This is the unique identifier for the phone number.
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $orgId This is the unique identifier for the org that this phone number belongs to.
     */
    #[JsonProperty('orgId')]
    public string $orgId;

    /**
     * @var DateTime $createdAt This is the ISO 8601 date-time string of when the phone number was created.
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $createdAt;

    /**
     * @var DateTime $updatedAt This is the ISO 8601 date-time string of when the phone number was last updated.
     */
    #[JsonProperty('updatedAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $updatedAt;

    /**
     * @var ?value-of<VapiPhoneNumberStatus> $status This is the status of the phone number.
     */
    #[JsonProperty('status')]
    public ?string $status;

    /**
     * @var ?string $number These are the digits of the phone number you purchased from Vapi.
     */
    #[JsonProperty('number')]
    public ?string $number;

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
     * @param array{
     *   id: string,
     *   orgId: string,
     *   createdAt: DateTime,
     *   updatedAt: DateTime,
     *   fallbackDestination?: ?VapiPhoneNumberFallbackDestination,
     *   hooks?: ?array<VapiPhoneNumberHooksItem>,
     *   status?: ?value-of<VapiPhoneNumberStatus>,
     *   number?: ?string,
     *   name?: ?string,
     *   assistantId?: ?string,
     *   workflowId?: ?string,
     *   squadId?: ?string,
     *   server?: ?Server,
     *   numberDesiredAreaCode?: ?string,
     *   sipUri?: ?string,
     *   authentication?: ?SipAuthentication,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->fallbackDestination = $values['fallbackDestination'] ?? null;
        $this->hooks = $values['hooks'] ?? null;
        $this->id = $values['id'];
        $this->orgId = $values['orgId'];
        $this->createdAt = $values['createdAt'];
        $this->updatedAt = $values['updatedAt'];
        $this->status = $values['status'] ?? null;
        $this->number = $values['number'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->assistantId = $values['assistantId'] ?? null;
        $this->workflowId = $values['workflowId'] ?? null;
        $this->squadId = $values['squadId'] ?? null;
        $this->server = $values['server'] ?? null;
        $this->numberDesiredAreaCode = $values['numberDesiredAreaCode'] ?? null;
        $this->sipUri = $values['sipUri'] ?? null;
        $this->authentication = $values['authentication'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
