<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class GhlToolProviderDetails extends JsonSerializableType
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
     * @var ?string $workflowId
     */
    #[JsonProperty('workflowId')]
    public ?string $workflowId;

    /**
     * @var ?string $workflowName
     */
    #[JsonProperty('workflowName')]
    public ?string $workflowName;

    /**
     * @var ?string $webhookHookId
     */
    #[JsonProperty('webhookHookId')]
    public ?string $webhookHookId;

    /**
     * @var ?string $webhookHookName
     */
    #[JsonProperty('webhookHookName')]
    public ?string $webhookHookName;

    /**
     * @var ?string $locationId
     */
    #[JsonProperty('locationId')]
    public ?string $locationId;

    /**
     * @param array{
     *   templateUrl?: ?string,
     *   setupInstructions?: ?array<ToolTemplateSetup>,
     *   workflowId?: ?string,
     *   workflowName?: ?string,
     *   webhookHookId?: ?string,
     *   webhookHookName?: ?string,
     *   locationId?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->templateUrl = $values['templateUrl'] ?? null;
        $this->setupInstructions = $values['setupInstructions'] ?? null;
        $this->workflowId = $values['workflowId'] ?? null;
        $this->workflowName = $values['workflowName'] ?? null;
        $this->webhookHookId = $values['webhookHookId'] ?? null;
        $this->webhookHookName = $values['webhookHookName'] ?? null;
        $this->locationId = $values['locationId'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
