<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class ServerMessageVoiceRequest extends JsonSerializableType
{
    /**
     * @var ?ServerMessageVoiceRequestPhoneNumber $phoneNumber This is the phone number that the message is associated with.
     */
    #[JsonProperty('phoneNumber')]
    public ?ServerMessageVoiceRequestPhoneNumber $phoneNumber;

    /**
     * This is the type of the message. "voice-request" is sent when using `assistant.voice={ "type": "custom-voice" }`.
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
     * @var 'voice-request' $type
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var ?float $timestamp This is the timestamp of the message.
     */
    #[JsonProperty('timestamp')]
    public ?float $timestamp;

    /**
     * This is a live version of the `call.artifact`.
     *
     * This matches what is stored on `call.artifact` after the call.
     *
     * @var ?Artifact $artifact
     */
    #[JsonProperty('artifact')]
    public ?Artifact $artifact;

    /**
     * @var ?CreateAssistantDto $assistant This is the assistant that the message is associated with.
     */
    #[JsonProperty('assistant')]
    public ?CreateAssistantDto $assistant;

    /**
     * @var ?CreateCustomerDto $customer This is the customer that the message is associated with.
     */
    #[JsonProperty('customer')]
    public ?CreateCustomerDto $customer;

    /**
     * @var ?Call $call This is the call that the message is associated with.
     */
    #[JsonProperty('call')]
    public ?Call $call;

    /**
     * @var ?Chat $chat This is the chat object.
     */
    #[JsonProperty('chat')]
    public ?Chat $chat;

    /**
     * @var string $text This is the text to be synthesized.
     */
    #[JsonProperty('text')]
    public string $text;

    /**
     * @var float $sampleRate This is the sample rate to be synthesized.
     */
    #[JsonProperty('sampleRate')]
    public float $sampleRate;

    /**
     * @param array{
     *   type: 'voice-request',
     *   text: string,
     *   sampleRate: float,
     *   phoneNumber?: ?ServerMessageVoiceRequestPhoneNumber,
     *   timestamp?: ?float,
     *   artifact?: ?Artifact,
     *   assistant?: ?CreateAssistantDto,
     *   customer?: ?CreateCustomerDto,
     *   call?: ?Call,
     *   chat?: ?Chat,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->phoneNumber = $values['phoneNumber'] ?? null;
        $this->type = $values['type'];
        $this->timestamp = $values['timestamp'] ?? null;
        $this->artifact = $values['artifact'] ?? null;
        $this->assistant = $values['assistant'] ?? null;
        $this->customer = $values['customer'] ?? null;
        $this->call = $values['call'] ?? null;
        $this->chat = $values['chat'] ?? null;
        $this->text = $values['text'];
        $this->sampleRate = $values['sampleRate'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
