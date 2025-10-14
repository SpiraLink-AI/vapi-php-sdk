<?php declare(strict_types=1);

namespace Vapi\Types;

use DateTime;
use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\Date;

final class Token extends JsonSerializableType
{
    /**
     * @var ?value-of<TokenTag> $tag This is the tag for the token. It represents its scope.
     */
    #[JsonProperty('tag')]
    public ?string $tag;

    /**
     * @var string $id This is the unique identifier for the token.
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $orgId This is unique identifier for the org that this token belongs to.
     */
    #[JsonProperty('orgId')]
    public string $orgId;

    /**
     * @var DateTime $createdAt This is the ISO 8601 date-time string of when the token was created.
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $createdAt;

    /**
     * @var DateTime $updatedAt This is the ISO 8601 date-time string of when the token was last updated.
     */
    #[JsonProperty('updatedAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $updatedAt;

    /**
     * @var string $value This is the token key.
     */
    #[JsonProperty('value')]
    public string $value;

    /**
     * @var ?string $name This is the name of the token. This is just for your own reference.
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?TokenRestrictions $restrictions This are the restrictions for the token.
     */
    #[JsonProperty('restrictions')]
    public ?TokenRestrictions $restrictions;

    /**
     * @param array{
     *   id: string,
     *   orgId: string,
     *   createdAt: DateTime,
     *   updatedAt: DateTime,
     *   value: string,
     *   tag?: ?value-of<TokenTag>,
     *   name?: ?string,
     *   restrictions?: ?TokenRestrictions,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->tag = $values['tag'] ?? null;
        $this->id = $values['id'];
        $this->orgId = $values['orgId'];
        $this->createdAt = $values['createdAt'];
        $this->updatedAt = $values['updatedAt'];
        $this->value = $values['value'];
        $this->name = $values['name'] ?? null;
        $this->restrictions = $values['restrictions'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
