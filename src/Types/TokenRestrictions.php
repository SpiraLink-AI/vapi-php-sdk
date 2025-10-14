<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class TokenRestrictions extends JsonSerializableType
{
    /**
     * @var ?bool $enabled This determines whether the token is enabled or disabled. Default is true, it's enabled.
     */
    #[JsonProperty('enabled')]
    public ?bool $enabled;

    /**
     * This determines the allowed origins for this token. Validates the `Origin` header. Default is any origin.
     *
     * Only relevant for `public` tokens.
     *
     * @var ?array<string> $allowedOrigins
     */
    #[JsonProperty('allowedOrigins'), ArrayType(['string'])]
    public ?array $allowedOrigins;

    /**
     * This determines which assistantIds can be used when creating a call. Default is any assistantId.
     *
     * Only relevant for `public` tokens.
     *
     * @var ?array<string> $allowedAssistantIds
     */
    #[JsonProperty('allowedAssistantIds'), ArrayType(['string'])]
    public ?array $allowedAssistantIds;

    /**
     * This determines whether transient assistants can be used when creating a call. Default is true.
     *
     * If `allowedAssistantIds` is provided, this is automatically false.
     *
     * Only relevant for `public` tokens.
     *
     * @var ?bool $allowTransientAssistant
     */
    #[JsonProperty('allowTransientAssistant')]
    public ?bool $allowTransientAssistant;

    /**
     * @param array{
     *   enabled?: ?bool,
     *   allowedOrigins?: ?array<string>,
     *   allowedAssistantIds?: ?array<string>,
     *   allowTransientAssistant?: ?bool,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->enabled = $values['enabled'] ?? null;
        $this->allowedOrigins = $values['allowedOrigins'] ?? null;
        $this->allowedAssistantIds = $values['allowedAssistantIds'] ?? null;
        $this->allowTransientAssistant = $values['allowTransientAssistant'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
