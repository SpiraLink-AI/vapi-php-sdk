<?php declare(strict_types=1);

namespace Vapi\Types;

enum SubscriptionStatus: string
{
    case Active = 'active';
    case Frozen = 'frozen';
}
