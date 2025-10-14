<?php declare(strict_types=1);

namespace Vapi\Types;

enum ClientMessageTranscriptRole: string
{
    case Assistant = 'assistant';
    case User = 'user';
}
