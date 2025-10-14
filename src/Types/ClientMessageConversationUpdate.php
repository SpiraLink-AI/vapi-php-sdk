<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;
use Vapi\Core\Types\Union;

final class ClientMessageConversationUpdate extends JsonSerializableType
{
    /**
     * @var ?ClientMessageConversationUpdatePhoneNumber $phoneNumber This is the phone number that the message is associated with.
     */
    #[JsonProperty('phoneNumber')]
    public ?ClientMessageConversationUpdatePhoneNumber $phoneNumber;

    /**
     * @var 'conversation-update' $type This is the type of the message. "conversation-update" is sent when an update is committed to the conversation history.
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var ?array<(
     *    UserMessage
     *   |SystemMessage
     *   |BotMessage
     *   |ToolCallMessage
     *   |ToolCallResultMessage
     * )> $messages This is the most up-to-date conversation history at the time the message is sent.
     */
    #[JsonProperty('messages'), ArrayType([new Union(UserMessage::class, SystemMessage::class, BotMessage::class, ToolCallMessage::class, ToolCallResultMessage::class)])]
    public ?array $messages;

    /**
     * @var array<OpenAiMessage> $messagesOpenAiFormatted This is the most up-to-date conversation history at the time the message is sent, formatted for OpenAI.
     */
    #[JsonProperty('messagesOpenAIFormatted'), ArrayType([OpenAiMessage::class])]
    public array $messagesOpenAiFormatted;

    /**
     * @var ?float $timestamp This is the timestamp of the message.
     */
    #[JsonProperty('timestamp')]
    public ?float $timestamp;

    /**
     * @var ?Call $call This is the call that the message is associated with.
     */
    #[JsonProperty('call')]
    public ?Call $call;

    /**
     * @var ?CreateCustomerDto $customer This is the customer that the message is associated with.
     */
    #[JsonProperty('customer')]
    public ?CreateCustomerDto $customer;

    /**
     * @var ?CreateAssistantDto $assistant This is the assistant that the message is associated with.
     */
    #[JsonProperty('assistant')]
    public ?CreateAssistantDto $assistant;

    /**
     * @param array{
     *   type: 'conversation-update',
     *   messagesOpenAiFormatted: array<OpenAiMessage>,
     *   phoneNumber?: ?ClientMessageConversationUpdatePhoneNumber,
     *   messages?: ?array<(
     *    UserMessage
     *   |SystemMessage
     *   |BotMessage
     *   |ToolCallMessage
     *   |ToolCallResultMessage
     * )>,
     *   timestamp?: ?float,
     *   call?: ?Call,
     *   customer?: ?CreateCustomerDto,
     *   assistant?: ?CreateAssistantDto,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->phoneNumber = $values['phoneNumber'] ?? null;
        $this->type = $values['type'];
        $this->messages = $values['messages'] ?? null;
        $this->messagesOpenAiFormatted = $values['messagesOpenAiFormatted'];
        $this->timestamp = $values['timestamp'] ?? null;
        $this->call = $values['call'] ?? null;
        $this->customer = $values['customer'] ?? null;
        $this->assistant = $values['assistant'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
