<?php declare(strict_types=1);

namespace Vapi\Types;

use DateTime;
use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;
use Vapi\Core\Types\Date;

final class ByoSipTrunkCredential extends JsonSerializableType
{
    /**
     * @var ?'byo-sip-trunk' $provider This can be used to bring your own SIP trunks or to connect to a Carrier.
     */
    #[JsonProperty('provider')]
    public ?string $provider;

    /**
     * @var string $id This is the unique identifier for the credential.
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $orgId This is the unique identifier for the org that this credential belongs to.
     */
    #[JsonProperty('orgId')]
    public string $orgId;

    /**
     * @var DateTime $createdAt This is the ISO 8601 date-time string of when the credential was created.
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $createdAt;

    /**
     * @var DateTime $updatedAt This is the ISO 8601 date-time string of when the assistant was last updated.
     */
    #[JsonProperty('updatedAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $updatedAt;

    /**
     * @var ?string $name This is the name of credential. This is just for your reference.
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var array<SipTrunkGateway> $gateways This is the list of SIP trunk's gateways.
     */
    #[JsonProperty('gateways'), ArrayType([SipTrunkGateway::class])]
    public array $gateways;

    /**
     * @var ?SipTrunkOutboundAuthenticationPlan $outboundAuthenticationPlan This can be used to configure the outbound authentication if required by the SIP trunk.
     */
    #[JsonProperty('outboundAuthenticationPlan')]
    public ?SipTrunkOutboundAuthenticationPlan $outboundAuthenticationPlan;

    /**
     * This ensures the outbound origination attempts have a leading plus. Defaults to false to match conventional telecom behavior.
     *
     * Usage:
     * - Vonage/Twilio requires leading plus for all outbound calls. Set this to true.
     *
     * @default false
     *
     * @var ?bool $outboundLeadingPlusEnabled
     */
    #[JsonProperty('outboundLeadingPlusEnabled')]
    public ?bool $outboundLeadingPlusEnabled;

    /**
     * @var ?string $techPrefix This can be used to configure the tech prefix on outbound calls. This is an advanced property.
     */
    #[JsonProperty('techPrefix')]
    public ?string $techPrefix;

    /**
     * @var ?string $sipDiversionHeader This can be used to enable the SIP diversion header for authenticating the calling number if the SIP trunk supports it. This is an advanced property.
     */
    #[JsonProperty('sipDiversionHeader')]
    public ?string $sipDiversionHeader;

    /**
     * @var ?SbcConfiguration $sbcConfiguration This is an advanced configuration for enterprise deployments. This uses the onprem SBC to trunk into the SIP trunk's `gateways`, rather than the managed SBC provided by Vapi.
     */
    #[JsonProperty('sbcConfiguration')]
    public ?SbcConfiguration $sbcConfiguration;

    /**
     * @param array{
     *   id: string,
     *   orgId: string,
     *   createdAt: DateTime,
     *   updatedAt: DateTime,
     *   gateways: array<SipTrunkGateway>,
     *   provider?: ?'byo-sip-trunk',
     *   name?: ?string,
     *   outboundAuthenticationPlan?: ?SipTrunkOutboundAuthenticationPlan,
     *   outboundLeadingPlusEnabled?: ?bool,
     *   techPrefix?: ?string,
     *   sipDiversionHeader?: ?string,
     *   sbcConfiguration?: ?SbcConfiguration,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->provider = $values['provider'] ?? null;
        $this->id = $values['id'];
        $this->orgId = $values['orgId'];
        $this->createdAt = $values['createdAt'];
        $this->updatedAt = $values['updatedAt'];
        $this->name = $values['name'] ?? null;
        $this->gateways = $values['gateways'];
        $this->outboundAuthenticationPlan = $values['outboundAuthenticationPlan'] ?? null;
        $this->outboundLeadingPlusEnabled = $values['outboundLeadingPlusEnabled'] ?? null;
        $this->techPrefix = $values['techPrefix'] ?? null;
        $this->sipDiversionHeader = $values['sipDiversionHeader'] ?? null;
        $this->sbcConfiguration = $values['sbcConfiguration'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
