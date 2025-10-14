<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class CreateOrgDto extends JsonSerializableType
{
    /**
     * When this is enabled, no logs, recordings, or transcriptions will be stored. At the end of the call, you will still receive an end-of-call-report message to store on your server. Defaults to false.
     * When HIPAA is enabled, only OpenAI/Custom LLM or Azure Providers will be available for LLM and Voice respectively.
     * This is due to the compliance requirements of HIPAA. Other providers may not meet these requirements.
     *
     * @var ?bool $hipaaEnabled
     */
    #[JsonProperty('hipaaEnabled')]
    public ?bool $hipaaEnabled;

    /**
     * @var ?string $subscriptionId This is the ID of the subscription the org belongs to.
     */
    #[JsonProperty('subscriptionId')]
    public ?string $subscriptionId;

    /**
     * @var ?string $name This is the name of the org. This is just for your own reference.
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?value-of<CreateOrgDtoChannel> $channel This is the channel of the org. There is the cluster the API traffic for the org will be directed.
     */
    #[JsonProperty('channel')]
    public ?string $channel;

    /**
     * @var ?float $billingLimit This is the monthly billing limit for the org. To go beyond $1000/mo, please contact us at support@vapi.ai.
     */
    #[JsonProperty('billingLimit')]
    public ?float $billingLimit;

    /**
     * This is where Vapi will send webhooks. You can find all webhooks available along with their shape in ServerMessage schema.
     *
     * The order of precedence is:
     *
     * 1. assistant.server
     * 2. phoneNumber.server
     * 3. org.server
     *
     * @var ?Server $server
     */
    #[JsonProperty('server')]
    public ?Server $server;

    /**
     * @var ?float $concurrencyLimit This is the concurrency limit for the org. This is the maximum number of calls that can be active at any given time. To go beyond 10, please contact us at support@vapi.ai.
     */
    #[JsonProperty('concurrencyLimit')]
    public ?float $concurrencyLimit;

    /**
     * Stores the information about the compliance plan enforced at the organization level. Currently pciEnabled is supported through this field.
     * When this is enabled, any logs, recordings, or transcriptions will be shipped to the customer endpoints if provided else lost.
     * At the end of the call, you will receive an end-of-call-report message to store on your server, if webhook is provided.
     * Defaults to false.
     * When PCI is enabled, only PCI-compliant Providers will be available for LLM, Voice and transcribers.
     * This is due to the compliance requirements of PCI. Other providers may not meet these requirements.
     *
     * @var ?CompliancePlan $compliancePlan
     */
    #[JsonProperty('compliancePlan')]
    public ?CompliancePlan $compliancePlan;

    /**
     * @param array{
     *   hipaaEnabled?: ?bool,
     *   subscriptionId?: ?string,
     *   name?: ?string,
     *   channel?: ?value-of<CreateOrgDtoChannel>,
     *   billingLimit?: ?float,
     *   server?: ?Server,
     *   concurrencyLimit?: ?float,
     *   compliancePlan?: ?CompliancePlan,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->hipaaEnabled = $values['hipaaEnabled'] ?? null;
        $this->subscriptionId = $values['subscriptionId'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->channel = $values['channel'] ?? null;
        $this->billingLimit = $values['billingLimit'] ?? null;
        $this->server = $values['server'] ?? null;
        $this->concurrencyLimit = $values['concurrencyLimit'] ?? null;
        $this->compliancePlan = $values['compliancePlan'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
