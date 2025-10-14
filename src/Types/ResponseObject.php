<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class ResponseObject extends JsonSerializableType
{
    /**
     * @var string $id Unique identifier for this Response
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var 'response' $object The object type
     */
    #[JsonProperty('object')]
    public string $object;

    /**
     * @var float $createdAt Unix timestamp (in seconds) of when this Response was created
     */
    #[JsonProperty('created_at')]
    public float $createdAt;

    /**
     * @var value-of<ResponseObjectStatus> $status Status of the response
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var ?string $error Error message if the response failed
     */
    #[JsonProperty('error')]
    public ?string $error;

    /**
     * @var array<ResponseOutputMessage> $output Output messages from the model
     */
    #[JsonProperty('output'), ArrayType([ResponseOutputMessage::class])]
    public array $output;

    /**
     * @param array{
     *   id: string,
     *   object: 'response',
     *   createdAt: float,
     *   status: value-of<ResponseObjectStatus>,
     *   output: array<ResponseOutputMessage>,
     *   error?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->object = $values['object'];
        $this->createdAt = $values['createdAt'];
        $this->status = $values['status'];
        $this->error = $values['error'] ?? null;
        $this->output = $values['output'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
