<?php declare(strict_types=1);

namespace Vapi\Types;

enum UpdateApiRequestToolDtoMethod: string
{
    case Post = 'POST';
    case Get = 'GET';
    case Put = 'PUT';
    case Patch = 'PATCH';
    case Delete = 'DELETE';
}
