<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;
use Vapi\Core\Types\Union;

final class ServerMessageStatusUpdate extends JsonSerializableType
{
    /**
     * @var ?ServerMessageStatusUpdatePhoneNumber $phoneNumber This is the phone number that the message is associated with.
     */
    #[JsonProperty('phoneNumber')]
    public ?ServerMessageStatusUpdatePhoneNumber $phoneNumber;

    /**
     * @var 'status-update' $type This is the type of the message. "status-update" is sent whenever the `call.status` changes.
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var value-of<ServerMessageStatusUpdateStatus> $status This is the status of the call.
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var ?value-of<ServerMessageStatusUpdateEndedReason> $endedReason This is the reason the call ended. This is only sent if the status is "ended".
     */
    #[JsonProperty('endedReason')]
    public ?string $endedReason;

    /**
     * @var ?array<(
     *    UserMessage
     *   |SystemMessage
     *   |BotMessage
     *   |ToolCallMessage
     *   |ToolCallResultMessage
     * )> $messages These are the conversation messages of the call. This is only sent if the status is "forwarding".
     */
    #[JsonProperty('messages'), ArrayType([new Union(UserMessage::class, SystemMessage::class, BotMessage::class, ToolCallMessage::class, ToolCallResultMessage::class)])]
    public ?array $messages;

    /**
     * @var ?array<OpenAiMessage> $messagesOpenAiFormatted These are the conversation messages of the call. This is only sent if the status is "forwarding".
     */
    #[JsonProperty('messagesOpenAIFormatted'), ArrayType([OpenAiMessage::class])]
    public ?array $messagesOpenAiFormatted;

    /**
     * @var ?ServerMessageStatusUpdateDestination $destination This is the destination the call is being transferred to. This is only sent if the status is "forwarding".
     */
    #[JsonProperty('destination')]
    public ?ServerMessageStatusUpdateDestination $destination;

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
     * @var ?string $transcript This is the transcript of the call. This is only sent if the status is "forwarding".
     */
    #[JsonProperty('transcript')]
    public ?string $transcript;

    /**
     * @var ?string $summary This is the summary of the call. This is only sent if the status is "forwarding".
     */
    #[JsonProperty('summary')]
    public ?string $summary;

    /**
     * This is the inbound phone call debugging artifacts. This is only sent if the status is "ended" and there was an error accepting the inbound phone call.
     *
     * This will include any errors related to the "assistant-request" if one was made.
     *
     * @var ?array<string, mixed> $inboundPhoneCallDebuggingArtifacts
     */
    #[JsonProperty('inboundPhoneCallDebuggingArtifacts'), ArrayType(['string' => 'mixed'])]
    public ?array $inboundPhoneCallDebuggingArtifacts;

    /**
     * @param array{
     *   type: 'status-update',
     *   status: value-of<ServerMessageStatusUpdateStatus>,
     *   phoneNumber?: ?ServerMessageStatusUpdatePhoneNumber,
     *   endedReason?: ?value-of<ServerMessageStatusUpdateEndedReason>,
     *   messages?: ?array<(
     *    UserMessage
     *   |SystemMessage
     *   |BotMessage
     *   |ToolCallMessage
     *   |ToolCallResultMessage
     * )>,
     *   messagesOpenAiFormatted?: ?array<OpenAiMessage>,
     *   destination?: ?ServerMessageStatusUpdateDestination,
     *   timestamp?: ?float,
     *   artifact?: ?Artifact,
     *   assistant?: ?CreateAssistantDto,
     *   customer?: ?CreateCustomerDto,
     *   call?: ?Call,
     *   chat?: ?Chat,
     *   transcript?: ?string,
     *   summary?: ?string,
     *   inboundPhoneCallDebuggingArtifacts?: ?array<string, mixed>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->phoneNumber = $values['phoneNumber'] ?? null;
        $this->type = $values['type'];
        $this->status = $values['status'];
        $this->endedReason = $values['endedReason'] ?? null;
        $this->messages = $values['messages'] ?? null;
        $this->messagesOpenAiFormatted = $values['messagesOpenAiFormatted'] ?? null;
        $this->destination = $values['destination'] ?? null;
        $this->timestamp = $values['timestamp'] ?? null;
        $this->artifact = $values['artifact'] ?? null;
        $this->assistant = $values['assistant'] ?? null;
        $this->customer = $values['customer'] ?? null;
        $this->call = $values['call'] ?? null;
        $this->chat = $values['chat'] ?? null;
        $this->transcript = $values['transcript'] ?? null;
        $this->summary = $values['summary'] ?? null;
        $this->inboundPhoneCallDebuggingArtifacts = $values['inboundPhoneCallDebuggingArtifacts'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
