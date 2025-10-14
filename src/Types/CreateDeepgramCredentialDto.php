<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class CreateDeepgramCredentialDto extends JsonSerializableType
{
    /**
     * @var string $apiKey This is not returned in the API.
     */
    #[JsonProperty('apiKey')]
    public string $apiKey;

    /**
     * @var ?string $apiUrl This can be used to point to an onprem Deepgram instance. Defaults to api.deepgram.com.
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
     *   apiKey: string,
     *   apiUrl?: ?string,
     *   name?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->apiKey = $values['apiKey'];
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
