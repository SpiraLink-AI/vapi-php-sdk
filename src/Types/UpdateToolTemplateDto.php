<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class UpdateToolTemplateDto extends JsonSerializableType
{
    /**
     * @var ?UpdateToolTemplateDtoDetails $details
     */
    #[JsonProperty('details')]
    public ?UpdateToolTemplateDtoDetails $details;

    /**
     * @var ?UpdateToolTemplateDtoProviderDetails $providerDetails
     */
    #[JsonProperty('providerDetails')]
    public ?UpdateToolTemplateDtoProviderDetails $providerDetails;

    /**
     * @var ?ToolTemplateMetadata $metadata
     */
    #[JsonProperty('metadata')]
    public ?ToolTemplateMetadata $metadata;

    /**
     * @var ?value-of<UpdateToolTemplateDtoVisibility> $visibility
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
     * @var ?value-of<UpdateToolTemplateDtoProvider> $provider
     */
    #[JsonProperty('provider')]
    public ?string $provider;

    /**
     * @param array{
     *   type: 'tool',
     *   details?: ?UpdateToolTemplateDtoDetails,
     *   providerDetails?: ?UpdateToolTemplateDtoProviderDetails,
     *   metadata?: ?ToolTemplateMetadata,
     *   visibility?: ?value-of<UpdateToolTemplateDtoVisibility>,
     *   name?: ?string,
     *   provider?: ?value-of<UpdateToolTemplateDtoProvider>,
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
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
