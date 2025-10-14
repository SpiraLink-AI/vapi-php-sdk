<?php declare(strict_types=1);

namespace Vapi\Types;

use DateTime;
use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;
use Vapi\Core\Types\Date;
use Vapi\Core\Types\Union;

final class Call extends JsonSerializableType
{
    /**
     * @var ?value-of<CallType> $type This is the type of call.
     */
    #[JsonProperty('type')]
    public ?string $type;

    /**
     * @var ?array<CallCostsItem> $costs These are the costs of individual components of the call in USD.
     */
    #[JsonProperty('costs'), ArrayType([CallCostsItem::class])]
    public ?array $costs;

    /**
     * @var ?array<(
     *    UserMessage
     *   |SystemMessage
     *   |BotMessage
     *   |ToolCallMessage
     *   |ToolCallResultMessage
     * )> $messages
     */
    #[JsonProperty('messages'), ArrayType([new Union(UserMessage::class, SystemMessage::class, BotMessage::class, ToolCallMessage::class, ToolCallResultMessage::class)])]
    public ?array $messages;

    /**
     * This is the provider of the call.
     *
     * Only relevant for `outboundPhoneCall` and `inboundPhoneCall` type.
     *
     * @var ?value-of<CallPhoneCallProvider> $phoneCallProvider
     */
    #[JsonProperty('phoneCallProvider')]
    public ?string $phoneCallProvider;

    /**
     * This is the transport of the phone call.
     *
     * Only relevant for `outboundPhoneCall` and `inboundPhoneCall` type.
     *
     * @var ?value-of<CallPhoneCallTransport> $phoneCallTransport
     */
    #[JsonProperty('phoneCallTransport')]
    public ?string $phoneCallTransport;

    /**
     * @var ?value-of<CallStatus> $status This is the status of the call.
     */
    #[JsonProperty('status')]
    public ?string $status;

    /**
     * @var ?value-of<CallEndedReason> $endedReason This is the explanation for how the call ended.
     */
    #[JsonProperty('endedReason')]
    public ?string $endedReason;

    /**
     * @var ?CallDestination $destination This is the destination where the call ended up being transferred to. If the call was not transferred, this will be empty.
     */
    #[JsonProperty('destination')]
    public ?CallDestination $destination;

    /**
     * @var string $id This is the unique identifier for the call.
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $orgId This is the unique identifier for the org that this call belongs to.
     */
    #[JsonProperty('orgId')]
    public string $orgId;

    /**
     * @var DateTime $createdAt This is the ISO 8601 date-time string of when the call was created.
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $createdAt;

    /**
     * @var DateTime $updatedAt This is the ISO 8601 date-time string of when the call was last updated.
     */
    #[JsonProperty('updatedAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $updatedAt;

    /**
     * @var ?DateTime $startedAt This is the ISO 8601 date-time string of when the call was started.
     */
    #[JsonProperty('startedAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $startedAt;

    /**
     * @var ?DateTime $endedAt This is the ISO 8601 date-time string of when the call was ended.
     */
    #[JsonProperty('endedAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $endedAt;

    /**
     * @var ?float $cost This is the cost of the call in USD.
     */
    #[JsonProperty('cost')]
    public ?float $cost;

    /**
     * @var ?CostBreakdown $costBreakdown This is the cost of the call in USD.
     */
    #[JsonProperty('costBreakdown')]
    public ?CostBreakdown $costBreakdown;

    /**
     * @var ?ArtifactPlan $artifactPlan This is a copy of assistant artifact plan. This isn't actually stored on the call but rather just returned in POST /call/web to enable artifact creation client side.
     */
    #[JsonProperty('artifactPlan')]
    public ?ArtifactPlan $artifactPlan;

    /**
     * @var ?Analysis $analysis This is the analysis of the call. Configure in `assistant.analysisPlan`.
     */
    #[JsonProperty('analysis')]
    public ?Analysis $analysis;

