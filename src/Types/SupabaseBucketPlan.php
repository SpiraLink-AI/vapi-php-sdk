<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class SupabaseBucketPlan extends JsonSerializableType
{
    /**
     * This is the S3 Region. It should look like us-east-1
     * It should be one of the supabase regions defined in the SUPABASE_REGION enum
     * Check https://supabase.com/docs/guides/platform/regions for up to date regions
     *
     * @var value-of<SupabaseBucketPlanRegion> $region
     */
    #[JsonProperty('region')]
    public string $region;

    /**
     * This is the S3 compatible URL for Supabase S3
     * This should look like https://<project-ID>.supabase.co/storage/v1/s3
     *
     * @var string $url
     */
    #[JsonProperty('url')]
    public string $url;

    /**
     * This is the Supabase S3 Access Key ID.
     * The user creates this in the Supabase project Storage settings
     *
     * @var string $accessKeyId
     */
    #[JsonProperty('accessKeyId')]
    public string $accessKeyId;

    /**
     * This is the Supabase S3 Secret Access Key.
     * The user creates this in the Supabase project Storage settings along with the access key id
     *
     * @var string $secretAccessKey
     */
    #[JsonProperty('secretAccessKey')]
    public string $secretAccessKey;

    /**
     * This is the Supabase S3 Bucket Name.
     * The user must create this in Supabase under Storage > Buckets
     * A bucket that does not exist will not be checked now, but file uploads will fail
     *
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * This is the Supabase S3 Bucket Folder Path.
     * The user can create this in Supabase under Storage > Buckets
     * A path that does not exist will not be checked now, but file uploads will fail
     * A Path is like a folder in the bucket
     * Eg. If the bucket is called "my-bucket" and the path is "my-folder", the full path is "my-bucket/my-folder"
     *
     * @var ?string $path
     */
    #[JsonProperty('path')]
    public ?string $path;

    /**
     * @param array{
     *   region: value-of<SupabaseBucketPlanRegion>,
     *   url: string,
     *   accessKeyId: string,
     *   secretAccessKey: string,
     *   name: string,
     *   path?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->region = $values['region'];
        $this->url = $values['url'];
        $this->accessKeyId = $values['accessKeyId'];
        $this->secretAccessKey = $values['secretAccessKey'];
        $this->name = $values['name'];
        $this->path = $values['path'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
