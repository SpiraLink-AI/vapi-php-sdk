<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class Server extends JsonSerializableType
{
    /**
     * This is the timeout in seconds for the request. Defaults to 20 seconds.
     *
     * @default 20
     *
     * @var ?float $timeoutSeconds
     */
    #[JsonProperty('timeoutSeconds')]
    public ?float $timeoutSeconds;

    /**
     * @var ?string $credentialId The credential ID for server authentication
     */
    #[JsonProperty('credentialId')]
    public ?string $credentialId;

    /**
     * @var ?string $url This is where the request will be sent.
     */
    #[JsonProperty('url')]
    public ?string $url;

    /**
     * These are the headers to include in the request.
     *
     * Each key-value pair represents a header name and its value.
     *
     * Note: Specifying an Authorization header here will override the authorization provided by the `credentialId` (if provided). This is an anti-pattern and should be avoided outside of edge case scenarios.
     *
     * @var ?array<string, mixed> $headers
     */
    #[JsonProperty('headers'), ArrayType(['string' => 'mixed'])]
    public ?array $headers;

    /**
     * This is the backoff plan if the request fails. Defaults to undefined (the request will not be retried).
     *
     * @default undefined (the request will not be retried)
     *
     * @var ?BackoffPlan $backoffPlan
     */
    #[JsonProperty('backoffPlan')]
    public ?BackoffPlan $backoffPlan;

    /**
     * @param array{
     *   timeoutSeconds?: ?float,
     *   credentialId?: ?string,
     *   url?: ?string,
     *   headers?: ?array<string, mixed>,
     *   backoffPlan?: ?BackoffPlan,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->timeoutSeconds = $values['timeoutSeconds'] ?? null;
        $this->credentialId = $values['credentialId'] ?? null;
        $this->url = $values['url'] ?? null;
        $this->headers = $values['headers'] ?? null;
        $this->backoffPlan = $values['backoffPlan'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
