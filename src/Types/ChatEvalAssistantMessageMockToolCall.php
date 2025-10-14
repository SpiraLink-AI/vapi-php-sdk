<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class ChatEvalAssistantMessageMockToolCall extends JsonSerializableType
{
    /**
     * This is the name of the tool that will be called.
     * It should be one of the tools created in the organization.
     *
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?array<string, mixed> $arguments This is the arguments that will be passed to the tool call.
     */
    #[JsonProperty('arguments'), ArrayType(['string' => 'mixed'])]
    public ?array $arguments;

    /**
     * @param array{
     *   name: string,
     *   arguments?: ?array<string, mixed>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->arguments = $values['arguments'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
