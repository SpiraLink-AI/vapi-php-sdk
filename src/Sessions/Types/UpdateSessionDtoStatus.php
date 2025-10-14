<?php declare(strict_types=1);

namespace Vapi\Sessions\Types;

enum UpdateSessionDtoStatus: string
{
    case Active = 'active';
    case Completed = 'completed';
}
