<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class MessageTarget extends JsonSerializableType
{
    /**
     * This is the role of the message to target.
     *
     * If not specified, will find the position in the message history ignoring role (effectively `any`).
     *
     * @var ?value-of<MessageTargetRole> $role
     */
    #[JsonProperty('role')]
    public ?string $role;

    /**
     * This is the position of the message to target.
     * - Negative numbers: Count from end (-1 = most recent, -2 = second most recent)
     * - 0: First/oldest message in history
     * - Positive numbers: Specific position (0-indexed from start)
     *
     * @default -1 (most recent message)
     *
     * @var ?float $position
     */
    #[JsonProperty('position')]
    public ?float $position;

    /**
     * @param array{
     *   role?: ?value-of<MessageTargetRole>,
     *   position?: ?float,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->role = $values['role'] ?? null;
        $this->position = $values['position'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