    /**
     * @var ?Monitor $monitor This is to real-time monitor the call. Configure in `assistant.monitorPlan`.
     */
    #[JsonProperty('monitor')]
    public ?Monitor $monitor;

    /**
     * @var ?Artifact $artifact These are the artifacts created from the call. Configure in `assistant.artifactPlan`.
     */
    #[JsonProperty('artifact')]
    public ?Artifact $artifact;

    /**
     * @var ?Compliance $compliance This is the compliance of the call. Configure in `assistant.compliancePlan`.
     */
    #[JsonProperty('compliance')]
    public ?Compliance $compliance;

    /**
     * The ID of the call as provided by the phone number service. callSid in Twilio. conversationUuid in Vonage. callControlId in Telnyx.
     *
     * Only relevant for `outboundPhoneCall` and `inboundPhoneCall` type.
     *
     * @var ?string $phoneCallProviderId
     */
    #[JsonProperty('phoneCallProviderId')]
    public ?string $phoneCallProviderId;

    /**
     * @var ?string $campaignId This is the campaign ID that the call belongs to.
     */
    #[JsonProperty('campaignId')]
    public ?string $campaignId;

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
     * @param array{
     *   id: string,
     *   orgId: string,
     *   createdAt: DateTime,
     *   updatedAt: DateTime,
     *   type?: ?value-of<CallType>,
     *   costs?: ?array<CallCostsItem>,
     *   messages?: ?array<(
     *    UserMessage
     *   |SystemMessage
     *   |BotMessage
     *   |ToolCallMessage
     *   |ToolCallResultMessage
     * )>,
     *   phoneCallProvider?: ?value-of<CallPhoneCallProvider>,
     *   phoneCallTransport?: ?value-of<CallPhoneCallTransport>,
     *   status?: ?value-of<CallStatus>,
     *   endedReason?: ?value-of<CallEndedReason>,
     *   destination?: ?CallDestination,
     *   startedAt?: ?DateTime,
     *   endedAt?: ?DateTime,
     *   cost?: ?float,
     *   costBreakdown?: ?CostBreakdown,
     *   artifactPlan?: ?ArtifactPlan,
     *   analysis?: ?Analysis,
     *   monitor?: ?Monitor,
     *   artifact?: ?Artifact,
     *   compliance?: ?Compliance,
     *   phoneCallProviderId?: ?string,
     *   campaignId?: ?string,
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
     *   name?: ?string,
     *   schedulePlan?: ?SchedulePlan,
     *   transport?: ?array<string, mixed>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->type = $values['type'] ?? null;
        $this->costs = $values['costs'] ?? null;
        $this->messages = $values['messages'] ?? null;
        $this->phoneCallProvider = $values['phoneCallProvider'] ?? null;
        $this->phoneCallTransport = $values['phoneCallTransport'] ?? null;
        $this->status = $values['status'] ?? null;
        $this->endedReason = $values['endedReason'] ?? null;
        $this->destination = $values['destination'] ?? null;
        $this->id = $values['id'];
        $this->orgId = $values['orgId'];
        $this->createdAt = $values['createdAt'];
        $this->updatedAt = $values['updatedAt'];
        $this->startedAt = $values['startedAt'] ?? null;
        $this->endedAt = $values['endedAt'] ?? null;
        $this->cost = $values['cost'] ?? null;
        $this->costBreakdown = $values['costBreakdown'] ?? null;
        $this->artifactPlan = $values['artifactPlan'] ?? null;
        $this->analysis = $values['analysis'] ?? null;
        $this->monitor = $values['monitor'] ?? null;
        $this->artifact = $values['artifact'] ?? null;
        $this->compliance = $values['compliance'] ?? null;
        $this->phoneCallProviderId = $values['phoneCallProviderId'] ?? null;
        $this->campaignId = $values['campaignId'] ?? null;
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
        $this->name = $values['name'] ?? null;
        $this->schedulePlan = $values['schedulePlan'] ?? null;
        $this->transport = $values['transport'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
