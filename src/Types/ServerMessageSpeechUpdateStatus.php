<?php declare(strict_types=1);

namespace Vapi\Types;

enum ServerMessageSpeechUpdateStatus: string
{
    case Started = 'started';
    case Stopped = 'stopped';
}
