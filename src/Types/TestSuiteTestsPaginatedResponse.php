<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class TestSuiteTestsPaginatedResponse extends JsonSerializableType
{
    /**
     * @var array<TestSuiteTestsPaginatedResponseResultsItem> $results A list of test suite tests.
     */
    #[JsonProperty('results'), ArrayType([TestSuiteTestsPaginatedResponseResultsItem::class])]
    public array $results;

    /**
     * @var PaginationMeta $metadata Metadata about the pagination.
     */
    #[JsonProperty('metadata')]
    public PaginationMeta $metadata;

    /**
     * @param array{
     *   results: array<TestSuiteTestsPaginatedResponseResultsItem>,
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
