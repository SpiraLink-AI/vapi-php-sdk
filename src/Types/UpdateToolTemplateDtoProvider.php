<?php declare(strict_types=1);

namespace Vapi\Types;

enum UpdateToolTemplateDtoProvider: string
{
    case Make = 'make';
    case Gohighlevel = 'gohighlevel';
    case Function_ = 'function';
}
