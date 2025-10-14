<?php declare(strict_types=1);

namespace Vapi\Types;

enum JsonSchemaType: string
{
    case String = 'string';
    case Number = 'number';
    case Integer = 'integer';
    case Boolean = 'boolean';
    case Array = 'array';
    case Object = 'object';
}
