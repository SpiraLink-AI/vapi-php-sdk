<?php declare(strict_types=1);

namespace Vapi\Core\Types;

use Attribute;

#[Attribute(Attribute::TARGET_PROPERTY)]
final readonly class ArrayType
{
    /**
     * @param mixed[] $type Array in the form ['keyType' => 'valueType'] for maps, or ['valueType'] for lists
     */
    public function __construct(public array $type) {}
}
