<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class CreateCloudflareCredentialDto extends JsonSerializableType
{
    /**
     * @var ?string $accountId Cloudflare Account Id.
     */
    #[JsonProperty('accountId')]
    public ?string $accountId;

    /**
     * @var ?string $apiKey Cloudflare API Key / Token.
     */
    #[JsonProperty('apiKey')]
    public ?string $apiKey;

    /**
     * @var ?string $accountEmail Cloudflare Account Email.
     */
    #[JsonProperty('accountEmail')]
    public ?string $accountEmail;

    /**
     * @var ?float $fallbackIndex This is the order in which this storage provider is tried during upload retries. Lower numbers are tried first in increasing order.
     */
    #[JsonProperty('fallbackIndex')]
    public ?float $fallbackIndex;

    /**
     * @var ?CloudflareR2BucketPlan $bucketPlan This is the bucket plan that can be provided to store call artifacts in R2
     */
    #[JsonProperty('bucketPlan')]
    public ?CloudflareR2BucketPlan $bucketPlan;

    /**
     * @var ?string $name This is the name of credential. This is just for your reference.
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @param array{
     *   accountId?: ?string,
     *   apiKey?: ?string,
     *   accountEmail?: ?string,
     *   fallbackIndex?: ?float,
     *   bucketPlan?: ?CloudflareR2BucketPlan,
     *   name?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->accountId = $values['accountId'] ?? null;
        $this->apiKey = $values['apiKey'] ?? null;
        $this->accountEmail = $values['accountEmail'] ?? null;
        $this->fallbackIndex = $values['fallbackIndex'] ?? null;
        $this->bucketPlan = $values['bucketPlan'] ?? null;
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
