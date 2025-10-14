<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class UpdateWebhookCredentialDto extends JsonSerializableType
{
    /**
     * @var ?UpdateWebhookCredentialDtoAuthenticationPlan $authenticationPlan This is the authentication plan. Supports OAuth2 RFC 6749, HMAC signing, and Bearer authentication.
     */
    #[JsonProperty('authenticationPlan')]
    public ?UpdateWebhookCredentialDtoAuthenticationPlan $authenticationPlan;

    /**
     * @var ?string $name This is the name of credential. This is just for your reference.
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @param array{
     *   authenticationPlan?: ?UpdateWebhookCredentialDtoAuthenticationPlan,
     *   name?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->authenticationPlan = $values['authenticationPlan'] ?? null;
        $this->name = $values['name'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
