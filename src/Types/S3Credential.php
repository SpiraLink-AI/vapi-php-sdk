<?php declare(strict_types=1);

namespace Vapi\Types;

use DateTime;
use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\Date;

final class S3Credential extends JsonSerializableType
{
    /**
     * @var 's3' $provider Credential provider. Only allowed value is s3
     */
    #[JsonProperty('provider')]
    public string $provider;

    /**
     * @var string $awsAccessKeyId AWS access key ID.
     */
    #[JsonProperty('awsAccessKeyId')]
    public string $awsAccessKeyId;

    /**
     * @var string $awsSecretAccessKey AWS access key secret. This is not returned in the API.
     */
    #[JsonProperty('awsSecretAccessKey')]
    public string $awsSecretAccessKey;

    /**
     * @var string $region AWS region in which the S3 bucket is located.
     */
    #[JsonProperty('region')]
    public string $region;

    /**
     * @var string $s3BucketName AWS S3 bucket name.
     */
    #[JsonProperty('s3BucketName')]
    public string $s3BucketName;

    /**
     * @var string $s3PathPrefix The path prefix for the uploaded recording. Ex. "recordings/"
     */
    #[JsonProperty('s3PathPrefix')]
    public string $s3PathPrefix;

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
     * @param array{
     *   provider: 's3',
     *   awsAccessKeyId: string,
     *   awsSecretAccessKey: string,
     *   region: string,
     *   s3BucketName: string,
     *   s3PathPrefix: string,
     *   id: string,
     *   orgId: string,
     *   createdAt: DateTime,
     *   updatedAt: DateTime,
     *   fallbackIndex?: ?float,
     *   name?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->provider = $values['provider'];
        $this->awsAccessKeyId = $values['awsAccessKeyId'];
        $this->awsSecretAccessKey = $values['awsSecretAccessKey'];
        $this->region = $values['region'];
        $this->s3BucketName = $values['s3BucketName'];
        $this->s3PathPrefix = $values['s3PathPrefix'];
        $this->fallbackIndex = $values['fallbackIndex'] ?? null;
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
