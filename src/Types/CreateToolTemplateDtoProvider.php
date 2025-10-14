<?php declare(strict_types=1);

namespace Vapi\Types;

enum CreateToolTemplateDtoProvider: string
{
    case Make = 'make';
    case Gohighlevel = 'gohighlevel';
    case Function_ = 'function';
}
