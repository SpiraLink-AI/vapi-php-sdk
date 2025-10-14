<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class KnowledgeBase extends JsonSerializableType
{
    /**
     * @var string $name The name of the knowledge base
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var 'google' $provider The provider of the knowledge base
     */
    #[JsonProperty('provider')]
    public string $provider;

    /**
     * @var ?value-of<KnowledgeBaseModel> $model The model to use for the knowledge base
     */
    #[JsonProperty('model')]
    public ?string $model;

    /**
     * @var string $description A description of the knowledge base
     */
    #[JsonProperty('description')]
    public string $description;

    /**
     * @var array<string> $fileIds The file IDs associated with this knowledge base
     */
    #[JsonProperty('fileIds'), ArrayType(['string'])]
    public array $fileIds;

    /**
     * @param array{
     *   name: string,
     *   provider: 'google',
     *   description: string,
     *   fileIds: array<string>,
     *   model?: ?value-of<KnowledgeBaseModel>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->provider = $values['provider'];
        $this->model = $values['model'] ?? null;
        $this->description = $values['description'];
        $this->fileIds = $values['fileIds'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
