<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class JwtResponse extends JsonSerializableType
{
    /**
     * @var string $accessToken
     */
    #[JsonProperty('accessToken')]
    public string $accessToken;

    /**
     * @var array<string, mixed> $aud
     */
    #[JsonProperty('aud'), ArrayType(['string' => 'mixed'])]
    public array $aud;

    /**
     * @param array{
     *   accessToken: string,
     *   aud: array<string, mixed>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->accessToken = $values['accessToken'];
        $this->aud = $values['aud'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
