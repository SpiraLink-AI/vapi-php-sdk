<?php declare(strict_types=1);

namespace Vapi\Campaigns\Requests;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Types\SchedulePlan;

final class UpdateCampaignDto extends JsonSerializableType
{
    /**
     * @var ?string $name This is the name of the campaign. This is just for your own reference.
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * This is the assistant ID that will be used for the campaign calls.
     * Can only be updated if campaign is not in progress or has ended.
     *
     * @var ?string $assistantId
     */
    #[JsonProperty('assistantId')]
    public ?string $assistantId;

    /**
     * This is the workflow ID that will be used for the campaign calls.
     * Can only be updated if campaign is not in progress or has ended.
     *
     * @var ?string $workflowId
     */
    #[JsonProperty('workflowId')]
    public ?string $workflowId;

    /**
     * This is the phone number ID that will be used for the campaign calls.
     * Can only be updated if campaign is not in progress or has ended.
     *
     * @var ?string $phoneNumberId
     */
    #[JsonProperty('phoneNumberId')]
    public ?string $phoneNumberId;

    /**
     * This is the schedule plan for the campaign.
     * Can only be updated if campaign is not in progress or has ended.
     *
     * @var ?SchedulePlan $schedulePlan
     */
    #[JsonProperty('schedulePlan')]
    public ?SchedulePlan $schedulePlan;

    /**
     * This is the status of the campaign.
     * Can only be updated to 'ended' if you want to end the campaign.
     * When set to 'ended', it will delete all scheduled calls. Calls in progress will be allowed to complete.
     *
     * @var ?'ended' $status
     */
    #[JsonProperty('status')]
    public ?string $status;

    /**
     * @param array{
     *   name?: ?string,
     *   assistantId?: ?string,
     *   workflowId?: ?string,
     *   phoneNumberId?: ?string,
     *   schedulePlan?: ?SchedulePlan,
     *   status?: ?'ended',
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->name = $values['name'] ?? null;
        $this->assistantId = $values['assistantId'] ?? null;
        $this->workflowId = $values['workflowId'] ?? null;
        $this->phoneNumberId = $values['phoneNumberId'] ?? null;
        $this->schedulePlan = $values['schedulePlan'] ?? null;
        $this->status = $values['status'] ?? null;
    }
}
