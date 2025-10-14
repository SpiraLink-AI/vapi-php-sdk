<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\Union;

final class TransferDestinationAssistant extends JsonSerializableType
{
    /**
     * This is spoken to the customer before connecting them to the destination.
     *
     * Usage:
     * - If this is not provided and transfer tool messages is not provided, default is "Transferring the call now".
     * - If set to "", nothing is spoken. This is useful when you want to silently transfer. This is especially useful when transferring between assistants in a squad. In this scenario, you likely also want to set `assistant.firstMessageMode=assistant-speaks-first-with-model-generated-message` for the destination assistant.
     *
     * This accepts a string or a ToolMessageStart class. Latter is useful if you want to specify multiple messages for different languages through the `contents` field.
     *
     * @var (
     *    string
     *   |CustomMessage
     * )|null $message
     */
    #[JsonProperty('message'), Union('string', CustomMessage::class, 'null')]
    public string|CustomMessage|null $message;

    /**
     * This is the mode to use for the transfer. Defaults to `rolling-history`.
     *
     * - `rolling-history`: This is the default mode. It keeps the entire conversation history and appends the new assistant's system message on transfer.
     *
     *   Example:
     *
     *   Pre-transfer:
     *     system: assistant1 system message
     *     assistant: assistant1 first message
     *     user: hey, good morning
     *     assistant: how can i help?
     *     user: i need help with my account
     *     assistant: (destination.message)
     *
     *   Post-transfer:
     *     system: assistant1 system message
     *     assistant: assistant1 first message
     *     user: hey, good morning
     *     assistant: how can i help?
     *     user: i need help with my account
     *     assistant: (destination.message)
     *     system: assistant2 system message
     *     assistant: assistant2 first message (or model generated if firstMessageMode is set to `assistant-speaks-first-with-model-generated-message`)
     *
     * - `swap-system-message-in-history`: This replaces the original system message with the new assistant's system message on transfer.
     *
     *   Example:
     *
     *   Pre-transfer:
     *     system: assistant1 system message
     *     assistant: assistant1 first message
     *     user: hey, good morning
     *     assistant: how can i help?
     *     user: i need help with my account
     *     assistant: (destination.message)
     *
     *   Post-transfer:
     *     system: assistant2 system message
     *     assistant: assistant1 first message
     *     user: hey, good morning
     *     assistant: how can i help?
     *     user: i need help with my account
     *     assistant: (destination.message)
     *     assistant: assistant2 first message (or model generated if firstMessageMode is set to `assistant-speaks-first-with-model-generated-message`)
     *
     * - `delete-history`: This deletes the entire conversation history on transfer.
     *
     *   Example:
     *
     *   Pre-transfer:
     *     system: assistant1 system message
     *     assistant: assistant1 first message
     *     user: hey, good morning
     *     assistant: how can i help?
     *     user: i need help with my account
     *     assistant: (destination.message)
     *
     *   Post-transfer:
     *     system: assistant2 system message
     *     assistant: assistant2 first message
     *     user: Yes, please
     *     assistant: how can i help?
     *     user: i need help with my account
     *
     * - `swap-system-message-in-history-and-remove-transfer-tool-messages`: This replaces the original system message with the new assistant's system message on transfer and removes transfer tool messages from conversation history sent to the LLM.
     *
     *   Example:
     *
     *   Pre-transfer:
     *     system: assistant1 system message
     *     assistant: assistant1 first message
     *     user: hey, good morning
     *     assistant: how can i help?
     *     user: i need help with my account
     *     transfer-tool
     *     transfer-tool-result
     *     assistant: (destination.message)
     *
     *   Post-transfer:
     *     system: assistant2 system message
     *     assistant: assistant1 first message
     *     user: hey, good morning
     *     assistant: how can i help?
     *     user: i need help with my account
     *     assistant: (destination.message)
     *     assistant: assistant2 first message (or model generated if firstMessageMode is set to `assistant-speaks-first-with-model-generated-message`)
     *
     * @default 'rolling-history'
     *
     * @var ?value-of<TransferDestinationAssistantTransferMode> $transferMode
     */
    #[JsonProperty('transferMode')]
    public ?string $transferMode;

    /**
     * @var string $assistantName This is the assistant to transfer the call to.
     */
    #[JsonProperty('assistantName')]
    public string $assistantName;

    /**
     * @var ?string $description This is the description of the destination, used by the AI to choose when and how to transfer the call.
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @param array{
     *   assistantName: string,
     *   message?: (
     *    string
     *   |CustomMessage
     * )|null,
     *   transferMode?: ?value-of<TransferDestinationAssistantTransferMode>,
     *   description?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->message = $values['message'] ?? null;
        $this->transferMode = $values['transferMode'] ?? null;
        $this->assistantName = $values['assistantName'];
        $this->description = $values['description'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
