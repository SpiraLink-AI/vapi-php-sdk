<?php declare(strict_types=1);

namespace Vapi\Sessions\Requests;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;
use Vapi\Core\Types\Union;
use Vapi\Sessions\Types\UpdateSessionDtoStatus;
use Vapi\Types\AssistantMessage;
use Vapi\Types\DeveloperMessage;
use Vapi\Types\SystemMessage;
use Vapi\Types\ToolMessage;
use Vapi\Types\UserMessage;

final class UpdateSessionDto extends JsonSerializableType
{
    /**
     * @var ?string $name This is the new name for the session. Maximum length is 40 characters.
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?value-of<UpdateSessionDtoStatus> $status This is the new status for the session.
     */
    #[JsonProperty('status')]
    public ?string $status;

    /**
     * @var ?float $expirationSeconds Session expiration time in seconds. Defaults to 24 hours (86400 seconds) if not set.
     */
    #[JsonProperty('expirationSeconds')]
    public ?float $expirationSeconds;

    /**
     * @var ?array<(
     *    SystemMessage
     *   |UserMessage
     *   |AssistantMessage
     *   |ToolMessage
     *   |DeveloperMessage
     * )> $messages This is the updated array of chat messages.
     */
    #[JsonProperty('messages'), ArrayType([new Union(SystemMessage::class, UserMessage::class, AssistantMessage::class, ToolMessage::class, DeveloperMessage::class)])]
    public ?array $messages;

    /**
     * @param array{
     *   name?: ?string,
     *   status?: ?value-of<UpdateSessionDtoStatus>,
     *   expirationSeconds?: ?float,
     *   messages?: ?array<(
     *    SystemMessage
     *   |UserMessage
     *   |AssistantMessage
     *   |ToolMessage
     *   |DeveloperMessage
     * )>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->name = $values['name'] ?? null;
        $this->status = $values['status'] ?? null;
        $this->expirationSeconds = $values['expirationSeconds'] ?? null;
        $this->messages = $values['messages'] ?? null;
    }
}
