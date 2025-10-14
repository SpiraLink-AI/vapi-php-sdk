<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class PhoneNumberPaginatedResponse extends JsonSerializableType
{
    /**
     * @var array<PhoneNumberPaginatedResponseResultsItem> $results A list of phone numbers, which can be of any provider type.
     */
    #[JsonProperty('results'), ArrayType([PhoneNumberPaginatedResponseResultsItem::class])]
    public array $results;

    /**
     * @var PaginationMeta $metadata Metadata about the pagination.
     */
    #[JsonProperty('metadata')]
    public PaginationMeta $metadata;

    /**
     * @param array{
     *   results: array<PhoneNumberPaginatedResponseResultsItem>,
     *   metadata: PaginationMeta,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->results = $values['results'];
        $this->metadata = $values['metadata'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
