<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\Union;

final class CreateWebChatDto extends JsonSerializableType
{
    /**
     * @var string $assistantId The assistant ID to use for this chat
     */
    #[JsonProperty('assistantId')]
    public string $assistantId;

    /**
     * This is the ID of the session that will be used for the chat.
     * If provided, the conversation will continue from the previous state.
     * If not provided or expired, a new session will be created.
     *
     * @var ?string $sessionId
     */
    #[JsonProperty('sessionId')]
    public ?string $sessionId;

    /**
     * These are the variable values that will be used to replace template variables in the assistant messages.
     * Only variable substitution is supported in web chat - other assistant properties cannot be overridden.
     *
     * @var ?ChatAssistantOverrides $assistantOverrides
     */
    #[JsonProperty('assistantOverrides')]
    public ?ChatAssistantOverrides $assistantOverrides;

    /**
     * This is the customer information for the chat.
     * Used to automatically manage sessions for repeat customers.
     *
     * @var ?CreateWebCustomerDto $customer
     */
    #[JsonProperty('customer')]
    public ?CreateWebCustomerDto $customer;

    /**
     * This is the input text for the chat.
     * Can be a string or an array of chat messages.
     *
     * @var (
     *    string
     *   |array<(
     *    SystemMessage
     *   |UserMessage
     *   |AssistantMessage
     *   |ToolMessage
     *   |DeveloperMessage
     * )>
     * ) $input
     */
    #[JsonProperty('input'), Union('string', [new Union(SystemMessage::class, UserMessage::class, AssistantMessage::class, ToolMessage::class, DeveloperMessage::class)])]
    public string|array $input;

    /**
     * This is a flag that determines whether the response should be streamed.
     * When true, the response will be sent as chunks of text.
     *
     * @var ?bool $stream
     */
    #[JsonProperty('stream')]
    public ?bool $stream;

    /**
     * This is a flag to indicate end of session. When true, the session will be marked as completed and the chat will be ended.
     * Used to end session to send End-of-session report to the customer.
     * When flag is set to true, any messages sent will not be processed and session will directly be marked as completed.
     *
     * @var ?bool $sessionEnd
     */
    #[JsonProperty('sessionEnd')]
    public ?bool $sessionEnd;

    /**
     * @param array{
     *   assistantId: string,
     *   input: (
     *    string
     *   |array<(
     *    SystemMessage
     *   |UserMessage
     *   |AssistantMessage
     *   |ToolMessage
     *   |DeveloperMessage
     * )>
     * ),
     *   sessionId?: ?string,
     *   assistantOverrides?: ?ChatAssistantOverrides,
     *   customer?: ?CreateWebCustomerDto,
     *   stream?: ?bool,
     *   sessionEnd?: ?bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->assistantId = $values['assistantId'];
        $this->sessionId = $values['sessionId'] ?? null;
        $this->assistantOverrides = $values['assistantOverrides'] ?? null;
        $this->customer = $values['customer'] ?? null;
        $this->input = $values['input'];
        $this->stream = $values['stream'] ?? null;
        $this->sessionEnd = $values['sessionEnd'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
