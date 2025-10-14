<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class TrieveKnowledgeBaseCreate extends JsonSerializableType
{
    /**
     * @var 'create' $type This is to create a new dataset on Trieve.
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var array<TrieveKnowledgeBaseChunkPlan> $chunkPlans These are the chunk plans used to create the dataset.
     */
    #[JsonProperty('chunkPlans'), ArrayType([TrieveKnowledgeBaseChunkPlan::class])]
    public array $chunkPlans;

    /**
     * @param array{
     *   type: 'create',
     *   chunkPlans: array<TrieveKnowledgeBaseChunkPlan>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->type = $values['type'];
        $this->chunkPlans = $values['chunkPlans'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
