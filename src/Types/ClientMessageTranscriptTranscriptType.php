<?php declare(strict_types=1);

namespace Vapi\Types;

enum ClientMessageTranscriptTranscriptType: string
{
    case Partial = 'partial';
    case Final_ = 'final';
}
