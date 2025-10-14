<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class UpdateTextEditorToolDto extends JsonSerializableType
{
    /**
     * These are the messages that will be spoken to the user as the tool is running.
     *
     * For some tools, this is auto-filled based on special fields like `tool.destinations`. For others like the function tool, these can be custom configured.
     *
     * @var ?array<UpdateTextEditorToolDtoMessagesItem> $messages
     */
    #[JsonProperty('messages'), ArrayType([UpdateTextEditorToolDtoMessagesItem::class])]
    public ?array $messages;

    /**
     * @var ?'text_editor_20241022' $subType The sub type of tool.
     */
    #[JsonProperty('subType')]
    public ?string $subType;

    /**
     *
     *   This is the server where a `tool-calls` webhook will be sent.
     *
     *   Notes:
     *   - Webhook is sent to this server when a tool call is made.
     *   - Webhook contains the call, assistant, and phone number objects.
     *   - Webhook contains the variables set on the assistant.
     *   - Webhook is sent to the first available URL in this order: {{tool.server.url}}, {{assistant.server.url}}, {{phoneNumber.server.url}}, {{org.server.url}}.
     *   - Webhook expects a response with tool call result.
     *
     * @var ?Server $server
     */
    #[JsonProperty('server')]
    public ?Server $server;

    /**
     * This is the plan to reject a tool call based on the conversation state.
     *
     * // Example 1: Reject endCall if user didn't say goodbye
     * ```json
     * {
     *   conditions: [{
     *     type: 'regex',
     *     regex: '(?i)\\b(bye|goodbye|farewell|see you later|take care)\\b',
     *     target: { position: -1, role: 'user' },
     *     negate: true  // Reject if pattern does NOT match
     *   }]
     * }
     * ```
     *
     * // Example 2: Reject transfer if user is actually asking a question
     * ```json
     * {
     *   conditions: [{
     *     type: 'regex',
     *     regex: '\\?',
     *     target: { position: -1, role: 'user' }
     *   }]
     * }
     * ```
     *
     * // Example 3: Reject transfer if user didn't mention transfer recently
     * ```json
     * {
     *   conditions: [{
     *     type: 'liquid',
     *     liquid: `{% assign recentMessages = messages | last: 5 %}
     * {% assign userMessages = recentMessages | where: 'role', 'user' %}
     * {% assign mentioned = false %}
     * {% for msg in userMessages %}
     *   {% if msg.content contains 'transfer' or msg.content contains 'connect' or msg.content contains 'speak to' %}
     *     {% assign mentioned = true %}
     *     {% break %}
     *   {% endif %}
     * {% endfor %}
     * {% if mentioned %}
     *   false
     * {% else %}
     *   true
     * {% endif %}`
     *   }]
     * }
     * ```
     *
     * // Example 4: Reject endCall if the bot is looping and trying to exit
     * ```json
     * {
     *   conditions: [{
     *     type: 'liquid',
     *     liquid: `{% assign recentMessages = messages | last: 6 %}
     * {% assign userMessages = recentMessages | where: 'role', 'user' | reverse %}
     * {% if userMessages.size < 3 %}
     *   false
     * {% else %}
     *   {% assign msg1 = userMessages[0].content | downcase %}
     *   {% assign msg2 = userMessages[1].content | downcase %}
     *   {% assign msg3 = userMessages[2].content | downcase %}
     *   {% comment %} Check for repetitive messages {% endcomment %}
     *   {% if msg1 == msg2 or msg1 == msg3 or msg2 == msg3 %}
     *     true
     *   {% comment %} Check for common loop phrases {% endcomment %}
     *   {% elsif msg1 contains 'cool thanks' or msg2 contains 'cool thanks' or msg3 contains 'cool thanks' %}
     *     true
     *   {% elsif msg1 contains 'okay thanks' or msg2 contains 'okay thanks' or msg3 contains 'okay thanks' %}
     *     true
     *   {% elsif msg1 contains 'got it' or msg2 contains 'got it' or msg3 contains 'got it' %}
     *     true
     *   {% else %}
     *     false
     *   {% endif %}
     * {% endif %}`
     *   }]
     * }
     * ```
     *
     * @var ?ToolRejectionPlan $rejectionPlan
     */
    #[JsonProperty('rejectionPlan')]
    public ?ToolRejectionPlan $rejectionPlan;

    /**
     * @var ?'str_replace_editor' $name The name of the tool, fixed to 'str_replace_editor'
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @param array{
     *   messages?: ?array<UpdateTextEditorToolDtoMessagesItem>,
     *   subType?: ?'text_editor_20241022',
     *   server?: ?Server,
     *   rejectionPlan?: ?ToolRejectionPlan,
     *   name?: ?'str_replace_editor',
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->messages = $values['messages'] ?? null;
        $this->subType = $values['subType'] ?? null;
        $this->server = $values['server'] ?? null;
        $this->rejectionPlan = $values['rejectionPlan'] ?? null;
        $this->name = $values['name'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
