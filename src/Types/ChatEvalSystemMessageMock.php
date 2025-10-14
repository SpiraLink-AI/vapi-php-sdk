<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class ChatEvalSystemMessageMock extends JsonSerializableType
{
    /**
     * This is the content of the system message that would have been added in the middle of the conversation.
     * Do not include the assistant prompt as a part of this message. It will automatically be fetched during runtime.
     *
     * @var string $content
     */
    #[JsonProperty('content')]
    public string $content;

    /**
     * @param array{
     *   content: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->content = $values['content'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
