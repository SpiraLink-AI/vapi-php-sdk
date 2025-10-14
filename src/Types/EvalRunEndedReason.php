<?php declare(strict_types=1);

namespace Vapi\Types;

enum EvalRunEndedReason: string
{
    case MockConversationDone = 'mockConversation.done';
    case Error = 'error';
    case Timeout = 'timeout';
    case Cancelled = 'cancelled';
    case Aborted = 'aborted';
}
