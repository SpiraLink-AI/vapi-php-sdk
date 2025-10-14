<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class CredentialActionRequest extends JsonSerializableType
{
    /**
     * @var string $actionName
     */
    #[JsonProperty('action_name')]
    public string $actionName;

    /**
     * @var array<string, mixed> $input
     */
    #[JsonProperty('input'), ArrayType(['string' => 'mixed'])]
    public array $input;

    /**
     * @param array{
     *   actionName: string,
     *   input: array<string, mixed>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->actionName = $values['actionName'];
        $this->input = $values['input'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
