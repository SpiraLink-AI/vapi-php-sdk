<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class TrieveKnowledgeBaseImport extends JsonSerializableType
{
    /**
     * @var 'import' $type This is to import an existing dataset from Trieve.
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var string $providerId This is the `datasetId` of the dataset on your Trieve account.
     */
    #[JsonProperty('providerId')]
    public string $providerId;

    /**
     * @param array{
     *   type: 'import',
     *   providerId: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->type = $values['type'];
        $this->providerId = $values['providerId'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
