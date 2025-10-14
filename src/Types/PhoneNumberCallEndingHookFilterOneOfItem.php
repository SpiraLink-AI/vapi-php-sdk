<?php declare(strict_types=1);

namespace Vapi\Types;

enum PhoneNumberCallEndingHookFilterOneOfItem: string
{
    case AssistantRequestFailed = 'assistant-request-failed';
    case AssistantRequestReturnedError = 'assistant-request-returned-error';
    case AssistantRequestReturnedUnspeakableError = 'assistant-request-returned-unspeakable-error';
    case AssistantRequestReturnedInvalidAssistant = 'assistant-request-returned-invalid-assistant';
    case AssistantRequestReturnedNoAssistant = 'assistant-request-returned-no-assistant';
    case AssistantRequestReturnedForwardingPhoneNumber = 'assistant-request-returned-forwarding-phone-number';
}
