<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class ServerMessageToolCalls extends JsonSerializableType
{
    /**
     * @var ?ServerMessageToolCallsPhoneNumber $phoneNumber This is the phone number that the message is associated with.
     */
    #[JsonProperty('phoneNumber')]
    public ?ServerMessageToolCallsPhoneNumber $phoneNumber;

    /**
     * @var ?'tool-calls' $type This is the type of the message. "tool-calls" is sent to call a tool.
     */
    #[JsonProperty('type')]
    public ?string $type;

    /**
     * @var array<ServerMessageToolCallsToolWithToolCallListItem> $toolWithToolCallList This is the list of tools calls that the model is requesting along with the original tool configuration.
     */
    #[JsonProperty('toolWithToolCallList'), ArrayType([ServerMessageToolCallsToolWithToolCallListItem::class])]
    public array $toolWithToolCallList;

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
     * @var array<ToolCall> $toolCallList This is the list of tool calls that the model is requesting.
     */
    #[JsonProperty('toolCallList'), ArrayType([ToolCall::class])]
    public array $toolCallList;

    /**
     * @param array{
     *   toolWithToolCallList: array<ServerMessageToolCallsToolWithToolCallListItem>,
     *   toolCallList: array<ToolCall>,
     *   phoneNumber?: ?ServerMessageToolCallsPhoneNumber,
     *   type?: ?'tool-calls',
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
        $this->type = $values['type'] ?? null;
        $this->toolWithToolCallList = $values['toolWithToolCallList'];
        $this->timestamp = $values['timestamp'] ?? null;
        $this->artifact = $values['artifact'] ?? null;
        $this->assistant = $values['assistant'] ?? null;
        $this->customer = $values['customer'] ?? null;
        $this->call = $values['call'] ?? null;
        $this->chat = $values['chat'] ?? null;
        $this->toolCallList = $values['toolCallList'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
