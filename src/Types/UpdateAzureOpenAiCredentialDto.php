<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class UpdateAzureOpenAiCredentialDto extends JsonSerializableType
{
    /**
     * @var ?value-of<UpdateAzureOpenAiCredentialDtoRegion> $region
     */
    #[JsonProperty('region')]
    public ?string $region;

    /**
     * @var ?array<value-of<UpdateAzureOpenAiCredentialDtoModelsItem>> $models
     */
    #[JsonProperty('models'), ArrayType(['string'])]
    public ?array $models;

    /**
     * @var ?string $openAiKey This is not returned in the API.
     */
    #[JsonProperty('openAIKey')]
    public ?string $openAiKey;

    /**
     * @var ?string $ocpApimSubscriptionKey This is not returned in the API.
     */
    #[JsonProperty('ocpApimSubscriptionKey')]
    public ?string $ocpApimSubscriptionKey;

    /**
     * @var ?string $name This is the name of credential. This is just for your reference.
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?string $openAiEndpoint
     */
    #[JsonProperty('openAIEndpoint')]
    public ?string $openAiEndpoint;

    /**
     * @param array{
     *   region?: ?value-of<UpdateAzureOpenAiCredentialDtoRegion>,
     *   models?: ?array<value-of<UpdateAzureOpenAiCredentialDtoModelsItem>>,
     *   openAiKey?: ?string,
     *   ocpApimSubscriptionKey?: ?string,
     *   name?: ?string,
     *   openAiEndpoint?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->region = $values['region'] ?? null;
        $this->models = $values['models'] ?? null;
        $this->openAiKey = $values['openAiKey'] ?? null;
        $this->ocpApimSubscriptionKey = $values['ocpApimSubscriptionKey'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->openAiEndpoint = $values['openAiEndpoint'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
