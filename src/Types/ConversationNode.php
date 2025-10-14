<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class ConversationNode extends JsonSerializableType
{
    /**
     * This is the model for the node.
     *
     * This overrides `workflow.model`.
     *
     * @var ?ConversationNodeModel $model
     */
    #[JsonProperty('model')]
    public ?ConversationNodeModel $model;

    /**
     * This is the transcriber for the node.
     *
     * This overrides `workflow.transcriber`.
     *
     * @var ?ConversationNodeTranscriber $transcriber
     */
    #[JsonProperty('transcriber')]
    public ?ConversationNodeTranscriber $transcriber;

    /**
     * This is the voice for the node.
     *
     * This overrides `workflow.voice`.
     *
     * @var ?ConversationNodeVoice $voice
     */
    #[JsonProperty('voice')]
    public ?ConversationNodeVoice $voice;

    /**
     * These are the tools that the conversation node can use during the call. To use existing tools, use `toolIds`.
     *
     * Both `tools` and `toolIds` can be used together.
     *
     * @var ?array<ConversationNodeToolsItem> $tools
     */
    #[JsonProperty('tools'), ArrayType([ConversationNodeToolsItem::class])]
    public ?array $tools;

    /**
     * These are the tools that the conversation node can use during the call. To use transient tools, use `tools`.
     *
     * Both `tools` and `toolIds` can be used together.
     *
     * @var ?array<string> $toolIds
     */
    #[JsonProperty('toolIds'), ArrayType(['string'])]
    public ?array $toolIds;

    /**
     * @var ?string $prompt
     */
    #[JsonProperty('prompt')]
    public ?string $prompt;

    /**
     * @var ?GlobalNodePlan $globalNodePlan This is the plan for the global node.
     */
    #[JsonProperty('globalNodePlan')]
    public ?GlobalNodePlan $globalNodePlan;

    /**
     * This is the plan that controls the variable extraction from the user's responses.
     *
     * Usage:
     * Use `schema` to specify what you want to extract from the user's responses.
     * ```json
     * {
     *   "schema": {
     *     "type": "object",
     *     "properties": {
     *       "user": {
     *         "type": "object",
     *         "properties": {
     *           "name": {
     *             "type": "string"
     *           },
     *           "age": {
     *             "type": "number"
     *           }
     *         }
     *       }
     *     }
     *   }
     * }
     * ```
     *
     * This will be extracted as `{{ user.name }}` and `{{ user.age }}` respectively.
     *
     * (Optional) Use `aliases` to create new variables.
     *
     * ```json
     * {
     *   "aliases": [
     *     {
     *       "key": "userAge",
     *       "value": "{{user.age}}"
     *     },
     *     {
     *       "key": "userName",
     *       "value": "{{user.name}}"
     *     }
     *   ]
     * }
     * ```
     *
     * This will be extracted as `{{ userAge }}` and `{{ userName }}` respectively.
     *
     * Note: The `schema` field is required for Conversation nodes if you want to extract variables from the user's responses. `aliases` is just a convenience.
     *
     * @var ?VariableExtractionPlan $variableExtractionPlan
     */
    #[JsonProperty('variableExtractionPlan')]
    public ?VariableExtractionPlan $variableExtractionPlan;

    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?bool $isStart This is whether or not the node is the start of the workflow.
     */
    #[JsonProperty('isStart')]
    public ?bool $isStart;

    /**
     * @var ?array<string, mixed> $metadata This is for metadata you want to store on the task.
     */
    #[JsonProperty('metadata'), ArrayType(['string' => 'mixed'])]
    public ?array $metadata;

    /**
     * @param array{
     *   name: string,
     *   model?: ?ConversationNodeModel,
     *   transcriber?: ?ConversationNodeTranscriber,
     *   voice?: ?ConversationNodeVoice,
     *   tools?: ?array<ConversationNodeToolsItem>,
     *   toolIds?: ?array<string>,
     *   prompt?: ?string,
     *   globalNodePlan?: ?GlobalNodePlan,
     *   variableExtractionPlan?: ?VariableExtractionPlan,
     *   isStart?: ?bool,
     *   metadata?: ?array<string, mixed>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->model = $values['model'] ?? null;
        $this->transcriber = $values['transcriber'] ?? null;
        $this->voice = $values['voice'] ?? null;
        $this->tools = $values['tools'] ?? null;
        $this->toolIds = $values['toolIds'] ?? null;
        $this->prompt = $values['prompt'] ?? null;
        $this->globalNodePlan = $values['globalNodePlan'] ?? null;
        $this->variableExtractionPlan = $values['variableExtractionPlan'] ?? null;
        $this->name = $values['name'];
        $this->isStart = $values['isStart'] ?? null;
        $this->metadata = $values['metadata'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
