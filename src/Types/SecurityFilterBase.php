<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonSerializableType;

final class SecurityFilterBase extends JsonSerializableType
{
    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
