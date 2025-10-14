<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class MakeToolProviderDetails extends JsonSerializableType
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
     * @var ?float $scenarioId
     */
    #[JsonProperty('scenarioId')]
    public ?float $scenarioId;

    /**
     * @var ?string $scenarioName
     */
    #[JsonProperty('scenarioName')]
    public ?string $scenarioName;

    /**
     * @var ?float $triggerHookId
     */
    #[JsonProperty('triggerHookId')]
    public ?float $triggerHookId;

    /**
     * @var ?string $triggerHookName
     */
    #[JsonProperty('triggerHookName')]
    public ?string $triggerHookName;

    /**
     * @param array{
     *   templateUrl?: ?string,
     *   setupInstructions?: ?array<ToolTemplateSetup>,
     *   scenarioId?: ?float,
     *   scenarioName?: ?string,
     *   triggerHookId?: ?float,
     *   triggerHookName?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->templateUrl = $values['templateUrl'] ?? null;
        $this->setupInstructions = $values['setupInstructions'] ?? null;
        $this->scenarioId = $values['scenarioId'] ?? null;
        $this->scenarioName = $values['scenarioName'] ?? null;
        $this->triggerHookId = $values['triggerHookId'] ?? null;
        $this->triggerHookName = $values['triggerHookName'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
