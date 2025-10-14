<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class BackoffPlan extends JsonSerializableType
{
    /**
     * This is the type of backoff plan to use. Defaults to fixed.
     *
     * @default fixed
     *
     * @var array<string, mixed> $type
     */
    #[JsonProperty('type'), ArrayType(['string' => 'mixed'])]
    public array $type;

    /**
     * This is the maximum number of retries to attempt if the request fails. Defaults to 0 (no retries).
     *
     * @default 0
     *
     * @var float $maxRetries
     */
    #[JsonProperty('maxRetries')]
    public float $maxRetries;

    /**
     * @var float $baseDelaySeconds This is the base delay in seconds. For linear backoff, this is the delay between each retry. For exponential backoff, this is the initial delay.
     */
    #[JsonProperty('baseDelaySeconds')]
    public float $baseDelaySeconds;

    /**
     * This is the excluded status codes. If the response status code is in this list, the request will not be retried.
     * By default, the request will be retried for any non-2xx status code.
     *
     * @var ?array<array<string, mixed>> $excludedStatusCodes
     */
    #[JsonProperty('excludedStatusCodes'), ArrayType([['string' => 'mixed']])]
    public ?array $excludedStatusCodes;

    /**
     * @param array{
     *   type: array<string, mixed>,
     *   maxRetries: float,
     *   baseDelaySeconds: float,
     *   excludedStatusCodes?: ?array<array<string, mixed>>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->type = $values['type'];
        $this->maxRetries = $values['maxRetries'];
        $this->baseDelaySeconds = $values['baseDelaySeconds'];
        $this->excludedStatusCodes = $values['excludedStatusCodes'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
