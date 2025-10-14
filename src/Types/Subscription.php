<?php declare(strict_types=1);

namespace Vapi\Types;

use DateTime;
use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;
use Vapi\Core\Types\Date;

final class Subscription extends JsonSerializableType
{
    /**
     * @var string $id This is the unique identifier for the subscription.
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var DateTime $createdAt This is the timestamp when the subscription was created.
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $createdAt;

    /**
     * @var DateTime $updatedAt This is the timestamp when the subscription was last updated.
     */
    #[JsonProperty('updatedAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $updatedAt;

    /**
     * @var value-of<SubscriptionType> $type This is the type / tier of the subscription.
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * This is the status of the subscription. Past due subscriptions are subscriptions
     * with past due payments.
     *
     * @var value-of<SubscriptionStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * This is the number of credits the subscription currently has.
     *
     * Note: This is a string to avoid floating point precision issues.
     *
     * @var string $credits
     */
    #[JsonProperty('credits')]
    public string $credits;

    /**
     * @var float $concurrencyCounter This is the total number of active calls (concurrency) across all orgs under this subscription.
     */
    #[JsonProperty('concurrencyCounter')]
    public float $concurrencyCounter;

    /**
     * @var float $concurrencyLimitIncluded This is the default concurrency limit for the subscription.
     */
    #[JsonProperty('concurrencyLimitIncluded')]
    public float $concurrencyLimitIncluded;

    /**
     * @var ?float $phoneNumbersCounter This is the number of free phone numbers the subscription has
     */
    #[JsonProperty('phoneNumbersCounter')]
    public ?float $phoneNumbersCounter;

    /**
     * @var ?float $phoneNumbersIncluded This is the maximum number of free phone numbers the subscription can have
     */
    #[JsonProperty('phoneNumbersIncluded')]
    public ?float $phoneNumbersIncluded;

    /**
     * @var float $concurrencyLimitPurchased This is the purchased add-on concurrency limit for the subscription.
     */
    #[JsonProperty('concurrencyLimitPurchased')]
    public float $concurrencyLimitPurchased;

    /**
     * @var ?float $monthlyChargeScheduleId This is the ID of the monthly job that charges for subscription add ons and phone numbers.
     */
    #[JsonProperty('monthlyChargeScheduleId')]
    public ?float $monthlyChargeScheduleId;

    /**
     * This is the ID of the monthly job that checks whether the credit balance of the subscription
     * is sufficient for the monthly charge.
     *
     * @var ?float $monthlyCreditCheckScheduleId
     */
    #[JsonProperty('monthlyCreditCheckScheduleId')]
    public ?float $monthlyCreditCheckScheduleId;

    /**
     * @var ?string $stripeCustomerId This is the Stripe customer ID.
     */
    #[JsonProperty('stripeCustomerId')]
    public ?string $stripeCustomerId;

    /**
     * @var ?string $stripePaymentMethodId This is the Stripe payment ID.
     */
    #[JsonProperty('stripePaymentMethodId')]
    public ?string $stripePaymentMethodId;

    /**
     * @var ?bool $slackSupportEnabled If this flag is true, then the user has purchased slack support.
     */
    #[JsonProperty('slackSupportEnabled')]
    public ?bool $slackSupportEnabled;

    /**
     * @var ?string $slackChannelId If this subscription has a slack support subscription, the slack channel's ID will be stored here.
     */
    #[JsonProperty('slackChannelId')]
    public ?string $slackChannelId;

    /**
     * This is the HIPAA enabled flag for the subscription. It determines whether orgs under this
     * subscription have the option to enable HIPAA compliance.
     *
     * @var ?bool $hipaaEnabled
     */
    #[JsonProperty('hipaaEnabled')]
    public ?bool $hipaaEnabled;

    /**
     * @var ?string $hipaaCommonPaperAgreementId This is the ID for the Common Paper agreement outlining the HIPAA contract.
     */
    #[JsonProperty('hipaaCommonPaperAgreementId')]
    public ?string $hipaaCommonPaperAgreementId;

    /**
     * This is the Stripe fingerprint of the payment method (card). It allows us
     * to detect users who try to abuse our system through multiple sign-ups.
     *
     * @var ?string $stripePaymentMethodFingerprint
     */
    #[JsonProperty('stripePaymentMethodFingerprint')]
    public ?string $stripePaymentMethodFingerprint;

    /**
     * @var ?string $stripeCustomerEmail This is the customer's email on Stripe.
     */
    #[JsonProperty('stripeCustomerEmail')]
    public ?string $stripeCustomerEmail;

    /**
     * @var ?string $referredByEmail This is the email of the referrer for the subscription.
     */
    #[JsonProperty('referredByEmail')]
    public ?string $referredByEmail;

