<?php declare(strict_types=1);

namespace Vapi\Types;

use DateTime;
use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\Date;

final class Template extends JsonSerializableType
{
    /**
     * @var ?TemplateDetails $details
     */
    #[JsonProperty('details')]
    public ?TemplateDetails $details;

    /**
     * @var ?TemplateProviderDetails $providerDetails
     */
    #[JsonProperty('providerDetails')]
    public ?TemplateProviderDetails $providerDetails;

    /**
     * @var ?ToolTemplateMetadata $metadata
     */
    #[JsonProperty('metadata')]
    public ?ToolTemplateMetadata $metadata;

    /**
     * @var ?value-of<TemplateVisibility> $visibility
     */
    #[JsonProperty('visibility')]
    public ?string $visibility;

    /**
     * @var 'tool' $type
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var ?string $name The name of the template. This is just for your own reference.
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?value-of<TemplateProvider> $provider
     */
    #[JsonProperty('provider')]
    public ?string $provider;

    /**
     * @var string $id The unique identifier for the template.
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $orgId The unique identifier for the organization that this template belongs to.
     */
    #[JsonProperty('orgId')]
    public string $orgId;

    /**
     * @var DateTime $createdAt The ISO 8601 date-time string of when the template was created.
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $createdAt;

    /**
     * @var DateTime $updatedAt The ISO 8601 date-time string of when the template was last updated.
     */
    #[JsonProperty('updatedAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $updatedAt;

    /**
     * @param array{
     *   type: 'tool',
     *   id: string,
     *   orgId: string,
     *   createdAt: DateTime,
     *   updatedAt: DateTime,
     *   details?: ?TemplateDetails,
     *   providerDetails?: ?TemplateProviderDetails,
     *   metadata?: ?ToolTemplateMetadata,
     *   visibility?: ?value-of<TemplateVisibility>,
     *   name?: ?string,
     *   provider?: ?value-of<TemplateProvider>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->details = $values['details'] ?? null;
        $this->providerDetails = $values['providerDetails'] ?? null;
        $this->metadata = $values['metadata'] ?? null;
        $this->visibility = $values['visibility'] ?? null;
        $this->type = $values['type'];
        $this->name = $values['name'] ?? null;
        $this->provider = $values['provider'] ?? null;
        $this->id = $values['id'];
        $this->orgId = $values['orgId'];
        $this->createdAt = $values['createdAt'];
        $this->updatedAt = $values['updatedAt'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
