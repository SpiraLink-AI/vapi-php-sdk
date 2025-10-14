<?php declare(strict_types=1);

namespace Vapi\Types;

enum TransferAssistantModelProvider: string
{
    case Openai = 'openai';
    case Anthropic = 'anthropic';
    case Google = 'google';
    case CustomLlm = 'custom-llm';
}
