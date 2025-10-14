<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class FallbackCustomVoice extends JsonSerializableType
{
    /**
     * @var ?bool $cachingEnabled This is the flag to toggle voice caching for the assistant.
     */
    #[JsonProperty('cachingEnabled')]
    public ?bool $cachingEnabled;

    /**
     * This is where the voice request will be sent.
     *
     * Request Example:
     *
     * POST https://{server.url}
     * Content-Type: application/json
     *
     * {
     *   "message": {
     *     "type": "voice-request",
     *     "text": "Hello, world!",
     *     "sampleRate": 24000,
     *     ...other metadata about the call...
     *   }
     * }
     *
     * Response Expected: 1-channel 16-bit raw PCM audio at the sample rate specified in the request. Here is how the response will be piped to the transport:
     * ```
     * response.on('data', (chunk: Buffer) => {
     *   outputStream.write(chunk);
     * });
     * ```
     *
     * @var Server $server
     */
    #[JsonProperty('server')]
    public Server $server;

    /**
     * @var ?ChunkPlan $chunkPlan This is the plan for chunking the model output before it is sent to the voice provider.
     */
    #[JsonProperty('chunkPlan')]
    public ?ChunkPlan $chunkPlan;

    /**
     * @param array{
     *   server: Server,
     *   cachingEnabled?: ?bool,
     *   chunkPlan?: ?ChunkPlan,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->cachingEnabled = $values['cachingEnabled'] ?? null;
        $this->server = $values['server'];
        $this->chunkPlan = $values['chunkPlan'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
