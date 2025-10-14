<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class HandoffDestinationDynamic extends JsonSerializableType
{
    /**
     * This is where Vapi will send the handoff-destination-request webhook in a dynamic handoff.
     *
     * The order of precedence is:
     *
     * 1. tool.server.url
     * 2. assistant.server.url
     * 3. phoneNumber.server.url
     * 4. org.server.url
     *
     * @var ?Server $server
     */
    #[JsonProperty('server')]
    public ?Server $server;

    /**
     * @var ?string $description This is the description of the destination, used by the AI to choose when and how to transfer the call.
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @param array{
     *   server?: ?Server,
     *   description?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->server = $values['server'] ?? null;
        $this->description = $values['description'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
