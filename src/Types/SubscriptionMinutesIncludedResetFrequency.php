<?php declare(strict_types=1);

namespace Vapi\Types;

enum SubscriptionMinutesIncludedResetFrequency: string
{
    case Monthly = 'monthly';
    case Annually = 'annually';
}
