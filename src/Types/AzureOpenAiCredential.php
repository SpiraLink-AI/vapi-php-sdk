<?php declare(strict_types=1);

namespace Vapi\Types;

use DateTime;
use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;
use Vapi\Core\Types\Date;

final class AzureOpenAiCredential extends JsonSerializableType
{
    /**
     * @var 'azure-openai' $provider
     */
    #[JsonProperty('provider')]
    public string $provider;

    /**
     * @var value-of<AzureOpenAiCredentialRegion> $region
     */
    #[JsonProperty('region')]
    public string $region;

    /**
     * @var array<value-of<AzureOpenAiCredentialModelsItem>> $models
     */
    #[JsonProperty('models'), ArrayType(['string'])]
    public array $models;

    /**
     * @var string $openAiKey This is not returned in the API.
     */
    #[JsonProperty('openAIKey')]
    public string $openAiKey;

    /**
     * @var ?string $ocpApimSubscriptionKey This is not returned in the API.
     */
    #[JsonProperty('ocpApimSubscriptionKey')]
    public ?string $ocpApimSubscriptionKey;

    /**
     * @var string $id This is the unique identifier for the credential.
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $orgId This is the unique identifier for the org that this credential belongs to.
     */
    #[JsonProperty('orgId')]
    public string $orgId;

    /**
     * @var DateTime $createdAt This is the ISO 8601 date-time string of when the credential was created.
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $createdAt;

    /**
     * @var DateTime $updatedAt This is the ISO 8601 date-time string of when the assistant was last updated.
     */
    #[JsonProperty('updatedAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $updatedAt;

    /**
     * @var ?string $name This is the name of credential. This is just for your reference.
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var string $openAiEndpoint
     */
    #[JsonProperty('openAIEndpoint')]
    public string $openAiEndpoint;

    /**
     * @param array{
     *   provider: 'azure-openai',
     *   region: value-of<AzureOpenAiCredentialRegion>,
     *   models: array<value-of<AzureOpenAiCredentialModelsItem>>,
     *   openAiKey: string,
     *   id: string,
     *   orgId: string,
     *   createdAt: DateTime,
     *   updatedAt: DateTime,
     *   openAiEndpoint: string,
     *   ocpApimSubscriptionKey?: ?string,
     *   name?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->provider = $values['provider'];
        $this->region = $values['region'];
        $this->models = $values['models'];
        $this->openAiKey = $values['openAiKey'];
        $this->ocpApimSubscriptionKey = $values['ocpApimSubscriptionKey'] ?? null;
        $this->id = $values['id'];
        $this->orgId = $values['orgId'];
        $this->createdAt = $values['createdAt'];
        $this->updatedAt = $values['updatedAt'];
        $this->name = $values['name'] ?? null;
        $this->openAiEndpoint = $values['openAiEndpoint'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
