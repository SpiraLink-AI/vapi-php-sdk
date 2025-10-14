<?php declare(strict_types=1);

namespace Vapi\Types;

enum KnowledgeBaseModel: string
{
    case Gemini25Pro = 'gemini-2.5-pro';
    case Gemini25Flash = 'gemini-2.5-flash';
    case Gemini25FlashLite = 'gemini-2.5-flash-lite';
    case Gemini20FlashThinkingExp = 'gemini-2.0-flash-thinking-exp';
    case Gemini20ProExp0205 = 'gemini-2.0-pro-exp-02-05';
    case Gemini20Flash = 'gemini-2.0-flash';
    case Gemini20FlashLite = 'gemini-2.0-flash-lite';
    case Gemini20FlashExp = 'gemini-2.0-flash-exp';
    case Gemini20FlashRealtimeExp = 'gemini-2.0-flash-realtime-exp';
    case Gemini15Flash = 'gemini-1.5-flash';
    case Gemini15Flash002 = 'gemini-1.5-flash-002';
    case Gemini15Pro = 'gemini-1.5-pro';
    case Gemini15Pro002 = 'gemini-1.5-pro-002';
    case Gemini10Pro = 'gemini-1.0-pro';
}
