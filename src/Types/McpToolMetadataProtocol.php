<?php declare(strict_types=1);

namespace Vapi\Types;

enum McpToolMetadataProtocol: string
{
    case Sse = 'sse';
    case Shttp = 'shttp';
}
