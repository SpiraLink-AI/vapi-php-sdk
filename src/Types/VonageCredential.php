<?php declare(strict_types=1);

namespace Vapi\Types;

use DateTime;
use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\Date;

final class VonageCredential extends JsonSerializableType
{
    /**
     * @var string $vonageApplicationPrivateKey This is not returned in the API.
     */
    #[JsonProperty('vonageApplicationPrivateKey')]
    public string $vonageApplicationPrivateKey;

    /**
     * @var 'vonage' $provider
     */
    #[JsonProperty('provider')]
    public string $provider;

    /**
     * @var string $apiSecret This is not returned in the API.
     */
    #[JsonProperty('apiSecret')]
    public string $apiSecret;

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
     * This is the Vonage Application ID for the credential.
     *
     * Only relevant for Vonage credentials.
     *
     * @var string $vonageApplicationId
     */
    #[JsonProperty('vonageApplicationId')]
    public string $vonageApplicationId;

    /**
     * @var ?string $name This is the name of credential. This is just for your reference.
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var string $apiKey
     */
    #[JsonProperty('apiKey')]
    public string $apiKey;

    /**
     * @param array{
     *   vonageApplicationPrivateKey: string,
     *   provider: 'vonage',
     *   apiSecret: string,
     *   id: string,
     *   orgId: string,
     *   createdAt: DateTime,
     *   updatedAt: DateTime,
     *   vonageApplicationId: string,
     *   apiKey: string,
     *   name?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->vonageApplicationPrivateKey = $values['vonageApplicationPrivateKey'];
        $this->provider = $values['provider'];
        $this->apiSecret = $values['apiSecret'];
        $this->id = $values['id'];
        $this->orgId = $values['orgId'];
        $this->createdAt = $values['createdAt'];
        $this->updatedAt = $values['updatedAt'];
        $this->vonageApplicationId = $values['vonageApplicationId'];
        $this->name = $values['name'] ?? null;
        $this->apiKey = $values['apiKey'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
