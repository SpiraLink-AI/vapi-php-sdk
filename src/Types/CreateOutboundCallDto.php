<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class CreateOutboundCallDto extends JsonSerializableType
{
    /**
     * This is used to issue batch calls to multiple customers.
     *
     * Only relevant for `outboundPhoneCall`. To call a single customer, use `customer` instead.
     *
     * @var ?array<CreateCustomerDto> $customers
     */
    #[JsonProperty('customers'), ArrayType([CreateCustomerDto::class])]
    public ?array $customers;

    /**
     * @var ?string $name This is the name of the call. This is just for your own reference.
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?SchedulePlan $schedulePlan This is the schedule plan of the call.
     */
    #[JsonProperty('schedulePlan')]
    public ?SchedulePlan $schedulePlan;

    /**
     * @var ?array<string, mixed> $transport This is the transport of the call.
     */
    #[JsonProperty('transport'), ArrayType(['string' => 'mixed'])]
    public ?array $transport;

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
     * This is the phone number that will be used for the call. To use a transient number, use `phoneNumber` instead.
     *
     * Only relevant for `outboundPhoneCall` and `inboundPhoneCall` type.
     *
     * @var ?string $phoneNumberId
     */
    #[JsonProperty('phoneNumberId')]
    public ?string $phoneNumberId;

    /**
     * This is the phone number that will be used for the call. To use an existing number, use `phoneNumberId` instead.
     *
     * Only relevant for `outboundPhoneCall` and `inboundPhoneCall` type.
     *
     * @var ?ImportTwilioPhoneNumberDto $phoneNumber
     */
    #[JsonProperty('phoneNumber')]
    public ?ImportTwilioPhoneNumberDto $phoneNumber;

    /**
     * This is the customer that will be called. To call a transient customer , use `customer` instead.
     *
     * Only relevant for `outboundPhoneCall` and `inboundPhoneCall` type.
     *
     * @var ?string $customerId
     */
    #[JsonProperty('customerId')]
    public ?string $customerId;

    /**
     * This is the customer that will be called. To call an existing customer, use `customerId` instead.
     *
     * Only relevant for `outboundPhoneCall` and `inboundPhoneCall` type.
     *
     * @var ?CreateCustomerDto $customer
     */
    #[JsonProperty('customer')]
    public ?CreateCustomerDto $customer;

    /**
     * @param array{
     *   customers?: ?array<CreateCustomerDto>,
     *   name?: ?string,
     *   schedulePlan?: ?SchedulePlan,
     *   transport?: ?array<string, mixed>,
     *   assistantId?: ?string,
     *   assistant?: ?CreateAssistantDto,
     *   assistantOverrides?: ?AssistantOverrides,
     *   squadId?: ?string,
     *   squad?: ?CreateSquadDto,
     *   workflowId?: ?string,
     *   workflow?: ?CreateWorkflowDto,
     *   workflowOverrides?: ?WorkflowOverrides,
     *   phoneNumberId?: ?string,
     *   phoneNumber?: ?ImportTwilioPhoneNumberDto,
     *   customerId?: ?string,
     *   customer?: ?CreateCustomerDto,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->customers = $values['customers'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->schedulePlan = $values['schedulePlan'] ?? null;
        $this->transport = $values['transport'] ?? null;
        $this->assistantId = $values['assistantId'] ?? null;
        $this->assistant = $values['assistant'] ?? null;
        $this->assistantOverrides = $values['assistantOverrides'] ?? null;
        $this->squadId = $values['squadId'] ?? null;
        $this->squad = $values['squad'] ?? null;
        $this->workflowId = $values['workflowId'] ?? null;
        $this->workflow = $values['workflow'] ?? null;
        $this->workflowOverrides = $values['workflowOverrides'] ?? null;
        $this->phoneNumberId = $values['phoneNumberId'] ?? null;
        $this->phoneNumber = $values['phoneNumber'] ?? null;
        $this->customerId = $values['customerId'] ?? null;
        $this->customer = $values['customer'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
