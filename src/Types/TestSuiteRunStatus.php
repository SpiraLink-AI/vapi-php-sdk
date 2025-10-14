<?php declare(strict_types=1);

namespace Vapi\Types;

enum TestSuiteRunStatus: string
{
    case Queued = 'queued';
    case InProgress = 'in-progress';
    case Completed = 'completed';
    case Failed = 'failed';
}
