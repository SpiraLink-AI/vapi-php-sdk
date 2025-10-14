<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\Union;

final class ServerMessage extends JsonSerializableType
{
    /**
     * These are all the messages that can be sent to your server before, after and during the call. Configure the messages you'd like to receive in `assistant.serverMessages`.
     *
     * The server where the message is sent is determined by the following precedence order:
     *
     * 1. `tool.server.url` (if configured, and only for "tool-calls" message)
     * 2. `assistant.serverUrl` (if configure)
     * 3. `phoneNumber.serverUrl` (if configured)
     * 4. `org.serverUrl` (if configured)
     *
     * @var (
     *    ServerMessageAssistantRequest
     *   |ServerMessageConversationUpdate
     *   |ServerMessageEndOfCallReport
     *   |ServerMessageHandoffDestinationRequest
     *   |ServerMessageHang
     *   |ServerMessageKnowledgeBaseRequest
     *   |ServerMessageModelOutput
     *   |ServerMessagePhoneCallControl
     *   |ServerMessageSpeechUpdate
     *   |ServerMessageStatusUpdate
     *   |ServerMessageToolCalls
     *   |ServerMessageTransferDestinationRequest
     *   |ServerMessageTransferUpdate
     *   |ServerMessageTranscript
     *   |ServerMessageUserInterrupted
     *   |ServerMessageLanguageChangeDetected
     *   |ServerMessageVoiceInput
     *   |ServerMessageVoiceRequest
     *   |ServerMessageCallEndpointingRequest
     *   |ServerMessageChatCreated
     *   |ServerMessageChatDeleted
     *   |ServerMessageSessionCreated
     *   |ServerMessageSessionUpdated
     *   |ServerMessageSessionDeleted
     *   |ServerMessageCallDeleted
     *   |ServerMessageCallDeleteFailed
     * ) $message
     */
    #[JsonProperty('message'), Union(ServerMessageAssistantRequest::class, ServerMessageConversationUpdate::class, ServerMessageEndOfCallReport::class, ServerMessageHandoffDestinationRequest::class, ServerMessageHang::class, ServerMessageKnowledgeBaseRequest::class, ServerMessageModelOutput::class, ServerMessagePhoneCallControl::class, ServerMessageSpeechUpdate::class, ServerMessageStatusUpdate::class, ServerMessageToolCalls::class, ServerMessageTransferDestinationRequest::class, ServerMessageTransferUpdate::class, ServerMessageTranscript::class, ServerMessageUserInterrupted::class, ServerMessageLanguageChangeDetected::class, ServerMessageVoiceInput::class, ServerMessageVoiceRequest::class, ServerMessageCallEndpointingRequest::class, ServerMessageChatCreated::class, ServerMessageChatDeleted::class, ServerMessageSessionCreated::class, ServerMessageSessionUpdated::class, ServerMessageSessionDeleted::class, ServerMessageCallDeleted::class, ServerMessageCallDeleteFailed::class)]
    public ServerMessageAssistantRequest|ServerMessageConversationUpdate|ServerMessageEndOfCallReport|ServerMessageHandoffDestinationRequest|ServerMessageHang|ServerMessageKnowledgeBaseRequest|ServerMessageModelOutput|ServerMessagePhoneCallControl|ServerMessageSpeechUpdate|ServerMessageStatusUpdate|ServerMessageToolCalls|ServerMessageTransferDestinationRequest|ServerMessageTransferUpdate|ServerMessageTranscript|ServerMessageUserInterrupted|ServerMessageLanguageChangeDetected|ServerMessageVoiceInput|ServerMessageVoiceRequest|ServerMessageCallEndpointingRequest|ServerMessageChatCreated|ServerMessageChatDeleted|ServerMessageSessionCreated|ServerMessageSessionUpdated|ServerMessageSessionDeleted|ServerMessageCallDeleted|ServerMessageCallDeleteFailed $message;

    /**
     * @param array{
     *   message: (
     *    ServerMessageAssistantRequest
     *   |ServerMessageConversationUpdate
     *   |ServerMessageEndOfCallReport
     *   |ServerMessageHandoffDestinationRequest
     *   |ServerMessageHang
     *   |ServerMessageKnowledgeBaseRequest
     *   |ServerMessageModelOutput
     *   |ServerMessagePhoneCallControl
     *   |ServerMessageSpeechUpdate
     *   |ServerMessageStatusUpdate
     *   |ServerMessageToolCalls
     *   |ServerMessageTransferDestinationRequest
     *   |ServerMessageTransferUpdate
     *   |ServerMessageTranscript
     *   |ServerMessageUserInterrupted
     *   |ServerMessageLanguageChangeDetected
     *   |ServerMessageVoiceInput
     *   |ServerMessageVoiceRequest
     *   |ServerMessageCallEndpointingRequest
     *   |ServerMessageChatCreated
     *   |ServerMessageChatDeleted
     *   |ServerMessageSessionCreated
     *   |ServerMessageSessionUpdated
     *   |ServerMessageSessionDeleted
     *   |ServerMessageCallDeleted
     *   |ServerMessageCallDeleteFailed
     * ),
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->message = $values['message'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
