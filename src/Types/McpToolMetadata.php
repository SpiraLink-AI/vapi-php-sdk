<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class McpToolMetadata extends JsonSerializableType
{
    /**
     * @var ?value-of<McpToolMetadataProtocol> $protocol This is the protocol used for MCP communication. Defaults to Streamable HTTP.
     */
    #[JsonProperty('protocol')]
    public ?string $protocol;

    /**
     * @param array{
     *   protocol?: ?value-of<McpToolMetadataProtocol>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->protocol = $values['protocol'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
