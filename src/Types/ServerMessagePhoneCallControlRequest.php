<?php declare(strict_types=1);

namespace Vapi\Types;

enum ServerMessagePhoneCallControlRequest: string
{
    case Forward = 'forward';
    case HangUp = 'hang-up';
}
