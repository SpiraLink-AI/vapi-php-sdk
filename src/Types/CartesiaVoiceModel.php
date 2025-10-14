<?php declare(strict_types=1);

namespace Vapi\Types;

enum CartesiaVoiceModel: string
{
    case Sonic2 = 'sonic-2';
    case SonicEnglish = 'sonic-english';
    case SonicMultilingual = 'sonic-multilingual';
    case SonicPreview = 'sonic-preview';
    case Sonic = 'sonic';
}
