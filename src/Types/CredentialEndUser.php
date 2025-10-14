<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class CredentialEndUser extends JsonSerializableType
{
    /**
     * @var string $endUserId
     */
    #[JsonProperty('endUserId')]
    public string $endUserId;

    /**
     * @var string $organizationId
     */
    #[JsonProperty('organizationId')]
    public string $organizationId;

    /**
     * @var ?array<string, mixed> $tags
     */
    #[JsonProperty('tags'), ArrayType(['string' => 'mixed'])]
    public ?array $tags;

    /**
     * @param array{
     *   endUserId: string,
     *   organizationId: string,
     *   tags?: ?array<string, mixed>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->endUserId = $values['endUserId'];
        $this->organizationId = $values['organizationId'];
        $this->tags = $values['tags'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
