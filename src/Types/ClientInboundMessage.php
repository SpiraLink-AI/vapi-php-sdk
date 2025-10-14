<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class ClientInboundMessage extends JsonSerializableType
{
    /**
     * @var ClientInboundMessageMessage $message These are the messages that can be sent from client-side SDKs to control the call.
     */
    #[JsonProperty('message')]
    public ClientInboundMessageMessage $message;

    /**
     * @param array{
     *   message: ClientInboundMessageMessage,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->message = $values['message'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
