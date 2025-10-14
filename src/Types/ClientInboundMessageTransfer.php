<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class ClientInboundMessageTransfer extends JsonSerializableType
{
    /**
     * @var ?ClientInboundMessageTransferDestination $destination This is the destination to transfer the call to.
     */
    #[JsonProperty('destination')]
    public ?ClientInboundMessageTransferDestination $destination;

    /**
     * @var ?string $content This is the content to say.
     */
    #[JsonProperty('content')]
    public ?string $content;

    /**
     * @param array{
     *   destination?: ?ClientInboundMessageTransferDestination,
     *   content?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->destination = $values['destination'] ?? null;
        $this->content = $values['content'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
