<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class OpenAiMessage extends JsonSerializableType
{
    /**
     * @var ?string $content
     */
    #[JsonProperty('content')]
    public ?string $content;

    /**
     * @var value-of<OpenAiMessageRole> $role
     */
    #[JsonProperty('role')]
    public string $role;

    /**
     * @param array{
     *   role: value-of<OpenAiMessageRole>,
     *   content?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->content = $values['content'] ?? null;
        $this->role = $values['role'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
