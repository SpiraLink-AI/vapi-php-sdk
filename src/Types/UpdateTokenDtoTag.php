<?php declare(strict_types=1);

namespace Vapi\Types;

enum UpdateTokenDtoTag: string
{
    case Private_ = 'private';
    case Public_ = 'public';
}
