<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class TrieveKnowledgeBaseChunkPlan extends JsonSerializableType
{
    /**
     * @var ?array<string> $fileIds These are the file ids that will be used to create the vector store. To upload files, use the `POST /files` endpoint.
     */
    #[JsonProperty('fileIds'), ArrayType(['string'])]
    public ?array $fileIds;

    /**
     * @var ?array<string> $websites These are the websites that will be used to create the vector store.
     */
    #[JsonProperty('websites'), ArrayType(['string'])]
    public ?array $websites;

    /**
     * @var ?float $targetSplitsPerChunk This is an optional field which allows you to specify the number of splits you want per chunk. If not specified, the default 20 is used. However, you may want to use a different number.
     */
    #[JsonProperty('targetSplitsPerChunk')]
    public ?float $targetSplitsPerChunk;

    /**
     * @var ?array<string> $splitDelimiters This is an optional field which allows you to specify the delimiters to use when splitting the file before chunking the text. If not specified, the default [.!?\n] are used to split into sentences. However, you may want to use spaces or other delimiters.
     */
    #[JsonProperty('splitDelimiters'), ArrayType(['string'])]
    public ?array $splitDelimiters;

    /**
     * @var ?bool $rebalanceChunks This is an optional field which allows you to specify whether or not to rebalance the chunks created from the file. If not specified, the default true is used. If true, Trieve will evenly distribute remainder splits across chunks such that 66 splits with a target_splits_per_chunk of 20 will result in 3 chunks with 22 splits each.
     */
    #[JsonProperty('rebalanceChunks')]
    public ?bool $rebalanceChunks;

    /**
     * @param array{
     *   fileIds?: ?array<string>,
     *   websites?: ?array<string>,
     *   targetSplitsPerChunk?: ?float,
     *   splitDelimiters?: ?array<string>,
     *   rebalanceChunks?: ?bool,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->fileIds = $values['fileIds'] ?? null;
        $this->websites = $values['websites'] ?? null;
        $this->targetSplitsPerChunk = $values['targetSplitsPerChunk'] ?? null;
        $this->splitDelimiters = $values['splitDelimiters'] ?? null;
        $this->rebalanceChunks = $values['rebalanceChunks'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
