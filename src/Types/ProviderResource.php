<?php declare(strict_types=1);

namespace Vapi\Types;

use DateTime;
use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\Date;

final class ProviderResource extends JsonSerializableType
{
    /**
     * @var string $id This is the unique identifier for the provider resource.
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $orgId This is the unique identifier for the org that this provider resource belongs to.
     */
    #[JsonProperty('orgId')]
    public string $orgId;

    /**
     * @var DateTime $createdAt This is the ISO 8601 date-time string of when the provider resource was created.
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $createdAt;

    /**
     * @var DateTime $updatedAt This is the ISO 8601 date-time string of when the provider resource was last updated.
     */
    #[JsonProperty('updatedAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $updatedAt;

    /**
     * @var '11labs' $provider This is the provider that manages this resource.
     */
    #[JsonProperty('provider')]
    public string $provider;

    /**
     * @var 'pronunciation-dictionary' $resourceName This is the name/type of the resource.
     */
    #[JsonProperty('resourceName')]
    public string $resourceName;

    /**
     * @var string $resourceId This is the provider-specific identifier for the resource.
     */
    #[JsonProperty('resourceId')]
    public string $resourceId;

    /**
     * @var ElevenLabsPronunciationDictionary $resource This is the full resource data from the provider's API.
     */
    #[JsonProperty('resource')]
    public ElevenLabsPronunciationDictionary $resource;

    /**
     * @param array{
     *   id: string,
     *   orgId: string,
     *   createdAt: DateTime,
     *   updatedAt: DateTime,
     *   provider: '11labs',
     *   resourceName: 'pronunciation-dictionary',
     *   resourceId: string,
     *   resource: ElevenLabsPronunciationDictionary,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->orgId = $values['orgId'];
        $this->createdAt = $values['createdAt'];
        $this->updatedAt = $values['updatedAt'];
        $this->provider = $values['provider'];
        $this->resourceName = $values['resourceName'];
        $this->resourceId = $values['resourceId'];
        $this->resource = $values['resource'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
