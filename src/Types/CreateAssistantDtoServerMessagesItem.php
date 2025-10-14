<?php declare(strict_types=1);

namespace Vapi\Types;

enum CreateAssistantDtoServerMessagesItem: string
{
    case ConversationUpdate = 'conversation-update';
    case EndOfCallReport = 'end-of-call-report';
    case FunctionCall = 'function-call';
    case Hang = 'hang';
    case LanguageChanged = 'language-changed';
    case LanguageChangeDetected = 'language-change-detected';
    case ModelOutput = 'model-output';
    case PhoneCallControl = 'phone-call-control';
    case SpeechUpdate = 'speech-update';
    case StatusUpdate = 'status-update';
    case Transcript = 'transcript';
    case TranscriptTranscriptTypeFinal = 'transcript[transcriptType="final"]';
    case ToolCalls = 'tool-calls';
    case TransferDestinationRequest = 'transfer-destination-request';
    case HandoffDestinationRequest = 'handoff-destination-request';
    case TransferUpdate = 'transfer-update';
    case UserInterrupted = 'user-interrupted';
    case VoiceInput = 'voice-input';
    case ChatCreated = 'chat.created';
    case ChatDeleted = 'chat.deleted';
    case SessionCreated = 'session.created';
    case SessionUpdated = 'session.updated';
    case SessionDeleted = 'session.deleted';
    case CallDeleted = 'call.deleted';
    case CallDeleteFailed = 'call.delete.failed';
}
