<?php declare(strict_types=1);

namespace Vapi\Types;

enum MessageTargetRole: string
{
    case User = 'user';
    case Assistant = 'assistant';
}
