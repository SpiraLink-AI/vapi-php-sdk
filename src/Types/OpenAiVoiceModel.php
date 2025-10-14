<?php declare(strict_types=1);

namespace Vapi\Types;

enum OpenAiVoiceModel: string
{
    case Tts1 = 'tts-1';
    case Tts1Hd = 'tts-1-hd';
    case Gpt4OMiniTts = 'gpt-4o-mini-tts';
}
