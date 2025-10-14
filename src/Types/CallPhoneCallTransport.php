<?php declare(strict_types=1);

namespace Vapi\Types;

enum CallPhoneCallTransport: string
{
    case Sip = 'sip';
    case Pstn = 'pstn';
}
