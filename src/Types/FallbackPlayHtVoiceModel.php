<?php declare(strict_types=1);

namespace Vapi\Types;

enum FallbackPlayHtVoiceModel: string
{
    case PlayHt20 = 'PlayHT2.0';
    case PlayHt20Turbo = 'PlayHT2.0-turbo';
    case Play30Mini = 'Play3.0-mini';
    case PlayDialog = 'PlayDialog';
}
