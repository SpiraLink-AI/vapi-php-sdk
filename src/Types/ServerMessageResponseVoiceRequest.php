<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class ServerMessageResponseVoiceRequest extends JsonSerializableType
{
    /**
     * DO NOT respond to a `voice-request` webhook with this schema of { data }. This schema just exists to document what the response should look like. Follow these instructions:
     *
     * Here is what the request will look like:
     *
     * POST https://{assistant.voice.server.url}
     * Content-Type: application/json
     *
     * {
     *   "messsage": {
     *     "type": "voice-request",
     *     "text": "Hello, world!",
     *     "sampleRate": 24000,
     *     ...other metadata about the call...
     *   }
     * }
     *
     * The expected response is 1-channel 16-bit raw PCM audio at the sample rate specified in the request. Here is how the response will be piped to the transport:
     * ```
     * response.on('data', (chunk: Buffer) => {
     *   outputStream.write(chunk);
     * });
     * ```
     *
     * @var string $data
     */
    #[JsonProperty('data')]
    public string $data;

    /**
     * @param array{
     *   data: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->data = $values['data'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
