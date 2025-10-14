<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class CreateChatStreamResponse extends JsonSerializableType
{
    /**
     * @var string $id This is the unique identifier for the streaming response.
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * This is the ID of the session that will be used for the chat.
     * Helps track conversation context across multiple messages.
     *
     * @var ?string $sessionId
     */
    #[JsonProperty('sessionId')]
    public ?string $sessionId;

    /**
     * This is the path to the content being updated.
     * Format: `chat.output[{contentIndex}].content` where contentIndex identifies the specific content item.
     *
     * @var string $path
     */
    #[JsonProperty('path')]
    public string $path;

    /**
     * @var string $delta This is the incremental content chunk being streamed.
     */
    #[JsonProperty('delta')]
    public string $delta;

    /**
     * @param array{
     *   id: string,
     *   path: string,
     *   delta: string,
     *   sessionId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->sessionId = $values['sessionId'] ?? null;
        $this->path = $values['path'];
        $this->delta = $values['delta'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
