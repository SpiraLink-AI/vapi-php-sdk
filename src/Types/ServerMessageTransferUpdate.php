<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class ServerMessageTransferUpdate extends JsonSerializableType
{
    /**
     * @var ?ServerMessageTransferUpdatePhoneNumber $phoneNumber This is the phone number that the message is associated with.
     */
    #[JsonProperty('phoneNumber')]
    public ?ServerMessageTransferUpdatePhoneNumber $phoneNumber;

    /**
     * @var 'transfer-update' $type This is the type of the message. "transfer-update" is sent whenever a transfer happens.
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var ?ServerMessageTransferUpdateDestination $destination This is the destination of the transfer.
     */
    #[JsonProperty('destination')]
    public ?ServerMessageTransferUpdateDestination $destination;

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
     * @var ?CreateAssistantDto $toAssistant This is the assistant that the call is being transferred to. This is only sent if `destination.type` is "assistant".
     */
    #[JsonProperty('toAssistant')]
    public ?CreateAssistantDto $toAssistant;

    /**
     * @var ?CreateAssistantDto $fromAssistant This is the assistant that the call is being transferred from. This is only sent if `destination.type` is "assistant".
     */
    #[JsonProperty('fromAssistant')]
    public ?CreateAssistantDto $fromAssistant;

    /**
     * @var ?array<string, mixed> $toStepRecord This is the step that the conversation moved to.
     */
    #[JsonProperty('toStepRecord'), ArrayType(['string' => 'mixed'])]
    public ?array $toStepRecord;

    /**
     * @var ?array<string, mixed> $fromStepRecord This is the step that the conversation moved from. =
     */
    #[JsonProperty('fromStepRecord'), ArrayType(['string' => 'mixed'])]
    public ?array $fromStepRecord;

    /**
     * @param array{
     *   type: 'transfer-update',
     *   phoneNumber?: ?ServerMessageTransferUpdatePhoneNumber,
     *   destination?: ?ServerMessageTransferUpdateDestination,
     *   timestamp?: ?float,
     *   artifact?: ?Artifact,
     *   assistant?: ?CreateAssistantDto,
     *   customer?: ?CreateCustomerDto,
     *   call?: ?Call,
     *   chat?: ?Chat,
     *   toAssistant?: ?CreateAssistantDto,
     *   fromAssistant?: ?CreateAssistantDto,
     *   toStepRecord?: ?array<string, mixed>,
     *   fromStepRecord?: ?array<string, mixed>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->phoneNumber = $values['phoneNumber'] ?? null;
        $this->type = $values['type'];
        $this->destination = $values['destination'] ?? null;
        $this->timestamp = $values['timestamp'] ?? null;
        $this->artifact = $values['artifact'] ?? null;
        $this->assistant = $values['assistant'] ?? null;
        $this->customer = $values['customer'] ?? null;
        $this->call = $values['call'] ?? null;
        $this->chat = $values['chat'] ?? null;
        $this->toAssistant = $values['toAssistant'] ?? null;
        $this->fromAssistant = $values['fromAssistant'] ?? null;
        $this->toStepRecord = $values['toStepRecord'] ?? null;
        $this->fromStepRecord = $values['fromStepRecord'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
