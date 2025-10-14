<?php declare(strict_types=1);

namespace Vapi\Types;

enum ServerMessageTranscriptTranscriptType: string
{
    case Partial = 'partial';
    case Final_ = 'final';
}
