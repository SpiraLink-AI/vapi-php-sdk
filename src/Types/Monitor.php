<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class Monitor extends JsonSerializableType
{
    /**
     * @var ?string $listenUrl This is the URL where the assistant's calls can be listened to in real-time. To enable, set `assistant.monitorPlan.listenEnabled` to `true`.
     */
    #[JsonProperty('listenUrl')]
    public ?string $listenUrl;

    /**
     * @var ?string $controlUrl This is the URL where the assistant's calls can be controlled in real-time. To enable, set `assistant.monitorPlan.controlEnabled` to `true`.
     */
    #[JsonProperty('controlUrl')]
    public ?string $controlUrl;

    /**
     * @param array{
     *   listenUrl?: ?string,
     *   controlUrl?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->listenUrl = $values['listenUrl'] ?? null;
        $this->controlUrl = $values['controlUrl'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
