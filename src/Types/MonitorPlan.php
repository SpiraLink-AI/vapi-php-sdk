<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class MonitorPlan extends JsonSerializableType
{
    /**
     * This determines whether the assistant's calls allow live listening. Defaults to true.
     *
     * Fetch `call.monitor.listenUrl` to get the live listening URL.
     *
     * @default true
     *
     * @var ?bool $listenEnabled
     */
    #[JsonProperty('listenEnabled')]
    public ?bool $listenEnabled;

    /**
     * This enables authentication on the `call.monitor.listenUrl`.
     *
     * If `listenAuthenticationEnabled` is `true`, the `call.monitor.listenUrl` will require an `Authorization: Bearer <vapi-public-api-key>` header.
     *
     * @default false
     *
     * @var ?bool $listenAuthenticationEnabled
     */
    #[JsonProperty('listenAuthenticationEnabled')]
    public ?bool $listenAuthenticationEnabled;

    /**
     * This determines whether the assistant's calls allow live control. Defaults to true.
     *
     * Fetch `call.monitor.controlUrl` to get the live control URL.
     *
     * To use, send any control message via a POST request to `call.monitor.controlUrl`. Here are the types of controls supported: https://docs.vapi.ai/api-reference/messages/client-inbound-message
     *
     * @default true
     *
     * @var ?bool $controlEnabled
     */
    #[JsonProperty('controlEnabled')]
    public ?bool $controlEnabled;

    /**
     * This enables authentication on the `call.monitor.controlUrl`.
     *
     * If `controlAuthenticationEnabled` is `true`, the `call.monitor.controlUrl` will require an `Authorization: Bearer <vapi-public-api-key>` header.
     *
     * @default false
     *
     * @var ?bool $controlAuthenticationEnabled
     */
    #[JsonProperty('controlAuthenticationEnabled')]
    public ?bool $controlAuthenticationEnabled;

    /**
     * @param array{
     *   listenEnabled?: ?bool,
     *   listenAuthenticationEnabled?: ?bool,
     *   controlEnabled?: ?bool,
     *   controlAuthenticationEnabled?: ?bool,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->listenEnabled = $values['listenEnabled'] ?? null;
        $this->listenAuthenticationEnabled = $values['listenAuthenticationEnabled'] ?? null;
        $this->controlEnabled = $values['controlEnabled'] ?? null;
        $this->controlAuthenticationEnabled = $values['controlAuthenticationEnabled'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
