<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class CustomKnowledgeBase extends JsonSerializableType
{
    /**
     * @var 'custom-knowledge-base' $provider This knowledge base is bring your own knowledge base implementation.
     */
    #[JsonProperty('provider')]
    public string $provider;

    /**
     * This is where the knowledge base request will be sent.
     *
     * Request Example:
     *
     * POST https://{server.url}
     * Content-Type: application/json
     *
     * {
     *   "messsage": {
     *     "type": "knowledge-base-request",
     *     "messages": [
     *       {
     *         "role": "user",
     *         "content": "Why is ocean blue?"
     *       }
     *     ],
     *     ...other metadata about the call...
     *   }
     * }
     *
     * Response Expected:
     * ```
     * {
     *   "message": {
     *      "role": "assistant",
     *      "content": "The ocean is blue because water absorbs everything but blue.",
     *   }, // YOU CAN RETURN THE EXACT RESPONSE TO SPEAK
     *   "documents": [
     *     {
     *       "content": "The ocean is blue primarily because water absorbs colors in the red part of the light spectrum and scatters the blue light, making it more visible to our eyes.",
     *       "similarity": 1
     *     },
     *     {
     *       "content": "Blue light is scattered more by the water molecules than other colors, enhancing the blue appearance of the ocean.",
     *       "similarity": .5
     *     }
     *   ] // OR, YOU CAN RETURN AN ARRAY OF DOCUMENTS THAT WILL BE SENT TO THE MODEL
     * }
     * ```
     *
     * @var Server $server
     */
    #[JsonProperty('server')]
    public Server $server;

    /**
     * @var string $id This is the id of the knowledge base.
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $orgId This is the org id of the knowledge base.
     */
    #[JsonProperty('orgId')]
    public string $orgId;

    /**
     * @param array{
     *   provider: 'custom-knowledge-base',
     *   server: Server,
     *   id: string,
     *   orgId: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->provider = $values['provider'];
        $this->server = $values['server'];
        $this->id = $values['id'];
        $this->orgId = $values['orgId'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
