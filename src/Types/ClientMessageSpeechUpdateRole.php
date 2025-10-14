<?php declare(strict_types=1);

namespace Vapi\Types;

enum ClientMessageSpeechUpdateRole: string
{
    case Assistant = 'assistant';
    case User = 'user';
}
