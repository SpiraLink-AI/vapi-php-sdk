<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonSerializableType;

final class ContextEngineeringPlanNone extends JsonSerializableType
{
    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
