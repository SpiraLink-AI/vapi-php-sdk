<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class HandoffDestinationAssistant extends JsonSerializableType
{
    /**
     * @var ?HandoffDestinationAssistantContextEngineeringPlan $contextEngineeringPlan This is the plan for manipulating the message context before handing off the call to the next assistant.
     */
    #[JsonProperty('contextEngineeringPlan')]
    public ?HandoffDestinationAssistantContextEngineeringPlan $contextEngineeringPlan;

    /**
     * @var ?string $assistantName This is the assistant to transfer the call to. You must provide either assistantName or assistantId.
     */
    #[JsonProperty('assistantName')]
    public ?string $assistantName;

    /**
     * @var ?string $assistantId This is the assistant id to transfer the call to. You must provide either assistantName or assistantId.
     */
    #[JsonProperty('assistantId')]
    public ?string $assistantId;

    /**
     * @var ?CreateAssistantDto $assistant This is a transient assistant to transfer the call to. You may provide a transient assistant in the response  `handoff-destination-request` in a dynamic handoff.
     */
    #[JsonProperty('assistant')]
    public ?CreateAssistantDto $assistant;

    /**
     * @var ?VariableExtractionPlan $variableExtractionPlan This is the variable extraction plan for the handoff tool.
     */
    #[JsonProperty('variableExtractionPlan')]
    public ?VariableExtractionPlan $variableExtractionPlan;

    /**
     * @var ?string $description This is the description of the destination, used by the AI to choose when and how to transfer the call.
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @param array{
     *   contextEngineeringPlan?: ?HandoffDestinationAssistantContextEngineeringPlan,
     *   assistantName?: ?string,
     *   assistantId?: ?string,
     *   assistant?: ?CreateAssistantDto,
     *   variableExtractionPlan?: ?VariableExtractionPlan,
     *   description?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->contextEngineeringPlan = $values['contextEngineeringPlan'] ?? null;
        $this->assistantName = $values['assistantName'] ?? null;
        $this->assistantId = $values['assistantId'] ?? null;
        $this->assistant = $values['assistant'] ?? null;
        $this->variableExtractionPlan = $values['variableExtractionPlan'] ?? null;
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
