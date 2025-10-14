<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class BucketPlan extends JsonSerializableType
{
    /**
     * @var string $name This is the name of the bucket.
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * This is the region of the bucket.
     *
     * Usage:
     * - If `credential.type` is `aws`, then this is required.
     * - If `credential.type` is `gcp`, then this is optional since GCP allows buckets to be accessed without a region but region is required for data residency requirements. Read here: https://cloud.google.com/storage/docs/request-endpoints
     *
     * This overrides the `credential.region` field if it is provided.
     *
     * @var ?string $region
     */
    #[JsonProperty('region')]
    public ?string $region;

    /**
     * This is the path where call artifacts will be stored.
     *
     * Usage:
     * - To store call artifacts in a specific folder, set this to the full path. Eg. "/folder-name1/folder-name2".
     * - To store call artifacts in the root of the bucket, leave this blank.
     *
     * @default "/"
     *
     * @var ?string $path
     */
    #[JsonProperty('path')]
    public ?string $path;

    /**
     * This is the HMAC access key offered by GCP for interoperability with S3 clients. Here is the guide on how to create: https://cloud.google.com/storage/docs/authentication/managing-hmackeys#console
     *
     * Usage:
     * - If `credential.type` is `gcp`, then this is required.
     * - If `credential.type` is `aws`, then this is not required since credential.awsAccessKeyId is used instead.
     *
     * @var ?string $hmacAccessKey
     */
    #[JsonProperty('hmacAccessKey')]
    public ?string $hmacAccessKey;

    /**
     * This is the secret for the HMAC access key. Here is the guide on how to create: https://cloud.google.com/storage/docs/authentication/managing-hmackeys#console
     *
     * Usage:
     * - If `credential.type` is `gcp`, then this is required.
     * - If `credential.type` is `aws`, then this is not required since credential.awsSecretAccessKey is used instead.
     *
     * Note: This is not returned in the API.
     *
     * @var ?string $hmacSecret
     */
    #[JsonProperty('hmacSecret')]
    public ?string $hmacSecret;

    /**
     * @param array{
     *   name: string,
     *   region?: ?string,
     *   path?: ?string,
     *   hmacAccessKey?: ?string,
     *   hmacSecret?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->region = $values['region'] ?? null;
        $this->path = $values['path'] ?? null;
        $this->hmacAccessKey = $values['hmacAccessKey'] ?? null;
        $this->hmacSecret = $values['hmacSecret'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
