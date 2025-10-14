<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class GlobalNodePlan extends JsonSerializableType
{
    /**
     * This is the flag to determine if this node is a global node
     *
     * @default false
     *
     * @var ?bool $enabled
     */
    #[JsonProperty('enabled')]
    public ?bool $enabled;

    /**
     * This is the condition that will be checked to determine if the global node should be executed.
     *
     * @default ''
     *
     * @var ?string $enterCondition
     */
    #[JsonProperty('enterCondition')]
    public ?string $enterCondition;

    /**
     * @param array{
     *   enabled?: ?bool,
     *   enterCondition?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->enabled = $values['enabled'] ?? null;
        $this->enterCondition = $values['enterCondition'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
