<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class ResponseOutputMessage extends JsonSerializableType
{
    /**
     * @var string $id The unique ID of the output message
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var array<ResponseOutputText> $content Content of the output message
     */
    #[JsonProperty('content'), ArrayType([ResponseOutputText::class])]
    public array $content;

    /**
     * @var 'assistant' $role The role of the output message
     */
    #[JsonProperty('role')]
    public string $role;

    /**
     * @var value-of<ResponseOutputMessageStatus> $status The status of the message
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var 'message' $type The type of the output message
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @param array{
     *   id: string,
     *   content: array<ResponseOutputText>,
     *   role: 'assistant',
     *   status: value-of<ResponseOutputMessageStatus>,
     *   type: 'message',
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->content = $values['content'];
        $this->role = $values['role'];
        $this->status = $values['status'];
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
