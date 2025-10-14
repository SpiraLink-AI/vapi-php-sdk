<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;
use Vapi\Core\Types\Union;

final class SayHookAction extends JsonSerializableType
{
    /**
     * This is the prompt for the assistant to generate a response based on existing conversation.
     * Can be a string or an array of chat messages.
     *
     * @var (
     *    string
     *   |array<(
     *    SystemMessage
     *   |UserMessage
     *   |AssistantMessage
     *   |ToolMessage
     *   |DeveloperMessage
     * )>
     * )|null $prompt
     */
    #[JsonProperty('prompt'), Union('string', [new Union(SystemMessage::class, UserMessage::class, AssistantMessage::class, ToolMessage::class, DeveloperMessage::class)], 'null')]
    public string|array|null $prompt;

    /**
     * @var ?array<string, mixed> $exact This is the message to say
     */
    #[JsonProperty('exact'), ArrayType(['string' => 'mixed'])]
    public ?array $exact;

    /**
     * @param array{
     *   prompt?: (
     *    string
     *   |array<(
     *    SystemMessage
     *   |UserMessage
     *   |AssistantMessage
     *   |ToolMessage
     *   |DeveloperMessage
     * )>
     * )|null,
     *   exact?: ?array<string, mixed>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->prompt = $values['prompt'] ?? null;
        $this->exact = $values['exact'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
