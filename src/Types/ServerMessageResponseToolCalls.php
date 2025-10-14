<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class ServerMessageResponseToolCalls extends JsonSerializableType
{
    /**
     * @var ?array<ToolCallResult> $results These are the results of the "tool-calls" message.
     */
    #[JsonProperty('results'), ArrayType([ToolCallResult::class])]
    public ?array $results;

    /**
     * @var ?string $error This is the error message if the tool call was not successful.
     */
    #[JsonProperty('error')]
    public ?string $error;

    /**
     * @param array{
     *   results?: ?array<ToolCallResult>,
     *   error?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->results = $values['results'] ?? null;
        $this->error = $values['error'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
