<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class SipTrunkOutboundSipRegisterPlan extends JsonSerializableType
{
    /**
     * @var ?string $domain
     */
    #[JsonProperty('domain')]
    public ?string $domain;

    /**
     * @var ?string $username
     */
    #[JsonProperty('username')]
    public ?string $username;

    /**
     * @var ?string $realm
     */
    #[JsonProperty('realm')]
    public ?string $realm;

    /**
     * @param array{
     *   domain?: ?string,
     *   username?: ?string,
     *   realm?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->domain = $values['domain'] ?? null;
        $this->username = $values['username'] ?? null;
        $this->realm = $values['realm'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
