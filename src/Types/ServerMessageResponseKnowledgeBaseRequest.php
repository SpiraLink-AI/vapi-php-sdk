<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class ServerMessageResponseKnowledgeBaseRequest extends JsonSerializableType
{
    /**
     * @var ?array<KnowledgeBaseResponseDocument> $documents This is the list of documents that will be sent to the model alongside the `messages` to generate a response.
     */
    #[JsonProperty('documents'), ArrayType([KnowledgeBaseResponseDocument::class])]
    public ?array $documents;

    /**
     * @var ?CustomMessage $message This can be used to skip the model output generation and speak a custom message.
     */
    #[JsonProperty('message')]
    public ?CustomMessage $message;

    /**
     * @param array{
     *   documents?: ?array<KnowledgeBaseResponseDocument>,
     *   message?: ?CustomMessage,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->documents = $values['documents'] ?? null;
        $this->message = $values['message'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
