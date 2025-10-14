<?php declare(strict_types=1);

namespace Vapi\Types;

enum ElevenLabsVoiceModel: string
{
    case ElevenMultilingualV2 = 'eleven_multilingual_v2';
    case ElevenTurboV2 = 'eleven_turbo_v2';
    case ElevenTurboV25 = 'eleven_turbo_v2_5';
    case ElevenFlashV2 = 'eleven_flash_v2';
    case ElevenFlashV25 = 'eleven_flash_v2_5';
    case ElevenMonolingualV1 = 'eleven_monolingual_v1';
}
