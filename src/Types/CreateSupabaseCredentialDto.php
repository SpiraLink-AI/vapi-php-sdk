<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class CreateSupabaseCredentialDto extends JsonSerializableType
{
    /**
     * @var ?float $fallbackIndex This is the order in which this storage provider is tried during upload retries. Lower numbers are tried first in increasing order.
     */
    #[JsonProperty('fallbackIndex')]
    public ?float $fallbackIndex;

    /**
     * @var ?SupabaseBucketPlan $bucketPlan
     */
    #[JsonProperty('bucketPlan')]
    public ?SupabaseBucketPlan $bucketPlan;

    /**
     * @var ?string $name This is the name of credential. This is just for your reference.
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @param array{
     *   fallbackIndex?: ?float,
     *   bucketPlan?: ?SupabaseBucketPlan,
     *   name?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
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
