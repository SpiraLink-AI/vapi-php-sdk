<?php declare(strict_types=1);

namespace Vapi\Types;

enum CustomLlmModelMetadataSendMode: string
{
    case Off = 'off';
    case Variable = 'variable';
    case Destructured = 'destructured';
}
