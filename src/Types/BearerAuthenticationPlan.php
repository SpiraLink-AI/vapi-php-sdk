<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class BearerAuthenticationPlan extends JsonSerializableType
{
    /**
     * @var string $token This is the bearer token value.
     */
    #[JsonProperty('token')]
    public string $token;

    /**
     * @var ?string $headerName This is the header name where the bearer token will be sent. Defaults to 'Authorization'.
     */
    #[JsonProperty('headerName')]
    public ?string $headerName;

    /**
     * @var ?bool $bearerPrefixEnabled Whether to include the 'Bearer ' prefix in the header value. Defaults to true.
     */
    #[JsonProperty('bearerPrefixEnabled')]
    public ?bool $bearerPrefixEnabled;

    /**
     * @param array{
     *   token: string,
     *   headerName?: ?string,
     *   bearerPrefixEnabled?: ?bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->token = $values['token'];
        $this->headerName = $values['headerName'] ?? null;
        $this->bearerPrefixEnabled = $values['bearerPrefixEnabled'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
