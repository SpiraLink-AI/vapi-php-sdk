<?php declare(strict_types=1);

namespace Vapi\Types;

enum CreateOrgDtoChannel: string
{
    case Default_ = 'default';
    case Weekly = 'weekly';
}
