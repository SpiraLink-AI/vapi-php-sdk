<?php declare(strict_types=1);

namespace Vapi\Types;

use DateTime;
use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\Date;

final class CustomLlmCredential extends JsonSerializableType
{
    /**
     * @var 'custom-llm' $provider
     */
    #[JsonProperty('provider')]
    public string $provider;

    /**
     * @var string $apiKey This is not returned in the API.
     */
    #[JsonProperty('apiKey')]
    public string $apiKey;

    /**
     * @var ?OAuth2AuthenticationPlan $authenticationPlan This is the authentication plan. Currently supports OAuth2 RFC 6749. To use Bearer authentication, use apiKey
     */
    #[JsonProperty('authenticationPlan')]
    public ?OAuth2AuthenticationPlan $authenticationPlan;

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
     * @var ?Oauth2AuthenticationSession $authenticationSession This is the authentication session for the credential. Available for credentials that have an authentication plan.
     */
    #[JsonProperty('authenticationSession')]
    public ?Oauth2AuthenticationSession $authenticationSession;

    /**
     * @var ?string $name This is the name of credential. This is just for your reference.
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @param array{
     *   provider: 'custom-llm',
     *   apiKey: string,
     *   id: string,
     *   orgId: string,
     *   createdAt: DateTime,
     *   updatedAt: DateTime,
     *   authenticationPlan?: ?OAuth2AuthenticationPlan,
     *   authenticationSession?: ?Oauth2AuthenticationSession,
     *   name?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->provider = $values['provider'];
        $this->apiKey = $values['apiKey'];
        $this->authenticationPlan = $values['authenticationPlan'] ?? null;
        $this->id = $values['id'];
        $this->orgId = $values['orgId'];
        $this->createdAt = $values['createdAt'];
        $this->updatedAt = $values['updatedAt'];
        $this->authenticationSession = $values['authenticationSession'] ?? null;
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
