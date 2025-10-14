<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class ChatEvalUserMessageMock extends JsonSerializableType
{
    /**
     * This is the content of the user message.
     * This is the message that the user would have sent.
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