    /**
     * @var ?AutoReloadPlan $autoReloadPlan This is the auto reload plan configured for the subscription.
     */
    #[JsonProperty('autoReloadPlan')]
    public ?AutoReloadPlan $autoReloadPlan;

    /**
     * @var ?float $minutesIncluded The number of minutes included in the subscription.
     */
    #[JsonProperty('minutesIncluded')]
    public ?float $minutesIncluded;

    /**
     * @var ?float $minutesUsed The number of minutes used in the subscription.
     */
    #[JsonProperty('minutesUsed')]
    public ?float $minutesUsed;

    /**
     * @var ?DateTime $minutesUsedNextResetAt This is the timestamp at which the number of monthly free minutes is scheduled to reset at.
     */
    #[JsonProperty('minutesUsedNextResetAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $minutesUsedNextResetAt;

    /**
     * @var ?float $minutesOverageCost The per minute charge on minutes that exceed the included minutes. Enterprise only.
     */
    #[JsonProperty('minutesOverageCost')]
    public ?float $minutesOverageCost;

    /**
     * @var ?array<string> $providersIncluded The list of providers included in the subscription. Enterprise only.
     */
    #[JsonProperty('providersIncluded'), ArrayType(['string'])]
    public ?array $providersIncluded;

    /**
     * @var ?float $outboundCallsDailyLimit The maximum number of outbound calls this subscription may make in a day. Resets every night.
     */
    #[JsonProperty('outboundCallsDailyLimit')]
    public ?float $outboundCallsDailyLimit;

    /**
     * @var ?float $outboundCallsCounter The current number of outbound calls the subscription has made in the current day.
     */
    #[JsonProperty('outboundCallsCounter')]
    public ?float $outboundCallsCounter;

    /**
     * @var ?DateTime $outboundCallsCounterNextResetAt This is the timestamp at which the outbound calls counter is scheduled to reset at.
     */
    #[JsonProperty('outboundCallsCounterNextResetAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $outboundCallsCounterNextResetAt;

    /**
     * @var ?array<string> $couponIds This is the IDs of the coupons applicable to this subscription.
     */
    #[JsonProperty('couponIds'), ArrayType(['string'])]
    public ?array $couponIds;

    /**
     * @var ?string $couponUsageLeft This is the number of credits left obtained from a coupon.
     */
    #[JsonProperty('couponUsageLeft')]
    public ?string $couponUsageLeft;

    /**
     * @var ?InvoicePlan $invoicePlan This is the invoice plan for the subscription.
     */
    #[JsonProperty('invoicePlan')]
    public ?InvoicePlan $invoicePlan;

    /**
     * This is the PCI enabled flag for the subscription. It determines whether orgs under this
     * subscription have the option to enable PCI compliance.
     *
     * @var ?bool $pciEnabled
     */
    #[JsonProperty('pciEnabled')]
    public ?bool $pciEnabled;

    /**
     * @var ?string $pciCommonPaperAgreementId This is the ID for the Common Paper agreement outlining the PCI contract.
     */
    #[JsonProperty('pciCommonPaperAgreementId')]
    public ?string $pciCommonPaperAgreementId;

    /**
     * @var ?float $callRetentionDays This is the call retention days for the subscription.
     */
    #[JsonProperty('callRetentionDays')]
    public ?float $callRetentionDays;

    /**
     * @var ?float $chatRetentionDays This is the chat retention days for the subscription.
     */
    #[JsonProperty('chatRetentionDays')]
    public ?float $chatRetentionDays;

    /**
     * @var ?value-of<SubscriptionMinutesIncludedResetFrequency> $minutesIncludedResetFrequency This is the minutes_included reset frequency for the subscription.
     */
    #[JsonProperty('minutesIncludedResetFrequency')]
    public ?string $minutesIncludedResetFrequency;

    /**
     * @var ?bool $rbacEnabled This is the Role Based Access Control (RBAC) enabled flag for the subscription.
     */
    #[JsonProperty('rbacEnabled')]
    public ?bool $rbacEnabled;

    /**
     * @var ?float $platformFee This is the platform fee for the subscription.
     */
    #[JsonProperty('platformFee')]
    public ?float $platformFee;

