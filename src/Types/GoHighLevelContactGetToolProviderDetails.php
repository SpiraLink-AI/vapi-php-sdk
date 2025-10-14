<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class GoHighLevelContactGetToolProviderDetails extends JsonSerializableType
{
    /**
     * @var ?string $templateUrl This is the Template URL or the Snapshot URL corresponding to the Template.
     */
    #[JsonProperty('templateUrl')]
    public ?string $templateUrl;

    /**
     * @var ?array<ToolTemplateSetup> $setupInstructions
     */
    #[JsonProperty('setupInstructions'), ArrayType([ToolTemplateSetup::class])]
    public ?array $setupInstructions;

    /**
     * @param array{
     *   templateUrl?: ?string,
     *   setupInstructions?: ?array<ToolTemplateSetup>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->templateUrl = $values['templateUrl'] ?? null;
        $this->setupInstructions = $values['setupInstructions'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
