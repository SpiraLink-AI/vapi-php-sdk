<?php declare(strict_types=1);

namespace Vapi\Types;

use DateTime;
use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\Date;

final class Oauth2AuthenticationSession extends JsonSerializableType
{
    /**
     * @var ?string $accessToken This is the OAuth2 access token.
     */
    #[JsonProperty('accessToken')]
    public ?string $accessToken;

    /**
     * @var ?DateTime $expiresAt This is the OAuth2 access token expiration.
     */
    #[JsonProperty('expiresAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $expiresAt;

    /**
     * @var ?string $refreshToken This is the OAuth2 refresh token.
     */
    #[JsonProperty('refreshToken')]
    public ?string $refreshToken;

    /**
     * @param array{
     *   accessToken?: ?string,
     *   expiresAt?: ?DateTime,
     *   refreshToken?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->accessToken = $values['accessToken'] ?? null;
        $this->expiresAt = $values['expiresAt'] ?? null;
        $this->refreshToken = $values['refreshToken'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
