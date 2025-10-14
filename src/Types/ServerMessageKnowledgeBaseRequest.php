<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;
use Vapi\Core\Types\Union;

final class ServerMessageKnowledgeBaseRequest extends JsonSerializableType
{
    /**
     * @var ?ServerMessageKnowledgeBaseRequestPhoneNumber $phoneNumber This is the phone number that the message is associated with.
     */
    #[JsonProperty('phoneNumber')]
    public ?ServerMessageKnowledgeBaseRequestPhoneNumber $phoneNumber;

    /**
     * @var 'knowledge-base-request' $type This is the type of the message. "knowledge-base-request" is sent to request knowledge base documents. To enable, use `assistant.knowledgeBase.provider=custom-knowledge-base`.
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
     * )> $messages These are the messages that are going to be sent to the `model` right after the `knowledge-base-request` webhook completes.
     */
    #[JsonProperty('messages'), ArrayType([new Union(UserMessage::class, SystemMessage::class, BotMessage::class, ToolCallMessage::class, ToolCallResultMessage::class)])]
    public ?array $messages;

    /**
     * @var array<OpenAiMessage> $messagesOpenAiFormatted This is just `messages` formatted for OpenAI.
     */
    #[JsonProperty('messagesOpenAIFormatted'), ArrayType([OpenAiMessage::class])]
    public array $messagesOpenAiFormatted;

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
     *   type: 'knowledge-base-request',
     *   messagesOpenAiFormatted: array<OpenAiMessage>,
     *   phoneNumber?: ?ServerMessageKnowledgeBaseRequestPhoneNumber,
     *   messages?: ?array<(
     *    UserMessage
     *   |SystemMessage
     *   |BotMessage
     *   |ToolCallMessage
     *   |ToolCallResultMessage
     * )>,
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
        $this->messages = $values['messages'] ?? null;
        $this->messagesOpenAiFormatted = $values['messagesOpenAiFormatted'];
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
