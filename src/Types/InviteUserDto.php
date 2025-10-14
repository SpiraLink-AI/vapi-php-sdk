<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class InviteUserDto extends JsonSerializableType
{
    /**
     * @var array<string> $emails
     */
    #[JsonProperty('emails'), ArrayType(['string'])]
    public array $emails;

    /**
     * @var value-of<InviteUserDtoRole> $role
     */
    #[JsonProperty('role')]
    public string $role;

    /**
     * @var ?string $redirectTo
     */
    #[JsonProperty('redirectTo')]
    public ?string $redirectTo;

    /**
     * @param array{
     *   emails: array<string>,
     *   role: value-of<InviteUserDtoRole>,
     *   redirectTo?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->emails = $values['emails'];
        $this->role = $values['role'];
        $this->redirectTo = $values['redirectTo'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
