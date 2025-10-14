<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class CreateWebCallDto extends JsonSerializableType
{
    /**
     * This is the assistant ID that will be used for the call. To use a transient assistant, use `assistant` instead.
     *
     * To start a call with:
     * - Assistant, use `assistantId` or `assistant`
     * - Squad, use `squadId` or `squad`
     * - Workflow, use `workflowId` or `workflow`
     *
     * @var ?string $assistantId
     */
    #[JsonProperty('assistantId')]
    public ?string $assistantId;

    /**
     * This is the assistant that will be used for the call. To use an existing assistant, use `assistantId` instead.
     *
     * To start a call with:
     * - Assistant, use `assistant`
     * - Squad, use `squad`
     * - Workflow, use `workflow`
     *
     * @var ?CreateAssistantDto $assistant
     */
    #[JsonProperty('assistant')]
    public ?CreateAssistantDto $assistant;

    /**
     * @var ?AssistantOverrides $assistantOverrides These are the overrides for the `assistant` or `assistantId`'s settings and template variables.
     */
    #[JsonProperty('assistantOverrides')]
    public ?AssistantOverrides $assistantOverrides;

    /**
     * This is the squad that will be used for the call. To use a transient squad, use `squad` instead.
     *
     * To start a call with:
     * - Assistant, use `assistant` or `assistantId`
     * - Squad, use `squad` or `squadId`
     * - Workflow, use `workflow` or `workflowId`
     *
     * @var ?string $squadId
     */
    #[JsonProperty('squadId')]
    public ?string $squadId;

    /**
     * This is a squad that will be used for the call. To use an existing squad, use `squadId` instead.
     *
     * To start a call with:
     * - Assistant, use `assistant` or `assistantId`
     * - Squad, use `squad` or `squadId`
     * - Workflow, use `workflow` or `workflowId`
     *
     * @var ?CreateSquadDto $squad
     */
    #[JsonProperty('squad')]
    public ?CreateSquadDto $squad;

    /**
     * This is the workflow that will be used for the call. To use a transient workflow, use `workflow` instead.
     *
     * To start a call with:
     * - Assistant, use `assistant` or `assistantId`
     * - Squad, use `squad` or `squadId`
     * - Workflow, use `workflow` or `workflowId`
     *
     * @var ?string $workflowId
     */
    #[JsonProperty('workflowId')]
    public ?string $workflowId;

    /**
     * This is a workflow that will be used for the call. To use an existing workflow, use `workflowId` instead.
     *
     * To start a call with:
     * - Assistant, use `assistant` or `assistantId`
     * - Squad, use `squad` or `squadId`
     * - Workflow, use `workflow` or `workflowId`
     *
     * @var ?CreateWorkflowDto $workflow
     */
    #[JsonProperty('workflow')]
    public ?CreateWorkflowDto $workflow;

    /**
     * @var ?WorkflowOverrides $workflowOverrides These are the overrides for the `workflow` or `workflowId`'s settings and template variables.
     */
    #[JsonProperty('workflowOverrides')]
    public ?WorkflowOverrides $workflowOverrides;

    /**
     * @param array{
     *   assistantId?: ?string,
     *   assistant?: ?CreateAssistantDto,
     *   assistantOverrides?: ?AssistantOverrides,
     *   squadId?: ?string,
     *   squad?: ?CreateSquadDto,
     *   workflowId?: ?string,
     *   workflow?: ?CreateWorkflowDto,
     *   workflowOverrides?: ?WorkflowOverrides,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->assistantId = $values['assistantId'] ?? null;
        $this->assistant = $values['assistant'] ?? null;
        $this->assistantOverrides = $values['assistantOverrides'] ?? null;
        $this->squadId = $values['squadId'] ?? null;
        $this->squad = $values['squad'] ?? null;
        $this->workflowId = $values['workflowId'] ?? null;
        $this->workflow = $values['workflow'] ?? null;
        $this->workflowOverrides = $values['workflowOverrides'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
