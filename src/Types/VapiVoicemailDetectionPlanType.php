<?php declare(strict_types=1);

namespace Vapi\Types;

enum VapiVoicemailDetectionPlanType: string
{
    case Audio = 'audio';
    case Transcript = 'transcript';
}
