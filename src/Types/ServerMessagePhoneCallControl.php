<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class ServerMessagePhoneCallControl extends JsonSerializableType
{
    /**
     * @var ?ServerMessagePhoneCallControlPhoneNumber $phoneNumber This is the phone number that the message is associated with.
     */
    #[JsonProperty('phoneNumber')]
    public ?ServerMessagePhoneCallControlPhoneNumber $phoneNumber;

    /**
     * This is the type of the message. "phone-call-control" is an advanced type of message.
     *
     * When it is requested in `assistant.serverMessages`, the hangup and forwarding responsibilities are delegated to your server. Vapi will no longer do the actual transfer and hangup.
     *
     * @var 'phone-call-control' $type
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var value-of<ServerMessagePhoneCallControlRequest> $request This is the request to control the phone call.
     */
    #[JsonProperty('request')]
    public string $request;

    /**
     * @var ?ServerMessagePhoneCallControlDestination $destination This is the destination to forward the call to if the request is "forward".
     */
    #[JsonProperty('destination')]
    public ?ServerMessagePhoneCallControlDestination $destination;

    /**
     * @var ?float $timestamp This is the timestamp of the message.
     */
    #[JsonProperty('timestamp')]
    public ?float $timestamp;

    /**
     * This is a live version of the `call.artifact`.
     *
     * This matches what is stored on `call.artifact` after the call.
     *
     * @var ?Artifact $artifact
     */
    #[JsonProperty('artifact')]
    public ?Artifact $artifact;

    /**
     * @var ?CreateAssistantDto $assistant This is the assistant that the message is associated with.
     */
    #[JsonProperty('assistant')]
    public ?CreateAssistantDto $assistant;

    /**
     * @var ?CreateCustomerDto $customer This is the customer that the message is associated with.
     */
    #[JsonProperty('customer')]
    public ?CreateCustomerDto $customer;

    /**
     * @var ?Call $call This is the call that the message is associated with.
     */
    #[JsonProperty('call')]
    public ?Call $call;

    /**
     * @var ?Chat $chat This is the chat object.
     */
    #[JsonProperty('chat')]
    public ?Chat $chat;

    /**
     * @param array{
     *   type: 'phone-call-control',
     *   request: value-of<ServerMessagePhoneCallControlRequest>,
     *   phoneNumber?: ?ServerMessagePhoneCallControlPhoneNumber,
     *   destination?: ?ServerMessagePhoneCallControlDestination,
     *   timestamp?: ?float,
     *   artifact?: ?Artifact,
     *   assistant?: ?CreateAssistantDto,
     *   customer?: ?CreateCustomerDto,
     *   call?: ?Call,
     *   chat?: ?Chat,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->phoneNumber = $values['phoneNumber'] ?? null;
        $this->type = $values['type'];
        $this->request = $values['request'];
        $this->destination = $values['destination'] ?? null;
        $this->timestamp = $values['timestamp'] ?? null;
        $this->artifact = $values['artifact'] ?? null;
        $this->assistant = $values['assistant'] ?? null;
        $this->customer = $values['customer'] ?? null;
        $this->call = $values['call'] ?? null;
        $this->chat = $values['chat'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
