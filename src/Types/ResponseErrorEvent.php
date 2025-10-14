<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class ResponseErrorEvent extends JsonSerializableType
{
    /**
     * @var 'error' $type Event type
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var string $code Error code
     */
    #[JsonProperty('code')]
    public string $code;

    /**
     * @var string $message Error message
     */
    #[JsonProperty('message')]
    public string $message;

    /**
     * @var ?string $param Parameter that caused the error
     */
    #[JsonProperty('param')]
    public ?string $param;

    /**
     * @var float $sequenceNumber Sequence number of the event
     */
    #[JsonProperty('sequence_number')]
    public float $sequenceNumber;

    /**
     * @param array{
     *   type: 'error',
     *   code: string,
     *   message: string,
     *   sequenceNumber: float,
     *   param?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->type = $values['type'];
        $this->code = $values['code'];
        $this->message = $values['message'];
        $this->param = $values['param'] ?? null;
        $this->sequenceNumber = $values['sequenceNumber'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
