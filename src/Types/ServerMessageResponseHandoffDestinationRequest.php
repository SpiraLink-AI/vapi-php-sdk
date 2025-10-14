<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class ServerMessageResponseHandoffDestinationRequest extends JsonSerializableType
{
    /**
     * @var HandoffDestinationAssistant $destination This is the destination you'd like the call to be transferred to.
     */
    #[JsonProperty('destination')]
    public HandoffDestinationAssistant $destination;

    /**
     * @var ?string $error This is the error message if the handoff should not be made.
     */
    #[JsonProperty('error')]
    public ?string $error;

    /**
     * @param array{
     *   destination: HandoffDestinationAssistant,
     *   error?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->destination = $values['destination'];
        $this->error = $values['error'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
