<?php declare(strict_types=1);

namespace Vapi\Core\Json;

use Attribute;

#[Attribute(Attribute::TARGET_PROPERTY)]
final readonly class JsonProperty
{
    public function __construct(public string $name) {}
}
