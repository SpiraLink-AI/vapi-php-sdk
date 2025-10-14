<?php declare(strict_types=1);

namespace Vapi\Types;

enum OrgChannel: string
{
    case Default_ = 'default';
    case Weekly = 'weekly';
}
