<?php declare(strict_types=1);

namespace Vapi\Types;

enum SessionStatus: string
{
    case Active = 'active';
    case Completed = 'completed';
}
