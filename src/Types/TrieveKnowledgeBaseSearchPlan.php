<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class TrieveKnowledgeBaseSearchPlan extends JsonSerializableType
{
    /**
     * @var ?float $topK Specifies the number of top chunks to return. This corresponds to the `page_size` parameter in Trieve.
     */
    #[JsonProperty('topK')]
    public ?float $topK;

    /**
     * @var ?bool $removeStopWords If true, stop words (specified in server/src/stop-words.txt in the git repo) will be removed. This will preserve queries that are entirely stop words.
     */
    #[JsonProperty('removeStopWords')]
    public ?bool $removeStopWords;

    /**
     * @var ?float $scoreThreshold This is the score threshold to filter out chunks with a score below the threshold for cosine distance metric. For Manhattan Distance, Euclidean Distance, and Dot Product, it will filter out scores above the threshold distance. This threshold applies before weight and bias modifications. If not specified, this defaults to no threshold. A threshold of 0 will default to no threshold.
     */
    #[JsonProperty('scoreThreshold')]
    public ?float $scoreThreshold;

    /**
     * @var value-of<TrieveKnowledgeBaseSearchPlanSearchType> $searchType This is the search method used when searching for relevant chunks from the vector store.
     */
    #[JsonProperty('searchType')]
    public string $searchType;

    /**
     * @param array{
     *   searchType: value-of<TrieveKnowledgeBaseSearchPlanSearchType>,
     *   topK?: ?float,
     *   removeStopWords?: ?bool,
     *   scoreThreshold?: ?float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->topK = $values['topK'] ?? null;
        $this->removeStopWords = $values['removeStopWords'] ?? null;
        $this->scoreThreshold = $values['scoreThreshold'] ?? null;
        $this->searchType = $values['searchType'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
