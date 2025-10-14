<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class CreateToolTemplateDto extends JsonSerializableType
{
    /**
     * @var ?CreateToolTemplateDtoDetails $details
     */
    #[JsonProperty('details')]
    public ?CreateToolTemplateDtoDetails $details;

    /**
     * @var ?CreateToolTemplateDtoProviderDetails $providerDetails
     */
    #[JsonProperty('providerDetails')]
    public ?CreateToolTemplateDtoProviderDetails $providerDetails;

    /**
     * @var ?ToolTemplateMetadata $metadata
     */
    #[JsonProperty('metadata')]
    public ?ToolTemplateMetadata $metadata;

    /**
     * @var ?value-of<CreateToolTemplateDtoVisibility> $visibility
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
     * @var ?value-of<CreateToolTemplateDtoProvider> $provider
     */
    #[JsonProperty('provider')]
    public ?string $provider;

    /**
     * @param array{
     *   type: 'tool',
     *   details?: ?CreateToolTemplateDtoDetails,
     *   providerDetails?: ?CreateToolTemplateDtoProviderDetails,
     *   metadata?: ?ToolTemplateMetadata,
     *   visibility?: ?value-of<CreateToolTemplateDtoVisibility>,
     *   name?: ?string,
     *   provider?: ?value-of<CreateToolTemplateDtoProvider>,
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
