<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class CallBatchResponse extends JsonSerializableType
{
    /**
     * @var array<Call> $results This is the list of calls that were created.
     */
    #[JsonProperty('results'), ArrayType([Call::class])]
    public array $results;

    /**
     * @var array<CallBatchError> $errors This is the list of calls that failed to be created.
     */
    #[JsonProperty('errors'), ArrayType([CallBatchError::class])]
    public array $errors;

    /**
     * @param array{
     *   results: array<Call>,
     *   errors: array<CallBatchError>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->results = $values['results'];
        $this->errors = $values['errors'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
