<?php declare(strict_types=1);

namespace Vapi\Types;

enum VapiPhoneNumberStatus: string
{
    case Active = 'active';
    case Activating = 'activating';
    case Blocked = 'blocked';
}
