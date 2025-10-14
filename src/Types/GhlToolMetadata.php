<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class GhlToolMetadata extends JsonSerializableType
{
    /**
     * @var ?string $workflowId
     */
    #[JsonProperty('workflowId')]
    public ?string $workflowId;

    /**
     * @var ?string $locationId
     */
    #[JsonProperty('locationId')]
    public ?string $locationId;

    /**
     * @param array{
     *   workflowId?: ?string,
     *   locationId?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->workflowId = $values['workflowId'] ?? null;
        $this->locationId = $values['locationId'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
