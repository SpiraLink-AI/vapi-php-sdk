<?php declare(strict_types=1);

namespace Vapi\Types;

enum ToolMessageCompleteRole: string
{
    case Assistant = 'assistant';
    case System = 'system';
}
