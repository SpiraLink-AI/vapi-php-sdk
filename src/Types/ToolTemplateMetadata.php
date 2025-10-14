<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class ToolTemplateMetadata extends JsonSerializableType
{
    /**
     * @var ?string $collectionType
     */
    #[JsonProperty('collectionType')]
    public ?string $collectionType;

    /**
     * @var ?string $collectionId
     */
    #[JsonProperty('collectionId')]
    public ?string $collectionId;

    /**
     * @var ?string $collectionName
     */
    #[JsonProperty('collectionName')]
    public ?string $collectionName;

    /**
     * @param array{
     *   collectionType?: ?string,
     *   collectionId?: ?string,
     *   collectionName?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->collectionType = $values['collectionType'] ?? null;
        $this->collectionId = $values['collectionId'] ?? null;
        $this->collectionName = $values['collectionName'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
