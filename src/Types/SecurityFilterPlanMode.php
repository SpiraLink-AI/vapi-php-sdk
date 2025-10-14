<?php declare(strict_types=1);

namespace Vapi\Types;

enum SecurityFilterPlanMode: string
{
    case Sanitize = 'sanitize';
    case Reject = 'reject';
    case Replace = 'replace';
}
