<?php declare(strict_types=1);

namespace Vapi\Types;

enum MinimaxVoiceModel: string
{
    case Speech02Hd = 'speech-02-hd';
    case Speech02Turbo = 'speech-02-turbo';
    case Speech25TurboPreview = 'speech-2.5-turbo-preview';
}
