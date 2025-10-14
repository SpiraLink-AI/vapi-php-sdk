<?php declare(strict_types=1);

namespace Vapi\Types;

use DateTime;
use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;
use Vapi\Core\Types\Date;

final class Campaign extends JsonSerializableType
{
    /**
     * @var value-of<CampaignStatus> $status This is the status of the campaign.
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var ?value-of<CampaignEndedReason> $endedReason This is the explanation for how the campaign ended.
     */
    #[JsonProperty('endedReason')]
    public ?string $endedReason;

    /**
     * @var string $name This is the name of the campaign. This is just for your own reference.
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?string $assistantId This is the assistant ID that will be used for the campaign calls. Note: Either assistantId or workflowId can be used, but not both.
     */
    #[JsonProperty('assistantId')]
    public ?string $assistantId;

    /**
     * @var ?string $workflowId This is the workflow ID that will be used for the campaign calls. Note: Either assistantId or workflowId can be used, but not both.
     */
    #[JsonProperty('workflowId')]
    public ?string $workflowId;

    /**
     * @var string $phoneNumberId This is the phone number ID that will be used for the campaign calls.
     */
    #[JsonProperty('phoneNumberId')]
    public string $phoneNumberId;

    /**
     * @var ?SchedulePlan $schedulePlan This is the schedule plan for the campaign.
     */
    #[JsonProperty('schedulePlan')]
    public ?SchedulePlan $schedulePlan;

    /**
     * @var array<CreateCustomerDto> $customers These are the customers that will be called in the campaign.
     */
    #[JsonProperty('customers'), ArrayType([CreateCustomerDto::class])]
    public array $customers;

    /**
     * @var string $id This is the unique identifier for the campaign.
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $orgId This is the unique identifier for the org that this campaign belongs to.
     */
    #[JsonProperty('orgId')]
    public string $orgId;

    /**
     * @var DateTime $createdAt This is the ISO 8601 date-time string of when the campaign was created.
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $createdAt;

    /**
     * @var DateTime $updatedAt This is the ISO 8601 date-time string of when the campaign was last updated.
     */
    #[JsonProperty('updatedAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $updatedAt;

    /**
     * @var array<string, mixed> $calls This is a map of call IDs to campaign call details.
     */
    #[JsonProperty('calls'), ArrayType(['string' => 'mixed'])]
    public array $calls;

    /**
     * @var float $callsCounterScheduled This is the number of calls that have been scheduled.
     */
    #[JsonProperty('callsCounterScheduled')]
    public float $callsCounterScheduled;

    /**
     * @var float $callsCounterQueued This is the number of calls that have been queued.
     */
    #[JsonProperty('callsCounterQueued')]
    public float $callsCounterQueued;

    /**
     * @var float $callsCounterInProgress This is the number of calls that have been in progress.
     */
    #[JsonProperty('callsCounterInProgress')]
    public float $callsCounterInProgress;

    /**
     * @var float $callsCounterEndedVoicemail This is the number of calls whose ended reason is 'voicemail'.
     */
    #[JsonProperty('callsCounterEndedVoicemail')]
    public float $callsCounterEndedVoicemail;

    /**
     * @var float $callsCounterEnded This is the number of calls that have ended.
     */
    #[JsonProperty('callsCounterEnded')]
    public float $callsCounterEnded;

    /**
     * @param array{
     *   status: value-of<CampaignStatus>,
     *   name: string,
     *   phoneNumberId: string,
     *   customers: array<CreateCustomerDto>,
     *   id: string,
     *   orgId: string,
     *   createdAt: DateTime,
     *   updatedAt: DateTime,
     *   calls: array<string, mixed>,
     *   callsCounterScheduled: float,
     *   callsCounterQueued: float,
     *   callsCounterInProgress: float,
     *   callsCounterEndedVoicemail: float,
     *   callsCounterEnded: float,
     *   endedReason?: ?value-of<CampaignEndedReason>,
     *   assistantId?: ?string,
     *   workflowId?: ?string,
     *   schedulePlan?: ?SchedulePlan,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->status = $values['status'];
        $this->endedReason = $values['endedReason'] ?? null;
        $this->name = $values['name'];
        $this->assistantId = $values['assistantId'] ?? null;
        $this->workflowId = $values['workflowId'] ?? null;
        $this->phoneNumberId = $values['phoneNumberId'];
        $this->schedulePlan = $values['schedulePlan'] ?? null;
        $this->customers = $values['customers'];
        $this->id = $values['id'];
        $this->orgId = $values['orgId'];
        $this->createdAt = $values['createdAt'];
        $this->updatedAt = $values['updatedAt'];
        $this->calls = $values['calls'];
        $this->callsCounterScheduled = $values['callsCounterScheduled'];
        $this->callsCounterQueued = $values['callsCounterQueued'];
        $this->callsCounterInProgress = $values['callsCounterInProgress'];
        $this->callsCounterEndedVoicemail = $values['callsCounterEndedVoicemail'];
        $this->callsCounterEnded = $values['callsCounterEnded'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
