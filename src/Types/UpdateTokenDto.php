<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class UpdateTokenDto extends JsonSerializableType
{
    /**
     * @var ?value-of<UpdateTokenDtoTag> $tag This is the tag for the token. It represents its scope.
     */
    #[JsonProperty('tag')]
    public ?string $tag;

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
     *   tag?: ?value-of<UpdateTokenDtoTag>,
     *   name?: ?string,
     *   restrictions?: ?TokenRestrictions,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->tag = $values['tag'] ?? null;
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
