<?php declare(strict_types=1);

namespace Vapi\Sessions\Types;

enum CreateSessionDtoStatus: string
{
    case Active = 'active';
    case Completed = 'completed';
}
