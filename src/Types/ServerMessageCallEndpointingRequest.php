<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;
use Vapi\Core\Types\Union;

final class ServerMessageCallEndpointingRequest extends JsonSerializableType
{
    /**
     * @var ?ServerMessageCallEndpointingRequestPhoneNumber $phoneNumber This is the phone number that the message is associated with.
     */
    #[JsonProperty('phoneNumber')]
    public ?ServerMessageCallEndpointingRequestPhoneNumber $phoneNumber;

    /**
     * This is the type of the message. "call.endpointing.request" is sent when using `assistant.startSpeakingPlan.smartEndpointingPlan={ "provider": "custom-endpointing-model" }`.
     *
     * Here is what the request will look like:
     *
     * POST https://{assistant.startSpeakingPlan.smartEndpointingPlan.server.url}
     * Content-Type: application/json
     *
     * {
     *   "message": {
     *     "type": "call.endpointing.request",
     *     "messages": [
     *       {
     *         "role": "user",
     *         "message": "Hello, how are you?",
     *         "time": 1234567890,
     *         "secondsFromStart": 0
     *       }
     *     ],
     *     ...other metadata about the call...
     *   }
     * }
     *
     * The expected response:
     * {
     *   "timeoutSeconds": 0.5
     * }
     *
     * @var 'call.endpointing.request' $type
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
     * )> $messages This is the conversation history at the time of the endpointing request.
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
     *   type: 'call.endpointing.request',
     *   messagesOpenAiFormatted: array<OpenAiMessage>,
     *   phoneNumber?: ?ServerMessageCallEndpointingRequestPhoneNumber,
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
