<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class UpdateAzureCredentialDto extends JsonSerializableType
{
    /**
     * @var ?value-of<UpdateAzureCredentialDtoService> $service This is the service being used in Azure.
     */
    #[JsonProperty('service')]
    public ?string $service;

    /**
     * @var ?value-of<UpdateAzureCredentialDtoRegion> $region This is the region of the Azure resource.
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
     *   service?: ?value-of<UpdateAzureCredentialDtoService>,
     *   region?: ?value-of<UpdateAzureCredentialDtoRegion>,
     *   apiKey?: ?string,
     *   fallbackIndex?: ?float,
     *   name?: ?string,
     *   bucketPlan?: ?AzureBlobStorageBucketPlan,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->service = $values['service'] ?? null;
        $this->region = $values['region'] ?? null;
        $this->apiKey = $values['apiKey'] ?? null;
        $this->fallbackIndex = $values['fallbackIndex'] ?? null;
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
