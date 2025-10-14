<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class ChatAssistantOverrides extends JsonSerializableType
{
    /**
     * @var ?array<string, mixed> $variableValues Variable values for template substitution
     */
    #[JsonProperty('variableValues'), ArrayType(['string' => 'mixed'])]
    public ?array $variableValues;

    /**
     * @param array{
     *   variableValues?: ?array<string, mixed>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->variableValues = $values['variableValues'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
