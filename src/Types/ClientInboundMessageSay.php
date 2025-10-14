<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class ClientInboundMessageSay extends JsonSerializableType
{
    /**
     * This is the flag for whether the message should replace existing assistant speech.
     *
     * @default false
     *
     * @var ?bool $interruptAssistantEnabled
     */
    #[JsonProperty('interruptAssistantEnabled')]
    public ?bool $interruptAssistantEnabled;

    /**
     * @var ?string $content This is the content to say.
     */
    #[JsonProperty('content')]
    public ?string $content;

    /**
     * @var ?bool $endCallAfterSpoken This is the flag to end call after content is spoken.
     */
    #[JsonProperty('endCallAfterSpoken')]
    public ?bool $endCallAfterSpoken;

    /**
     * @var ?bool $interruptionsEnabled This is the flag for whether the message is interruptible by the user.
     */
    #[JsonProperty('interruptionsEnabled')]
    public ?bool $interruptionsEnabled;

    /**
     * @param array{
     *   interruptAssistantEnabled?: ?bool,
     *   content?: ?string,
     *   endCallAfterSpoken?: ?bool,
     *   interruptionsEnabled?: ?bool,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->interruptAssistantEnabled = $values['interruptAssistantEnabled'] ?? null;
        $this->content = $values['content'] ?? null;
        $this->endCallAfterSpoken = $values['endCallAfterSpoken'] ?? null;
        $this->interruptionsEnabled = $values['interruptionsEnabled'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
