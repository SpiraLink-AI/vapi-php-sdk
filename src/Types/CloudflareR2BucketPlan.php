<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class CloudflareR2BucketPlan extends JsonSerializableType
{
    /**
     * @var ?string $accessKeyId Cloudflare R2 Access key ID.
     */
    #[JsonProperty('accessKeyId')]
    public ?string $accessKeyId;

    /**
     * @var ?string $secretAccessKey Cloudflare R2 access key secret. This is not returned in the API.
     */
    #[JsonProperty('secretAccessKey')]
    public ?string $secretAccessKey;

    /**
     * @var ?string $url Cloudflare R2 base url.
     */
    #[JsonProperty('url')]
    public ?string $url;

    /**
     * @var string $name This is the name of the bucket.
     */
    #[JsonProperty('name')]
    public string $name;

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
     * @param array{
     *   name: string,
     *   accessKeyId?: ?string,
     *   secretAccessKey?: ?string,
     *   url?: ?string,
     *   path?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->accessKeyId = $values['accessKeyId'] ?? null;
        $this->secretAccessKey = $values['secretAccessKey'] ?? null;
        $this->url = $values['url'] ?? null;
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
