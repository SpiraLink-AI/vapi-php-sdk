<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class TesterPlan extends JsonSerializableType
{
    /**
     * Pass a transient assistant to use for the test assistant.
     *
     * Make sure to write a detailed system prompt for a test assistant, and use the {{test.script}} variable to access the test script.
     *
     * @var ?CreateAssistantDto $assistant
     */
    #[JsonProperty('assistant')]
    public ?CreateAssistantDto $assistant;

    /**
     * Pass an assistant id that can be access
     *
     * Make sure to write a detailed system prompt for the test assistant, and use the {{test.script}} variable to access the test script.
     *
     * @var ?string $assistantId
     */
    #[JsonProperty('assistantId')]
    public ?string $assistantId;

    /**
     * Add any assistant overrides to the test assistant.
     *
     * One use case is if you want to pass custom variables into the test using variableValues, that you can then access in the script
     * and rubric using {{varName}}.
     *
     * @var ?AssistantOverrides $assistantOverrides
     */
    #[JsonProperty('assistantOverrides')]
    public ?AssistantOverrides $assistantOverrides;

    /**
     * @param array{
     *   assistant?: ?CreateAssistantDto,
     *   assistantId?: ?string,
     *   assistantOverrides?: ?AssistantOverrides,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->assistant = $values['assistant'] ?? null;
        $this->assistantId = $values['assistantId'] ?? null;
        $this->assistantOverrides = $values['assistantOverrides'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
