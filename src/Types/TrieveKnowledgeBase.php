<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class TrieveKnowledgeBase extends JsonSerializableType
{
    /**
     * This knowledge base is provided by Trieve.
     *
     * To learn more about Trieve, visit https://trieve.ai.
     *
     * @var 'trieve' $provider
     */
    #[JsonProperty('provider')]
    public string $provider;

    /**
     * @var ?string $name This is the name of the knowledge base.
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * This is the searching plan used when searching for relevant chunks from the vector store.
     *
     * You should configure this if you're running into these issues:
     * - Too much unnecessary context is being fed as knowledge base context.
     * - Not enough relevant context is being fed as knowledge base context.
     *
     * @var ?TrieveKnowledgeBaseSearchPlan $searchPlan
     */
    #[JsonProperty('searchPlan')]
    public ?TrieveKnowledgeBaseSearchPlan $searchPlan;

    /**
     * @var ?TrieveKnowledgeBaseImport $createPlan This is the plan if you want us to create/import a new vector store using Trieve.
     */
    #[JsonProperty('createPlan')]
    public ?TrieveKnowledgeBaseImport $createPlan;

    /**
     * @var string $id This is the id of the knowledge base.
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $orgId This is the org id of the knowledge base.
     */
    #[JsonProperty('orgId')]
    public string $orgId;

    /**
     * @param array{
     *   provider: 'trieve',
     *   id: string,
     *   orgId: string,
     *   name?: ?string,
     *   searchPlan?: ?TrieveKnowledgeBaseSearchPlan,
     *   createPlan?: ?TrieveKnowledgeBaseImport,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->provider = $values['provider'];
        $this->name = $values['name'] ?? null;
        $this->searchPlan = $values['searchPlan'] ?? null;
        $this->createPlan = $values['createPlan'] ?? null;
        $this->id = $values['id'];
        $this->orgId = $values['orgId'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
