<?php declare(strict_types=1);

namespace Vapi\Types;

enum TokenTag: string
{
    case Private = 'private';
    case Public = 'public';
}
