<?php declare(strict_types=1);

namespace Vapi\Types;

enum AnthropicModelModel: string
{
    case Claude3Opus20240229 = 'claude-3-opus-20240229';
    case Claude3Sonnet20240229 = 'claude-3-sonnet-20240229';
    case Claude3Haiku20240307 = 'claude-3-haiku-20240307';
    case Claude35Sonnet20240620 = 'claude-3-5-sonnet-20240620';
    case Claude35Sonnet20241022 = 'claude-3-5-sonnet-20241022';
    case Claude35Haiku20241022 = 'claude-3-5-haiku-20241022';
    case Claude37Sonnet20250219 = 'claude-3-7-sonnet-20250219';
    case ClaudeOpus420250514 = 'claude-opus-4-20250514';
    case ClaudeSonnet420250514 = 'claude-sonnet-4-20250514';
    case ClaudeSonnet4520250929 = 'claude-sonnet-4-5-20250929';
}
