<?php declare(strict_types=1);

namespace Vapi\Types;

enum ResponseObjectStatus: string
{
    case Completed = 'completed';
    case Failed = 'failed';
    case InProgress = 'in_progress';
    case Incomplete = 'incomplete';
}
