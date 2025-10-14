<?php declare(strict_types=1);

namespace Vapi\Types;

enum SyncVoiceLibraryDtoProvidersItem: string
{
    case Vapi = 'vapi';
    case ElevenLabs = '11labs';
    case Azure = 'azure';
    case Cartesia = 'cartesia';
    case CustomVoice = 'custom-voice';
    case Deepgram = 'deepgram';
    case Hume = 'hume';
    case Lmnt = 'lmnt';
    case Neuphonic = 'neuphonic';
    case Openai = 'openai';
    case Playht = 'playht';
    case RimeAi = 'rime-ai';
    case SmallestAi = 'smallest-ai';
    case Tavus = 'tavus';
    case Sesame = 'sesame';
    case Inworld = 'inworld';
    case Minimax = 'minimax';
}
