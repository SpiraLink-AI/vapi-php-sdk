<?php declare(strict_types=1);

namespace Vapi\Types;

enum ServerMessageTranscriptType: string
{
    case Transcript = 'transcript';
    case TranscriptTranscriptTypeFinal = 'transcript[transcriptType="final"]';
}
