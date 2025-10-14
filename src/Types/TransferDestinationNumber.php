<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\Union;

final class TransferDestinationNumber extends JsonSerializableType
{
    /**
     * This is spoken to the customer before connecting them to the destination.
     *
     * Usage:
     * - If this is not provided and transfer tool messages is not provided, default is "Transferring the call now".
     * - If set to "", nothing is spoken. This is useful when you want to silently transfer. This is especially useful when transferring between assistants in a squad. In this scenario, you likely also want to set `assistant.firstMessageMode=assistant-speaks-first-with-model-generated-message` for the destination assistant.
     *
     * This accepts a string or a ToolMessageStart class. Latter is useful if you want to specify multiple messages for different languages through the `contents` field.
     *
     * @var (
     *    string
     *   |CustomMessage
     * )|null $message
     */
    #[JsonProperty('message'), Union('string', CustomMessage::class, 'null')]
    public string|CustomMessage|null $message;

    /**
     * This is the flag to toggle the E164 check for the `number` field. This is an advanced property which should be used if you know your use case requires it.
     *
     * Use cases:
     * - `false`: To allow non-E164 numbers like `+001234567890`, `1234`, or `abc`. This is useful for dialing out to non-E164 numbers on your SIP trunks.
     * - `true` (default): To allow only E164 numbers like `+14155551234`. This is standard for PSTN calls.
     *
     * If `false`, the `number` is still required to only contain alphanumeric characters (regex: `/^\+?[a-zA-Z0-9]+$/`).
     *
     * @default true (E164 check is enabled)
     *
     * @var ?bool $numberE164CheckEnabled
     */
    #[JsonProperty('numberE164CheckEnabled')]
    public ?bool $numberE164CheckEnabled;

    /**
     * @var string $number This is the phone number to transfer the call to.
     */
    #[JsonProperty('number')]
    public string $number;

    /**
     * @var ?string $extension This is the extension to dial after transferring the call to the `number`.
     */
    #[JsonProperty('extension')]
    public ?string $extension;

    /**
     * This is the caller ID to use when transferring the call to the `number`.
     *
     * Usage:
     * - If not provided, the caller ID will be the number the call is coming from. Example, +14151111111 calls in to and the assistant transfers out to +16470000000. +16470000000 will see +14151111111 as the caller.
     * - To change this behavior, provide a `callerId`.
     * - Set to '{{customer.number}}' to always use the customer's number as the caller ID.
     * - Set to '{{phoneNumber.number}}' to always use the phone number of the assistant as the caller ID.
     * - Set to any E164 number to always use that number as the caller ID. This needs to be a number that is owned or verified by your Transport provider like Twilio.
     *
     * For Twilio, you can read up more here: https://www.twilio.com/docs/voice/twiml/dial#callerid
     *
     * @var ?string $callerId
     */
    #[JsonProperty('callerId')]
    public ?string $callerId;

    /**
     * This configures how transfer is executed and the experience of the destination party receiving the call. Defaults to `blind-transfer`.
     *
     * @default `transferPlan.mode='blind-transfer'`
     *
     * @var ?TransferPlan $transferPlan
     */
    #[JsonProperty('transferPlan')]
    public ?TransferPlan $transferPlan;

    /**
     * @var ?string $description This is the description of the destination, used by the AI to choose when and how to transfer the call.
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @param array{
     *   number: string,
     *   message?: (
     *    string
     *   |CustomMessage
     * )|null,
     *   numberE164CheckEnabled?: ?bool,
     *   extension?: ?string,
     *   callerId?: ?string,
     *   transferPlan?: ?TransferPlan,
     *   description?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->message = $values['message'] ?? null;
        $this->numberE164CheckEnabled = $values['numberE164CheckEnabled'] ?? null;
        $this->number = $values['number'];
        $this->extension = $values['extension'] ?? null;
        $this->callerId = $values['callerId'] ?? null;
        $this->transferPlan = $values['transferPlan'] ?? null;
        $this->description = $values['description'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
