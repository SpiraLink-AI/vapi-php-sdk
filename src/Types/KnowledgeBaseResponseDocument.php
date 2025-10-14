<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class KnowledgeBaseResponseDocument extends JsonSerializableType
{
    /**
     * @var string $content This is the content of the document.
     */
    #[JsonProperty('content')]
    public string $content;

    /**
     * @var float $similarity This is the similarity score of the document.
     */
    #[JsonProperty('similarity')]
    public float $similarity;

    /**
     * @var ?string $uuid This is the uuid of the document.
     */
    #[JsonProperty('uuid')]
    public ?string $uuid;

    /**
     * @param array{
     *   content: string,
     *   similarity: float,
     *   uuid?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->content = $values['content'];
        $this->similarity = $values['similarity'];
        $this->uuid = $values['uuid'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
