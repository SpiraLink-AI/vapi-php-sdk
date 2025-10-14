<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class UpdateLangfuseCredentialDto extends JsonSerializableType
{
    /**
     * @var ?string $publicKey The public key for Langfuse project. Eg: pk-lf-...
     */
    #[JsonProperty('publicKey')]
    public ?string $publicKey;

    /**
     * @var ?string $apiKey The secret key for Langfuse project. Eg: sk-lf-... .This is not returned in the API.
     */
    #[JsonProperty('apiKey')]
    public ?string $apiKey;

    /**
     * @var ?string $apiUrl The host URL for Langfuse project. Eg: https://cloud.langfuse.com
     */
    #[JsonProperty('apiUrl')]
    public ?string $apiUrl;

    /**
     * @var ?string $name This is the name of credential. This is just for your reference.
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @param array{
     *   publicKey?: ?string,
     *   apiKey?: ?string,
     *   apiUrl?: ?string,
     *   name?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->publicKey = $values['publicKey'] ?? null;
        $this->apiKey = $values['apiKey'] ?? null;
        $this->apiUrl = $values['apiUrl'] ?? null;
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
