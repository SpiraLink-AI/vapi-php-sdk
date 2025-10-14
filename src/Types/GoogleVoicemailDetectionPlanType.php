<?php declare(strict_types=1);

namespace Vapi\Types;

enum GoogleVoicemailDetectionPlanType: string
{
    case Audio = 'audio';
    case Transcript = 'transcript';
}
