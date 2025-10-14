<?php declare(strict_types=1);

namespace Vapi\Types;

enum ResponseOutputMessageStatus: string
{
    case InProgress = 'in_progress';
    case Completed = 'completed';
    case Incomplete = 'incomplete';
}
