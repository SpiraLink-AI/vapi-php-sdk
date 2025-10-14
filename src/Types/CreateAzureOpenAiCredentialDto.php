<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class CreateAzureOpenAiCredentialDto extends JsonSerializableType
{
    /**
     * @var value-of<CreateAzureOpenAiCredentialDtoRegion> $region
     */
    #[JsonProperty('region')]
    public string $region;

    /**
     * @var array<value-of<CreateAzureOpenAiCredentialDtoModelsItem>> $models
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
     * @var string $openAiEndpoint
     */
    #[JsonProperty('openAIEndpoint')]
    public string $openAiEndpoint;

    /**
     * @var ?string $name This is the name of credential. This is just for your reference.
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @param array{
     *   region: value-of<CreateAzureOpenAiCredentialDtoRegion>,
     *   models: array<value-of<CreateAzureOpenAiCredentialDtoModelsItem>>,
     *   openAiKey: string,
     *   openAiEndpoint: string,
     *   ocpApimSubscriptionKey?: ?string,
     *   name?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->region = $values['region'];
        $this->models = $values['models'];
        $this->openAiKey = $values['openAiKey'];
        $this->ocpApimSubscriptionKey = $values['ocpApimSubscriptionKey'] ?? null;
        $this->openAiEndpoint = $values['openAiEndpoint'];
        $this->name = $values['name'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
