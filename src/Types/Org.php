<?php declare(strict_types=1);

namespace Vapi\Types;

use DateTime;
use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\Date;

final class Org extends JsonSerializableType
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
     * @var ?Subscription $subscription
     */
    #[JsonProperty('subscription')]
    public ?Subscription $subscription;

    /**
     * @var ?string $subscriptionId This is the ID of the subscription the org belongs to.
     */
    #[JsonProperty('subscriptionId')]
    public ?string $subscriptionId;

    /**
     * @var string $id This is the unique identifier for the org.
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var DateTime $createdAt This is the ISO 8601 date-time string of when the org was created.
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $createdAt;

    /**
     * @var DateTime $updatedAt This is the ISO 8601 date-time string of when the org was last updated.
     */
    #[JsonProperty('updatedAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $updatedAt;

    /**
     * @var ?string $stripeSubscriptionId This is the subscription for the org.
     */
    #[JsonProperty('stripeSubscriptionId')]
    public ?string $stripeSubscriptionId;

    /**
     * @var ?string $stripeSubscriptionItemId This is the subscription's subscription item.
     */
    #[JsonProperty('stripeSubscriptionItemId')]
    public ?string $stripeSubscriptionItemId;

    /**
     * @var ?DateTime $stripeSubscriptionCurrentPeriodStart This is the subscription's current period start.
     */
    #[JsonProperty('stripeSubscriptionCurrentPeriodStart'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $stripeSubscriptionCurrentPeriodStart;

    /**
     * @var ?string $stripeSubscriptionStatus This is the subscription's status.
     */
    #[JsonProperty('stripeSubscriptionStatus')]
    public ?string $stripeSubscriptionStatus;

    /**
     * @var ?string $jwtSecret This is the secret key used for signing JWT tokens for the org.
     */
    #[JsonProperty('jwtSecret')]
    public ?string $jwtSecret;

    /**
     * @var ?float $minutesUsed This is the total number of call minutes used by this org across all time.
     */
    #[JsonProperty('minutesUsed')]
    public ?float $minutesUsed;

    /**
     * @var ?string $name This is the name of the org. This is just for your own reference.
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?value-of<OrgChannel> $channel This is the channel of the org. There is the cluster the API traffic for the org will be directed.
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
     *   id: string,
     *   createdAt: DateTime,
     *   updatedAt: DateTime,
     *   hipaaEnabled?: ?bool,
     *   subscription?: ?Subscription,
     *   subscriptionId?: ?string,
     *   stripeSubscriptionId?: ?string,
     *   stripeSubscriptionItemId?: ?string,
     *   stripeSubscriptionCurrentPeriodStart?: ?DateTime,
     *   stripeSubscriptionStatus?: ?string,
     *   jwtSecret?: ?string,
     *   minutesUsed?: ?float,
     *   name?: ?string,
     *   channel?: ?value-of<OrgChannel>,
     *   billingLimit?: ?float,
     *   server?: ?Server,
     *   concurrencyLimit?: ?float,
     *   compliancePlan?: ?CompliancePlan,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->hipaaEnabled = $values['hipaaEnabled'] ?? null;
        $this->subscription = $values['subscription'] ?? null;
        $this->subscriptionId = $values['subscriptionId'] ?? null;
        $this->id = $values['id'];
        $this->createdAt = $values['createdAt'];
        $this->updatedAt = $values['updatedAt'];
        $this->stripeSubscriptionId = $values['stripeSubscriptionId'] ?? null;
        $this->stripeSubscriptionItemId = $values['stripeSubscriptionItemId'] ?? null;
        $this->stripeSubscriptionCurrentPeriodStart = $values['stripeSubscriptionCurrentPeriodStart'] ?? null;
        $this->stripeSubscriptionStatus = $values['stripeSubscriptionStatus'] ?? null;
        $this->jwtSecret = $values['jwtSecret'] ?? null;
        $this->minutesUsed = $values['minutesUsed'] ?? null;
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
