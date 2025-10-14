<?php declare(strict_types=1);

namespace Vapi\Types;

enum XaiModelModel: string
{
    case GrokBeta = 'grok-beta';
    case Grok2 = 'grok-2';
    case Grok3 = 'grok-3';
    case Grok4FastReasoning = 'grok-4-fast-reasoning';
    case Grok4FastNonReasoning = 'grok-4-fast-non-reasoning';
}
