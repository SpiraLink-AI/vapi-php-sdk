<?php declare(strict_types=1);

namespace Vapi\Types;

enum AzureOpenAiCredentialModelsItem: string
{
    case Gpt5 = 'gpt-5';
    case Gpt5Mini = 'gpt-5-mini';
    case Gpt5Nano = 'gpt-5-nano';
    case Gpt4120250414 = 'gpt-4.1-2025-04-14';
    case Gpt41Mini20250414 = 'gpt-4.1-mini-2025-04-14';
    case Gpt41Nano20250414 = 'gpt-4.1-nano-2025-04-14';
    case Gpt4O20241120 = 'gpt-4o-2024-11-20';
    case Gpt4O20240806 = 'gpt-4o-2024-08-06';
    case Gpt4O20240513 = 'gpt-4o-2024-05-13';
    case Gpt4OMini20240718 = 'gpt-4o-mini-2024-07-18';
    case Gpt4Turbo20240409 = 'gpt-4-turbo-2024-04-09';
    case Gpt40125Preview = 'gpt-4-0125-preview';
    case Gpt41106Preview = 'gpt-4-1106-preview';
    case Gpt40613 = 'gpt-4-0613';
    case Gpt35Turbo0125 = 'gpt-35-turbo-0125';
    case Gpt35Turbo1106 = 'gpt-35-turbo-1106';
}
