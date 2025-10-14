<?php declare(strict_types=1);

namespace Vapi\Squads\Requests;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;
use Vapi\Types\AssistantOverrides;
use Vapi\Types\SquadMemberDto;

final class UpdateSquadDto extends JsonSerializableType
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
     * @param array{
     *   members: array<SquadMemberDto>,
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
    }
}
