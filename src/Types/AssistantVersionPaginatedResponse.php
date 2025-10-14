<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class AssistantVersionPaginatedResponse extends JsonSerializableType
{
    /**
     * @var array<mixed> $results
     */
    #[JsonProperty('results'), ArrayType(['mixed'])]
    public array $results;

    /**
     * @var PaginationMeta $metadata
     */
    #[JsonProperty('metadata')]
    public PaginationMeta $metadata;

    /**
     * @var ?string $nextPageState
     */
    #[JsonProperty('nextPageState')]
    public ?string $nextPageState;

    /**
     * @param array{
     *   results: array<mixed>,
     *   metadata: PaginationMeta,
     *   nextPageState?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->results = $values['results'];
        $this->metadata = $values['metadata'];
        $this->nextPageState = $values['nextPageState'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
