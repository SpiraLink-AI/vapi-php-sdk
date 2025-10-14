<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class ResponseCompletedEvent extends JsonSerializableType
{
    /**
     * @var ResponseObject $response The completed response
     */
    #[JsonProperty('response')]
    public ResponseObject $response;

    /**
     * @var 'response.completed' $type Event type
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @param array{
     *   response: ResponseObject,
     *   type: 'response.completed',
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->response = $values['response'];
        $this->type = $values['type'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
