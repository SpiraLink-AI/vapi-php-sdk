<?php declare(strict_types=1);

namespace Vapi\Types;

enum SpeechmaticsTranscriberNumeralStyle: string
{
    case Written = 'written';
    case Spoken = 'spoken';
}
