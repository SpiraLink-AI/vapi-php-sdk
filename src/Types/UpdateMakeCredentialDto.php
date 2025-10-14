<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class UpdateMakeCredentialDto extends JsonSerializableType
{
    /**
     * @var ?string $teamId Team ID
     */
    #[JsonProperty('teamId')]
    public ?string $teamId;

    /**
     * @var ?string $region Region of your application. For example: eu1, eu2, us1, us2
     */
    #[JsonProperty('region')]
    public ?string $region;

    /**
     * @var ?string $apiKey This is not returned in the API.
     */
    #[JsonProperty('apiKey')]
    public ?string $apiKey;

    /**
     * @var ?string $name This is the name of credential. This is just for your reference.
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @param array{
     *   teamId?: ?string,
     *   region?: ?string,
     *   apiKey?: ?string,
     *   name?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->teamId = $values['teamId'] ?? null;
        $this->region = $values['region'] ?? null;
        $this->apiKey = $values['apiKey'] ?? null;
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
