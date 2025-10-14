<?php declare(strict_types=1);

namespace Vapi\Types;

enum ServerMessageTranscriptRole: string
{
    case Assistant = 'assistant';
    case User = 'user';
}
