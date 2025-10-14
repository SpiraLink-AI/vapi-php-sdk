<?php declare(strict_types=1);

namespace Vapi\Types;

enum ClientMessageTranscriptType: string
{
    case Transcript = 'transcript';
    case TranscriptTranscriptTypeFinal = 'transcript[transcriptType="final"]';
}