    /**
     * @param array{
     *   id: string,
     *   createdAt: DateTime,
     *   updatedAt: DateTime,
     *   type: value-of<SubscriptionType>,
     *   status: value-of<SubscriptionStatus>,
     *   credits: string,
     *   concurrencyCounter: float,
     *   concurrencyLimitIncluded: float,
     *   concurrencyLimitPurchased: float,
     *   phoneNumbersCounter?: ?float,
     *   phoneNumbersIncluded?: ?float,
     *   monthlyChargeScheduleId?: ?float,
     *   monthlyCreditCheckScheduleId?: ?float,
     *   stripeCustomerId?: ?string,
     *   stripePaymentMethodId?: ?string,
     *   slackSupportEnabled?: ?bool,
     *   slackChannelId?: ?string,
     *   hipaaEnabled?: ?bool,
     *   hipaaCommonPaperAgreementId?: ?string,
     *   stripePaymentMethodFingerprint?: ?string,
     *   stripeCustomerEmail?: ?string,
     *   referredByEmail?: ?string,
     *   autoReloadPlan?: ?AutoReloadPlan,
     *   minutesIncluded?: ?float,
     *   minutesUsed?: ?float,
     *   minutesUsedNextResetAt?: ?DateTime,
     *   minutesOverageCost?: ?float,
     *   providersIncluded?: ?array<string>,
     *   outboundCallsDailyLimit?: ?float,
     *   outboundCallsCounter?: ?float,
     *   outboundCallsCounterNextResetAt?: ?DateTime,
     *   couponIds?: ?array<string>,
     *   couponUsageLeft?: ?string,
     *   invoicePlan?: ?InvoicePlan,
     *   pciEnabled?: ?bool,
     *   pciCommonPaperAgreementId?: ?string,
     *   callRetentionDays?: ?float,
     *   chatRetentionDays?: ?float,
     *   minutesIncludedResetFrequency?: ?value-of<SubscriptionMinutesIncludedResetFrequency>,
     *   rbacEnabled?: ?bool,
     *   platformFee?: ?float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->createdAt = $values['createdAt'];
        $this->updatedAt = $values['updatedAt'];
        $this->type = $values['type'];
        $this->status = $values['status'];
        $this->credits = $values['credits'];
        $this->concurrencyCounter = $values['concurrencyCounter'];
        $this->concurrencyLimitIncluded = $values['concurrencyLimitIncluded'];
        $this->phoneNumbersCounter = $values['phoneNumbersCounter'] ?? null;
        $this->phoneNumbersIncluded = $values['phoneNumbersIncluded'] ?? null;
        $this->concurrencyLimitPurchased = $values['concurrencyLimitPurchased'];
        $this->monthlyChargeScheduleId = $values['monthlyChargeScheduleId'] ?? null;
        $this->monthlyCreditCheckScheduleId = $values['monthlyCreditCheckScheduleId'] ?? null;
        $this->stripeCustomerId = $values['stripeCustomerId'] ?? null;
        $this->stripePaymentMethodId = $values['stripePaymentMethodId'] ?? null;
        $this->slackSupportEnabled = $values['slackSupportEnabled'] ?? null;
        $this->slackChannelId = $values['slackChannelId'] ?? null;
        $this->hipaaEnabled = $values['hipaaEnabled'] ?? null;
        $this->hipaaCommonPaperAgreementId = $values['hipaaCommonPaperAgreementId'] ?? null;
        $this->stripePaymentMethodFingerprint = $values['stripePaymentMethodFingerprint'] ?? null;
        $this->stripeCustomerEmail = $values['stripeCustomerEmail'] ?? null;
        $this->referredByEmail = $values['referredByEmail'] ?? null;
        $this->autoReloadPlan = $values['autoReloadPlan'] ?? null;
        $this->minutesIncluded = $values['minutesIncluded'] ?? null;
        $this->minutesUsed = $values['minutesUsed'] ?? null;
        $this->minutesUsedNextResetAt = $values['minutesUsedNextResetAt'] ?? null;
        $this->minutesOverageCost = $values['minutesOverageCost'] ?? null;
        $this->providersIncluded = $values['providersIncluded'] ?? null;
        $this->outboundCallsDailyLimit = $values['outboundCallsDailyLimit'] ?? null;
        $this->outboundCallsCounter = $values['outboundCallsCounter'] ?? null;
        $this->outboundCallsCounterNextResetAt = $values['outboundCallsCounterNextResetAt'] ?? null;
        $this->couponIds = $values['couponIds'] ?? null;
        $this->couponUsageLeft = $values['couponUsageLeft'] ?? null;
        $this->invoicePlan = $values['invoicePlan'] ?? null;
        $this->pciEnabled = $values['pciEnabled'] ?? null;
        $this->pciCommonPaperAgreementId = $values['pciCommonPaperAgreementId'] ?? null;
        $this->callRetentionDays = $values['callRetentionDays'] ?? null;
        $this->chatRetentionDays = $values['chatRetentionDays'] ?? null;
        $this->minutesIncludedResetFrequency = $values['minutesIncludedResetFrequency'] ?? null;
        $this->rbacEnabled = $values['rbacEnabled'] ?? null;
        $this->platformFee = $values['platformFee'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
