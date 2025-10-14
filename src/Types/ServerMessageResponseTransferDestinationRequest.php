<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class ServerMessageResponseTransferDestinationRequest extends JsonSerializableType
{
    /**
     * @var ?ServerMessageResponseTransferDestinationRequestDestination $destination This is the destination you'd like the call to be transferred to.
     */
    #[JsonProperty('destination')]
    public ?ServerMessageResponseTransferDestinationRequestDestination $destination;

    /**
     * @var ?ServerMessageResponseTransferDestinationRequestMessage $message This is the message that will be spoken to the user as the tool is running.
     */
    #[JsonProperty('message')]
    public ?ServerMessageResponseTransferDestinationRequestMessage $message;

    /**
     * @var ?string $error This is the error message if the transfer should not be made.
     */
    #[JsonProperty('error')]
    public ?string $error;

    /**
     * @param array{
     *   destination?: ?ServerMessageResponseTransferDestinationRequestDestination,
     *   message?: ?ServerMessageResponseTransferDestinationRequestMessage,
     *   error?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->destination = $values['destination'] ?? null;
        $this->message = $values['message'] ?? null;
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
