<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\Union;

final class ClientMessage extends JsonSerializableType
{
    /**
     * @var (
     *    ClientMessageWorkflowNodeStarted
     *   |ClientMessageConversationUpdate
     *   |ClientMessageHang
     *   |ClientMessageMetadata
     *   |ClientMessageModelOutput
     *   |ClientMessageSpeechUpdate
     *   |ClientMessageTranscript
     *   |ClientMessageToolCalls
     *   |ClientMessageToolCallsResult
     *   |ClientMessageTransferUpdate
     *   |ClientMessageUserInterrupted
     *   |ClientMessageLanguageChangeDetected
     *   |ClientMessageVoiceInput
     *   |ClientMessageChatCreated
     *   |ClientMessageChatDeleted
     *   |ClientMessageSessionCreated
     *   |ClientMessageSessionUpdated
     *   |ClientMessageSessionDeleted
     *   |ClientMessageCallDeleted
     *   |ClientMessageCallDeleteFailed
     * ) $message These are all the messages that can be sent to the client-side SDKs during the call. Configure the messages you'd like to receive in `assistant.clientMessages`.
     */
    #[JsonProperty('message'), Union(ClientMessageWorkflowNodeStarted::class, ClientMessageConversationUpdate::class, ClientMessageHang::class, ClientMessageMetadata::class, ClientMessageModelOutput::class, ClientMessageSpeechUpdate::class, ClientMessageTranscript::class, ClientMessageToolCalls::class, ClientMessageToolCallsResult::class, ClientMessageTransferUpdate::class, ClientMessageUserInterrupted::class, ClientMessageLanguageChangeDetected::class, ClientMessageVoiceInput::class, ClientMessageChatCreated::class, ClientMessageChatDeleted::class, ClientMessageSessionCreated::class, ClientMessageSessionUpdated::class, ClientMessageSessionDeleted::class, ClientMessageCallDeleted::class, ClientMessageCallDeleteFailed::class)]
    public ClientMessageWorkflowNodeStarted|ClientMessageConversationUpdate|ClientMessageHang|ClientMessageMetadata|ClientMessageModelOutput|ClientMessageSpeechUpdate|ClientMessageTranscript|ClientMessageToolCalls|ClientMessageToolCallsResult|ClientMessageTransferUpdate|ClientMessageUserInterrupted|ClientMessageLanguageChangeDetected|ClientMessageVoiceInput|ClientMessageChatCreated|ClientMessageChatDeleted|ClientMessageSessionCreated|ClientMessageSessionUpdated|ClientMessageSessionDeleted|ClientMessageCallDeleted|ClientMessageCallDeleteFailed $message;

    /**
     * @param array{
     *   message: (
     *    ClientMessageWorkflowNodeStarted
     *   |ClientMessageConversationUpdate
     *   |ClientMessageHang
     *   |ClientMessageMetadata
     *   |ClientMessageModelOutput
     *   |ClientMessageSpeechUpdate
     *   |ClientMessageTranscript
     *   |ClientMessageToolCalls
     *   |ClientMessageToolCallsResult
     *   |ClientMessageTransferUpdate
     *   |ClientMessageUserInterrupted
     *   |ClientMessageLanguageChangeDetected
     *   |ClientMessageVoiceInput
     *   |ClientMessageChatCreated
     *   |ClientMessageChatDeleted
     *   |ClientMessageSessionCreated
     *   |ClientMessageSessionUpdated
     *   |ClientMessageSessionDeleted
     *   |ClientMessageCallDeleted
     *   |ClientMessageCallDeleteFailed
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
