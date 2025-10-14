<?php declare(strict_types=1);

namespace Vapi\Types;

enum JsonSchemaFormat: string
{
    case DateTime = 'date-time';
    case Time = 'time';
    case Date = 'date';
    case Duration = 'duration';
    case Email = 'email';
    case Hostname = 'hostname';
    case Ipv4 = 'ipv4';
    case Ipv6 = 'ipv6';
    case Uuid = 'uuid';
}
