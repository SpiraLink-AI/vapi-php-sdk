<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class UpdateUserRoleDto extends JsonSerializableType
{
    /**
     * @var string $userId
     */
    #[JsonProperty('userId')]
    public string $userId;

    /**
     * @var value-of<UpdateUserRoleDtoRole> $role
     */
    #[JsonProperty('role')]
    public string $role;

    /**
     * @param array{
     *   userId: string,
     *   role: value-of<UpdateUserRoleDtoRole>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->userId = $values['userId'];
        $this->role = $values['role'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
