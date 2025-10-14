<?php declare(strict_types=1);

namespace Vapi\Types;

enum FallbackSpeechmaticsTranscriberOperatingPoint: string
{
    case Standard = 'standard';
    case Enhanced = 'enhanced';
}
