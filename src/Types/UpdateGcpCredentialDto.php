<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class UpdateGcpCredentialDto extends JsonSerializableType
{
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
     * This is the GCP key. This is the JSON that can be generated in the Google Cloud Console at https://console.cloud.google.com/iam-admin/serviceaccounts/details/<service-account-id>/keys.
     *
     * The schema is identical to the JSON that GCP outputs.
     *
     * @var ?GcpKey $gcpKey
     */
    #[JsonProperty('gcpKey')]
    public ?GcpKey $gcpKey;

    /**
     * @var ?string $region This is the region of the GCP resource.
     */
    #[JsonProperty('region')]
    public ?string $region;

    /**
     * @var ?BucketPlan $bucketPlan
     */
    #[JsonProperty('bucketPlan')]
    public ?BucketPlan $bucketPlan;

    /**
     * @param array{
     *   fallbackIndex?: ?float,
     *   name?: ?string,
     *   gcpKey?: ?GcpKey,
     *   region?: ?string,
     *   bucketPlan?: ?BucketPlan,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->fallbackIndex = $values['fallbackIndex'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->gcpKey = $values['gcpKey'] ?? null;
        $this->region = $values['region'] ?? null;
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
