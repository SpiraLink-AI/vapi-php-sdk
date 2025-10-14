<?php declare(strict_types=1);

namespace Vapi\Core\Types;

use DateTimeInterface;

final readonly class Constant
{
    public const string DateFormat = 'Y-m-d';
    public const string DateDeserializationFormat = "!" . self::DateFormat;
    public const string DateTimeFormat = DateTimeInterface::RFC3339;
}
