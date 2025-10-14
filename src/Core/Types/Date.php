<?php declare(strict_types=1);

namespace Vapi\Core\Types;

use Attribute;

#[Attribute(Attribute::TARGET_PROPERTY)]
final readonly class Date
{
    public const string TYPE_DATE = 'date';
    public const string TYPE_DATETIME = 'datetime';

    public function __construct(public string $type) {}
}
