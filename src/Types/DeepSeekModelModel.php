<?php declare(strict_types=1);

namespace Vapi\Types;

enum DeepSeekModelModel: string
{
    case DeepseekChat = 'deepseek-chat';
    case DeepseekReasoner = 'deepseek-reasoner';
}
