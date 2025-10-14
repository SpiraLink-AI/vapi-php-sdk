<?php declare(strict_types=1);

namespace Vapi\Types;

use DateTime;
use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;
use Vapi\Core\Types\Date;

final class DtmfTool extends JsonSerializableType
{
    /**
     * These are the messages that will be spoken to the user as the tool is running.
     *
     * For some tools, this is auto-filled based on special fields like `tool.destinations`. For others like the function tool, these can be custom configured.
     *
     * @var ?array<DtmfToolMessagesItem> $messages
     */
    #[JsonProperty('messages'), ArrayType([DtmfToolMessagesItem::class])]
    public ?array $messages;

    /**
     * @var string $id This is the unique identifier for the tool.
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $orgId This is the unique identifier for the organization that this tool belongs to.
     */
    #[JsonProperty('orgId')]
    public string $orgId;

    /**
     * @var DateTime $createdAt This is the ISO 8601 date-time string of when the tool was created.
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $createdAt;

    /**
     * @var DateTime $updatedAt This is the ISO 8601 date-time string of when the tool was last updated.
     */
    #[JsonProperty('updatedAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $updatedAt;

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
     * @param array{
     *   id: string,
     *   orgId: string,
     *   createdAt: DateTime,
     *   updatedAt: DateTime,
     *   messages?: ?array<DtmfToolMessagesItem>,
     *   rejectionPlan?: ?ToolRejectionPlan,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->messages = $values['messages'] ?? null;
        $this->id = $values['id'];
        $this->orgId = $values['orgId'];
        $this->createdAt = $values['createdAt'];
        $this->updatedAt = $values['updatedAt'];
        $this->rejectionPlan = $values['rejectionPlan'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
