<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class EvalRunTargetAssistant extends JsonSerializableType
{
    /**
     * @var ?CreateAssistantDto $assistant This is the transient assistant that will be run against the eval
     */
    #[JsonProperty('assistant')]
    public ?CreateAssistantDto $assistant;

    /**
     * @var ?AssistantOverrides $assistantOverrides This is the overrides that will be applied to the assistant.
     */
    #[JsonProperty('assistantOverrides')]
    public ?AssistantOverrides $assistantOverrides;

    /**
     * @var ?string $assistantId This is the id of the assistant that will be run against the eval
     */
    #[JsonProperty('assistantId')]
    public ?string $assistantId;

    /**
     * @param array{
     *   assistant?: ?CreateAssistantDto,
     *   assistantOverrides?: ?AssistantOverrides,
     *   assistantId?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->assistant = $values['assistant'] ?? null;
        $this->assistantOverrides = $values['assistantOverrides'] ?? null;
        $this->assistantId = $values['assistantId'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
