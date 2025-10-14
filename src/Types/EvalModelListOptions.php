<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class EvalModelListOptions extends JsonSerializableType
{
    /**
     * @var value-of<EvalModelListOptionsProvider> $provider This is the provider of the model.
     */
    #[JsonProperty('provider')]
    public string $provider;

    /**
     * @param array{
     *   provider: value-of<EvalModelListOptionsProvider>,
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
