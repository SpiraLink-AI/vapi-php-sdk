<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class OAuth2AuthenticationPlan extends JsonSerializableType
{
    /**
     * @var string $url This is the OAuth2 URL.
     */
    #[JsonProperty('url')]
    public string $url;

    /**
     * @var string $clientId This is the OAuth2 client ID.
     */
    #[JsonProperty('clientId')]
    public string $clientId;

    /**
     * @var string $clientSecret This is the OAuth2 client secret.
     */
    #[JsonProperty('clientSecret')]
    public string $clientSecret;

    /**
     * @var ?string $scope This is the scope of the OAuth2 token.
     */
    #[JsonProperty('scope')]
    public ?string $scope;

    /**
     * @param array{
     *   url: string,
     *   clientId: string,
     *   clientSecret: string,
     *   scope?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->url = $values['url'];
        $this->clientId = $values['clientId'];
        $this->clientSecret = $values['clientSecret'];
        $this->scope = $values['scope'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
