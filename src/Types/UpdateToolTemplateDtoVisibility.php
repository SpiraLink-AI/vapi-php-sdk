<?php declare(strict_types=1);

namespace Vapi\Types;

enum UpdateToolTemplateDtoVisibility: string
{
    case Public_ = 'public';
    case Private_ = 'private';
}
