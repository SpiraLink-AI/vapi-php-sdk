<?php declare(strict_types=1);

namespace Vapi\Types;

use DateTime;
use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;
use Vapi\Core\Types\Date;

final class Squad extends JsonSerializableType
{
    /**
     * @var ?string $name This is the name of the squad.
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * This is the list of assistants that make up the squad.
     *
     * The call will start with the first assistant in the list.
     *
     * @var array<SquadMemberDto> $members
     */
    #[JsonProperty('members'), ArrayType([SquadMemberDto::class])]
    public array $members;

    /**
     * This can be used to override all the assistants' settings and provide values for their template variables.
     *
     * Both `membersOverrides` and `members[n].assistantOverrides` can be used together. First, `members[n].assistantOverrides` is applied. Then, `membersOverrides` is applied as a global override.
     *
     * @var ?AssistantOverrides $membersOverrides
     */
    #[JsonProperty('membersOverrides')]
    public ?AssistantOverrides $membersOverrides;

    /**
     * @var string $id This is the unique identifier for the squad.
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $orgId This is the unique identifier for the org that this squad belongs to.
     */
    #[JsonProperty('orgId')]
    public string $orgId;

    /**
     * @var DateTime $createdAt This is the ISO 8601 date-time string of when the squad was created.
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $createdAt;

    /**
     * @var DateTime $updatedAt This is the ISO 8601 date-time string of when the squad was last updated.
     */
    #[JsonProperty('updatedAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $updatedAt;

    /**
     * @param array{
     *   members: array<SquadMemberDto>,
     *   id: string,
     *   orgId: string,
     *   createdAt: DateTime,
     *   updatedAt: DateTime,
     *   name?: ?string,
     *   membersOverrides?: ?AssistantOverrides,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'] ?? null;
        $this->members = $values['members'];
        $this->membersOverrides = $values['membersOverrides'] ?? null;
        $this->id = $values['id'];
        $this->orgId = $values['orgId'];
        $this->createdAt = $values['createdAt'];
        $this->updatedAt = $values['updatedAt'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
