<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class UpdateVonageCredentialDto extends JsonSerializableType
{
    /**
     * @var ?string $apiSecret This is not returned in the API.
     */
    #[JsonProperty('apiSecret')]
    public ?string $apiSecret;

    /**
     * @var ?string $name This is the name of credential. This is just for your reference.
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?string $apiKey
     */
    #[JsonProperty('apiKey')]
    public ?string $apiKey;

    /**
     * @param array{
     *   apiSecret?: ?string,
     *   name?: ?string,
     *   apiKey?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->apiSecret = $values['apiSecret'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->apiKey = $values['apiKey'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
