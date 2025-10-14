<?php declare(strict_types=1);

namespace Vapi\Types;

enum ServerMessageStatusUpdateStatus: string
{
    case Scheduled = 'scheduled';
    case Queued = 'queued';
    case Ringing = 'ringing';
    case InProgress = 'in-progress';
    case Forwarding = 'forwarding';
    case Ended = 'ended';
    case NotFound = 'not-found';
    case DeletionFailed = 'deletion-failed';
}
