<?php declare(strict_types=1);

namespace Vapi\Campaigns\Requests;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;
use Vapi\Types\CreateCustomerDto;
use Vapi\Types\SchedulePlan;

final class CreateCampaignDto extends JsonSerializableType
{
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
     * @param array{
     *   name: string,
     *   phoneNumberId: string,
     *   customers: array<CreateCustomerDto>,
     *   assistantId?: ?string,
     *   workflowId?: ?string,
     *   schedulePlan?: ?SchedulePlan,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->assistantId = $values['assistantId'] ?? null;
        $this->workflowId = $values['workflowId'] ?? null;
        $this->phoneNumberId = $values['phoneNumberId'];
        $this->schedulePlan = $values['schedulePlan'] ?? null;
        $this->customers = $values['customers'];
    }
}
