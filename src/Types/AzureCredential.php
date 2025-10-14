<?php declare(strict_types=1);

namespace Vapi\Types;

use DateTime;
use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\Date;

final class AzureCredential extends JsonSerializableType
{
    /**
     * @var 'azure' $provider
     */
    #[JsonProperty('provider')]
    public string $provider;

    /**
     * @var value-of<AzureCredentialService> $service This is the service being used in Azure.
     */
    #[JsonProperty('service')]
    public string $service;

    /**
     * @var ?value-of<AzureCredentialRegion> $region This is the region of the Azure resource.
     */
    #[JsonProperty('region')]
    public ?string $region;

    /**
     * @var ?string $apiKey This is not returned in the API.
     */
    #[JsonProperty('apiKey')]
    public ?string $apiKey;

    /**
     * @var ?float $fallbackIndex This is the order in which this storage provider is tried during upload retries. Lower numbers are tried first in increasing order.
     */
    #[JsonProperty('fallbackIndex')]
    public ?float $fallbackIndex;

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
     * @var ?AzureBlobStorageBucketPlan $bucketPlan This is the bucket plan that can be provided to store call artifacts in Azure Blob Storage.
     */
    #[JsonProperty('bucketPlan')]
    public ?AzureBlobStorageBucketPlan $bucketPlan;

    /**
     * @param array{
     *   provider: 'azure',
     *   service: value-of<AzureCredentialService>,
     *   id: string,
     *   orgId: string,
     *   createdAt: DateTime,
     *   updatedAt: DateTime,
     *   region?: ?value-of<AzureCredentialRegion>,
     *   apiKey?: ?string,
     *   fallbackIndex?: ?float,
     *   name?: ?string,
     *   bucketPlan?: ?AzureBlobStorageBucketPlan,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->provider = $values['provider'];
        $this->service = $values['service'];
        $this->region = $values['region'] ?? null;
        $this->apiKey = $values['apiKey'] ?? null;
        $this->fallbackIndex = $values['fallbackIndex'] ?? null;
        $this->id = $values['id'];
        $this->orgId = $values['orgId'];
        $this->createdAt = $values['createdAt'];
        $this->updatedAt = $values['updatedAt'];
        $this->name = $values['name'] ?? null;
        $this->bucketPlan = $values['bucketPlan'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
