<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class CreateMinimaxCredentialDto extends JsonSerializableType
{
    /**
     * @var string $apiKey This is not returned in the API.
     */
    #[JsonProperty('apiKey')]
    public string $apiKey;

    /**
     * @var string $groupId This is the Minimax Group ID.
     */
    #[JsonProperty('groupId')]
    public string $groupId;

    /**
     * @var ?string $name This is the name of credential. This is just for your reference.
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @param array{
     *   apiKey: string,
     *   groupId: string,
     *   name?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
        $this->groupId = $values['groupId'];
        $this->name = $values['name'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
