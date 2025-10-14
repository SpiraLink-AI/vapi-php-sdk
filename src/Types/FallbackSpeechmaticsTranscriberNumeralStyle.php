<?php declare(strict_types=1);

namespace Vapi\Types;

enum FallbackSpeechmaticsTranscriberNumeralStyle: string
{
    case Written = 'written';
    case Spoken = 'spoken';
}
