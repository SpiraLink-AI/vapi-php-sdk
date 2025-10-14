<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class UpdateSupabaseCredentialDto extends JsonSerializableType
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
     * @var ?SupabaseBucketPlan $bucketPlan
     */
    #[JsonProperty('bucketPlan')]
    public ?SupabaseBucketPlan $bucketPlan;

    /**
     * @param array{
     *   fallbackIndex?: ?float,
     *   name?: ?string,
     *   bucketPlan?: ?SupabaseBucketPlan,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
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
