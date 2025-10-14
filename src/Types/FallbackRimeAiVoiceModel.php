<?php declare(strict_types=1);

namespace Vapi\Types;

enum FallbackRimeAiVoiceModel: string
{
    case Arcana = 'arcana';
    case Mistv2 = 'mistv2';
    case Mist = 'mist';
}
