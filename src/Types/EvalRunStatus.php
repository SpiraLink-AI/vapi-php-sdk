<?php declare(strict_types=1);

namespace Vapi\Types;

enum EvalRunStatus: string
{
    case Running = 'running';
    case Ended = 'ended';
    case Queued = 'queued';
}
