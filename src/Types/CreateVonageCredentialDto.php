<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class CreateVonageCredentialDto extends JsonSerializableType
{
    /**
     * @var string $apiSecret This is not returned in the API.
     */
    #[JsonProperty('apiSecret')]
    public string $apiSecret;

    /**
     * @var string $apiKey
     */
    #[JsonProperty('apiKey')]
    public string $apiKey;

    /**
     * @var ?string $name This is the name of credential. This is just for your reference.
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @param array{
     *   apiSecret: string,
     *   apiKey: string,
     *   name?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiSecret = $values['apiSecret'];
        $this->apiKey = $values['apiKey'];
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
