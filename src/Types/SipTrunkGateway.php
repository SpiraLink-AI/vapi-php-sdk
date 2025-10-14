<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class SipTrunkGateway extends JsonSerializableType
{
    /**
     * @var string $ip This is the address of the gateway. It can be an IPv4 address like 1.1.1.1 or a fully qualified domain name like my-sip-trunk.pstn.twilio.com.
     */
    #[JsonProperty('ip')]
    public string $ip;

    /**
     * This is the port number of the gateway. Default is 5060.
     *
     * @default 5060
     *
     * @var ?float $port
     */
    #[JsonProperty('port')]
    public ?float $port;

    /**
     * This is the netmask of the gateway. Defaults to 32.
     *
     * @default 32
     *
     * @var ?float $netmask
     */
    #[JsonProperty('netmask')]
    public ?float $netmask;

    /**
     * This is whether inbound calls are allowed from this gateway. Default is true.
     *
     * @default true
     *
     * @var ?bool $inboundEnabled
     */
    #[JsonProperty('inboundEnabled')]
    public ?bool $inboundEnabled;

    /**
     * This is whether outbound calls should be sent to this gateway. Default is true.
     *
     * Note, if netmask is less than 32, it doesn't affect the outbound IPs that are tried. 1 attempt is made to `ip:port`.
     *
     * @default true
     *
     * @var ?bool $outboundEnabled
     */
    #[JsonProperty('outboundEnabled')]
    public ?bool $outboundEnabled;

    /**
     * This is the protocol to use for SIP signaling outbound calls. Default is udp.
     *
     * @default udp
     *
     * @var ?value-of<SipTrunkGatewayOutboundProtocol> $outboundProtocol
     */
    #[JsonProperty('outboundProtocol')]
    public ?string $outboundProtocol;

    /**
     * This is whether to send options ping to the gateway. This can be used to check if the gateway is reachable. Default is false.
     *
     * This is useful for high availability setups where you want to check if the gateway is reachable before routing calls to it. Note, if no gateway for a trunk is reachable, outbound calls will be rejected.
     *
     * @default false
     *
     * @var ?bool $optionsPingEnabled
     */
    #[JsonProperty('optionsPingEnabled')]
    public ?bool $optionsPingEnabled;

    /**
     * @param array{
     *   ip: string,
     *   port?: ?float,
     *   netmask?: ?float,
     *   inboundEnabled?: ?bool,
     *   outboundEnabled?: ?bool,
     *   outboundProtocol?: ?value-of<SipTrunkGatewayOutboundProtocol>,
     *   optionsPingEnabled?: ?bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->ip = $values['ip'];
        $this->port = $values['port'] ?? null;
        $this->netmask = $values['netmask'] ?? null;
        $this->inboundEnabled = $values['inboundEnabled'] ?? null;
        $this->outboundEnabled = $values['outboundEnabled'] ?? null;
        $this->outboundProtocol = $values['outboundProtocol'] ?? null;
        $this->optionsPingEnabled = $values['optionsPingEnabled'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
