<?php declare(strict_types=1);

namespace Vapi\Types;

enum ArtifactPlanRecordingFormat: string
{
    case WavL16 = 'wav;l16';
    case Mp3 = 'mp3';
}
