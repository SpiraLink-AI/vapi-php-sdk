<?php declare(strict_types=1);

namespace Vapi\Chats\Requests;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\Union;
use Vapi\Types\AssistantMessage;
use Vapi\Types\AssistantOverrides;
use Vapi\Types\CreateAssistantDto;
use Vapi\Types\CreateSquadDto;
use Vapi\Types\DeveloperMessage;
use Vapi\Types\SystemMessage;
use Vapi\Types\ToolMessage;
use Vapi\Types\TwilioSmsChatTransport;
use Vapi\Types\UserMessage;

final class OpenAiResponsesRequest extends JsonSerializableType
{
    /**
     * @var ?string $assistantId This is the assistant that will be used for the chat. To use an existing assistant, use `assistantId` instead.
     */
    #[JsonProperty('assistantId')]
    public ?string $assistantId;

    /**
     * @var ?CreateAssistantDto $assistant This is the assistant that will be used for the chat. To use an existing assistant, use `assistantId` instead.
     */
    #[JsonProperty('assistant')]
    public ?CreateAssistantDto $assistant;

    /**
     * These are the variable values that will be used to replace template variables in the assistant messages.
     * Only variable substitution is supported in chat contexts - other assistant properties cannot be overridden.
     *
     * @var ?AssistantOverrides $assistantOverrides
     */
    #[JsonProperty('assistantOverrides')]
    public ?AssistantOverrides $assistantOverrides;

    /**
     * @var ?string $squadId This is the squad that will be used for the chat. To use a transient squad, use `squad` instead.
     */
    #[JsonProperty('squadId')]
    public ?string $squadId;

    /**
     * @var ?CreateSquadDto $squad This is the squad that will be used for the chat. To use an existing squad, use `squadId` instead.
     */
    #[JsonProperty('squad')]
    public ?CreateSquadDto $squad;

    /**
     * @var ?string $name This is the name of the chat. This is just for your own reference.
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * This is the ID of the session that will be used for the chat.
     * Mutually exclusive with previousChatId.
     *
     * @var ?string $sessionId
     */
    #[JsonProperty('sessionId')]
    public ?string $sessionId;

    /**
     * This is the input text for the chat.
     * Can be a string or an array of chat messages.
     * This field is REQUIRED for chat creation.
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
     * @var ?bool $stream Whether to stream the response or not.
     */
    #[JsonProperty('stream')]
    public ?bool $stream;

    /**
     * This is the ID of the chat that will be used as context for the new chat.
     * The messages from the previous chat will be used as context.
     * Mutually exclusive with sessionId.
     *
     * @var ?string $previousChatId
     */
    #[JsonProperty('previousChatId')]
    public ?string $previousChatId;

    /**
     * This is used to send the chat through a transport like SMS.
     * If transport.phoneNumberId and transport.customer are provided, creates a new session.
     * If sessionId is provided without transport fields, uses existing session data.
     * Cannot specify both sessionId and transport fields (phoneNumberId/customer) together.
     *
     * @var ?TwilioSmsChatTransport $transport
     */
    #[JsonProperty('transport')]
    public ?TwilioSmsChatTransport $transport;

    /**
     * @param array{
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
     *   assistantId?: ?string,
     *   assistant?: ?CreateAssistantDto,
     *   assistantOverrides?: ?AssistantOverrides,
     *   squadId?: ?string,
     *   squad?: ?CreateSquadDto,
     *   name?: ?string,
     *   sessionId?: ?string,
     *   stream?: ?bool,
     *   previousChatId?: ?string,
     *   transport?: ?TwilioSmsChatTransport,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->assistantId = $values['assistantId'] ?? null;
        $this->assistant = $values['assistant'] ?? null;
        $this->assistantOverrides = $values['assistantOverrides'] ?? null;
        $this->squadId = $values['squadId'] ?? null;
        $this->squad = $values['squad'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->sessionId = $values['sessionId'] ?? null;
        $this->input = $values['input'];
        $this->stream = $values['stream'] ?? null;
        $this->previousChatId = $values['previousChatId'] ?? null;
        $this->transport = $values['transport'] ?? null;
    }
}
