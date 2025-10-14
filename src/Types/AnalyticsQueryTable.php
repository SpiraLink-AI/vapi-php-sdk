<?php declare(strict_types=1);

namespace Vapi\Types;

enum AnalyticsQueryTable: string
{
    case Call = 'call';
    case Subscription = 'subscription';
}
