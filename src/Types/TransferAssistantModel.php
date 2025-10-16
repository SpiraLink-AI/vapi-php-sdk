<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class TransferAssistantModel extends JsonSerializableType
{
    /**
     * @var value-of<TransferAssistantModelProvider> $provider The model provider for the transfer assistant
     */
    #[JsonProperty('provider')]
    public string $provider;

    /**
     * @var string $model The model name - must be compatible with the selected provider
     */
    #[JsonProperty('model')]
    public string $model;

    /**
     * These are the messages used to configure the transfer assistant.
     *
     * @default: ```
     * [
     *   {
     *     role: 'system',
     *     content: 'You are a transfer assistant designed to facilitate call transfers. Your core responsibility is to manage the transfer process efficiently.\n\n## Core Responsibility\n- Facilitate the transfer process by using transferSuccessful or transferCancel tools appropriately\n\n## When to Respond\n- Answer questions about the transfer process or provide summaries when specifically asked by the operator\n- Respond to direct questions about the current transfer situation\n\n## What to Avoid\n- Do not discuss topics unrelated to the transfer\n- Do not engage in general conversation\n- Keep all interactions focused on facilitating the transfer\n\n## Transfer Tools\n- Use transferSuccessful when the transfer should proceed\n- Use transferCancel when the transfer cannot be completed\n\nStay focused on your core responsibility of facilitating transfers.'
     *   }
     * ]```
     *
     * **Default Behavior:** If you don't provide any messages or don't include a system message as the first message, the default system message above will be automatically added.
     *
     * **Override Default:** To replace the default system message, provide your own system message as the first message in the array.
     *
     * **Add Context:** You can provide additional messages (user, assistant, etc.) to add context while keeping the default system message, or combine them with your custom system message.
     *
     * @var ?array<mixed> $messages
     */
    #[JsonProperty('messages'), ArrayType(['mixed'])]
    public ?array $messages;

    /**
     * Tools available to the transfer assistant during warm-transfer-experimental.
     *
     * **Default Behavior:** The transfer assistant will ALWAYS have both `transferSuccessful` and `transferCancel` tools automatically added, regardless of what you provide here.
     *
     * **Default Tools:**
     * - `transferSuccessful`: "Call this function to confirm the transfer is successful and connect the customer. Use this when you detect a human has answered and is ready to take the call."
     * - `transferCancel`: "Call this function to cancel the transfer when no human answers or transfer should not proceed. Use this when you detect voicemail, busy signal, or no answer."
     *
     * **Customization:** You can override the default tools by providing `transferSuccessful` and/or `transferCancel` tools with custom `function` or `messages` configurations.
     *
     * **Additional Tools:** You can also provide other tools, but the two transfer tools will always be present and available to the assistant.
     *
     * @var ?array<mixed> $tools
     */
    #[JsonProperty('tools'), ArrayType(['mixed'])]
    public ?array $tools;

    /**
     * @param array{
     *   provider: value-of<TransferAssistantModelProvider>,
     *   model: string,
     *   messages?: ?array<mixed>,
     *   tools?: ?array<mixed>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->provider = $values['provider'];
        $this->model = $values['model'];
        $this->messages = $values['messages'] ?? null;
        $this->tools = $values['tools'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
