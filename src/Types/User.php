<?php declare(strict_types=1);

namespace Vapi\Types;

use DateTime;
use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\Date;

final class User extends JsonSerializableType
{
    /**
     * @var string $id This is the unique identifier for the profile or user.
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var DateTime $createdAt This is the ISO 8601 date-time string of when the profile was created.
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $createdAt;

    /**
     * @var DateTime $updatedAt This is the ISO 8601 date-time string of when the profile was last updated.
     */
    #[JsonProperty('updatedAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $updatedAt;

    /**
     * @var string $email This is the email of the user that is associated with the profile.
     */
    #[JsonProperty('email')]
    public string $email;

    /**
     * @var ?string $fullName This is the full name of the user that is associated with the profile.
     */
    #[JsonProperty('fullName')]
    public ?string $fullName;

    /**
     * @param array{
     *   id: string,
     *   createdAt: DateTime,
     *   updatedAt: DateTime,
     *   email: string,
     *   fullName?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->createdAt = $values['createdAt'];
        $this->updatedAt = $values['updatedAt'];
        $this->email = $values['email'];
        $this->fullName = $values['fullName'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
