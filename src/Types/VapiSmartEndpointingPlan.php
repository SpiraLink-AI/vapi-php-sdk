<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class VapiSmartEndpointingPlan extends JsonSerializableType
{
    /**
     * @var value-of<VapiSmartEndpointingPlanProvider> $provider This is the provider for the smart endpointing plan.
     */
    #[JsonProperty('provider')]
    public string $provider;

    /**
     * @param array{
     *   provider: value-of<VapiSmartEndpointingPlanProvider>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->provider = $values['provider'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
