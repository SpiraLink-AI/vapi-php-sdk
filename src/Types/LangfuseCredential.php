<?php declare(strict_types=1);

namespace Vapi\Types;

use DateTime;
use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\Date;

final class LangfuseCredential extends JsonSerializableType
{
    /**
     * @var 'langfuse' $provider
     */
    #[JsonProperty('provider')]
    public string $provider;

    /**
     * @var string $publicKey The public key for Langfuse project. Eg: pk-lf-...
     */
    #[JsonProperty('publicKey')]
    public string $publicKey;

    /**
     * @var string $apiKey The secret key for Langfuse project. Eg: sk-lf-... .This is not returned in the API.
     */
    #[JsonProperty('apiKey')]
    public string $apiKey;

    /**
     * @var string $apiUrl The host URL for Langfuse project. Eg: https://cloud.langfuse.com
     */
    #[JsonProperty('apiUrl')]
    public string $apiUrl;

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
     * @param array{
     *   provider: 'langfuse',
     *   publicKey: string,
     *   apiKey: string,
     *   apiUrl: string,
     *   id: string,
     *   orgId: string,
     *   createdAt: DateTime,
     *   updatedAt: DateTime,
     *   name?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->provider = $values['provider'];
        $this->publicKey = $values['publicKey'];
        $this->apiKey = $values['apiKey'];
        $this->apiUrl = $values['apiUrl'];
        $this->id = $values['id'];
        $this->orgId = $values['orgId'];
        $this->createdAt = $values['createdAt'];
        $this->updatedAt = $values['updatedAt'];
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
