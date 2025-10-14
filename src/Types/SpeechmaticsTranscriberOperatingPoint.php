<?php declare(strict_types=1);

namespace Vapi\Types;

enum SpeechmaticsTranscriberOperatingPoint: string
{
    case Standard = 'standard';
    case Enhanced = 'enhanced';
}
