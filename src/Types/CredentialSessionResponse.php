<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class CredentialSessionResponse extends JsonSerializableType
{
    /**
     * @var string $sessionToken
     */
    #[JsonProperty('sessionToken')]
    public string $sessionToken;

    /**
     * @param array{
     *   sessionToken: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->sessionToken = $values['sessionToken'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
