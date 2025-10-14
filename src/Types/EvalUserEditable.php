<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;
use Vapi\Core\Types\Union;

final class EvalUserEditable extends JsonSerializableType
{
    /**
     * This is the mock conversation that will be used to evaluate the flow of the conversation.
     *
     * Mock Messages are used to simulate the flow of the conversation
     *
     * Evaluation Messages are used as checkpoints in the flow where the model's response to previous conversation needs to be evaluated to check the content and tool calls
     *
     * @var array<(
     *    ChatEvalAssistantMessageMock
     *   |ChatEvalSystemMessageMock
     *   |ChatEvalToolResponseMessageMock
     *   |ChatEvalUserMessageMock
     *   |ChatEvalAssistantMessageEvaluation
     * )> $messages
     */
    #[JsonProperty('messages'), ArrayType([new Union(ChatEvalAssistantMessageMock::class, ChatEvalSystemMessageMock::class, ChatEvalToolResponseMessageMock::class, ChatEvalUserMessageMock::class, ChatEvalAssistantMessageEvaluation::class)])]
    public array $messages;

    /**
     * This is the name of the eval.
     * It helps identify what the eval is checking for.
     *
     * @var ?string $name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * This is the description of the eval.
     * This helps describe the eval and its purpose in detail. It will not be used to evaluate the flow of the conversation.
     *
     * @var ?string $description
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * This is the type of the eval.
     * Currently it is fixed to `chat.mockConversation`.
     *
     * @var 'chat.mockConversation' $type
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @param array{
     *   messages: array<(
     *    ChatEvalAssistantMessageMock
     *   |ChatEvalSystemMessageMock
     *   |ChatEvalToolResponseMessageMock
     *   |ChatEvalUserMessageMock
     *   |ChatEvalAssistantMessageEvaluation
     * )>,
     *   type: 'chat.mockConversation',
     *   name?: ?string,
     *   description?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->messages = $values['messages'];
        $this->name = $values['name'] ?? null;
        $this->description = $values['description'] ?? null;
        $this->type = $values['type'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
