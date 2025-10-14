<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class CustomEndpointingModelSmartEndpointingPlan extends JsonSerializableType
{
    /**
     * @var value-of<CustomEndpointingModelSmartEndpointingPlanProvider> $provider This is the provider for the smart endpointing plan. Use `custom-endpointing-model` for custom endpointing providers that are not natively supported.
     */
    #[JsonProperty('provider')]
    public string $provider;

    /**
     * This is where the endpointing request will be sent. If not provided, will be sent to `assistant.server`. If that does not exist either, will be sent to `org.server`.
     *
     * Request Example:
     *
     * POST https://{server.url}
     * Content-Type: application/json
     *
     * {
     *   "message": {
     *     "type": "call.endpointing.request",
     *     "messages": [
     *       {
     *         "role": "user",
     *         "message": "Hello, how are you?",
     *         "time": 1234567890,
     *         "secondsFromStart": 0
     *       }
     *     ],
     *     ...other metadata about the call...
     *   }
     * }
     *
     * Response Expected:
     * {
     *   "timeoutSeconds": 0.5
     * }
     *
     * The timeout is the number of seconds to wait before considering the user's speech as finished. The endpointing timeout is automatically reset each time a new transcript is received (and another `call.endpointing.request` is sent).
     *
     * @var ?Server $server
     */
    #[JsonProperty('server')]
    public ?Server $server;

    /**
     * @param array{
     *   provider: value-of<CustomEndpointingModelSmartEndpointingPlanProvider>,
     *   server?: ?Server,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->provider = $values['provider'];
        $this->server = $values['server'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
