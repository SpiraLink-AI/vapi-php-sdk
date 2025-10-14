<?php declare(strict_types=1);

namespace Vapi\Types;

enum ServerMessageSpeechUpdateRole: string
{
    case Assistant = 'assistant';
    case User = 'user';
}
