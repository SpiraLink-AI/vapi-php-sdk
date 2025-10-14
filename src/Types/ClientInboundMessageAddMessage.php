<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class ClientInboundMessageAddMessage extends JsonSerializableType
{
    /**
     * @var OpenAiMessage $message This is the message to add to the conversation.
     */
    #[JsonProperty('message')]
    public OpenAiMessage $message;

    /**
     * This is the flag to trigger a response, or to insert the message into the conversation history silently. Defaults to `true`.
     *
     * Usage:
     * - Use `true` to trigger a response.
     * - Use `false` to insert the message into the conversation history silently.
     *
     * @default true
     *
     * @var ?bool $triggerResponseEnabled
     */
    #[JsonProperty('triggerResponseEnabled')]
    public ?bool $triggerResponseEnabled;

    /**
     * @param array{
     *   message: OpenAiMessage,
     *   triggerResponseEnabled?: ?bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->message = $values['message'];
        $this->triggerResponseEnabled = $values['triggerResponseEnabled'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
