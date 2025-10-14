<?php declare(strict_types=1);

namespace Vapi\Types;

enum EvalModelListOptionsProvider: string
{
    case Openai = 'openai';
    case Anthropic = 'anthropic';
    case Google = 'google';
    case Groq = 'groq';
    case CustomLlm = 'custom-llm';
}
