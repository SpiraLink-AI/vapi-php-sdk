<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class SipAuthentication extends JsonSerializableType
{
    /**
     * @var ?string $realm This will be expected in the `realm` field of the `authorization` header of the SIP INVITE. Defaults to sip.vapi.ai.
     */
    #[JsonProperty('realm')]
    public ?string $realm;

    /**
     * @var string $username This will be expected in the `username` field of the `authorization` header of the SIP INVITE.
     */
    #[JsonProperty('username')]
    public string $username;

    /**
     * @var string $password This will be expected to generate the `response` field of the `authorization` header of the SIP INVITE, through digest authentication.
     */
    #[JsonProperty('password')]
    public string $password;

    /**
     * @param array{
     *   username: string,
     *   password: string,
     *   realm?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->realm = $values['realm'] ?? null;
        $this->username = $values['username'];
        $this->password = $values['password'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
