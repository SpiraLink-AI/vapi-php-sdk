<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class CreateCustomerDto extends JsonSerializableType
{
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
     * @var ?string $extension This is the extension that will be dialed after the call is answered.
     */
    #[JsonProperty('extension')]
    public ?string $extension;

    /**
     * These are the overrides for the assistant's settings and template variables specific to this customer.
     * This allows customization of the assistant's behavior for individual customers in batch calls.
     *
     * @var ?AssistantOverrides $assistantOverrides
     */
    #[JsonProperty('assistantOverrides')]
    public ?AssistantOverrides $assistantOverrides;

    /**
     * @var ?string $number This is the number of the customer.
     */
    #[JsonProperty('number')]
    public ?string $number;

    /**
     * @var ?string $sipUri This is the SIP URI of the customer.
     */
    #[JsonProperty('sipUri')]
    public ?string $sipUri;

    /**
     * This is the name of the customer. This is just for your own reference.
     *
     * For SIP inbound calls, this is extracted from the `From` SIP header with format `"Display Name" <sip:username@domain>`.
     *
     * @var ?string $name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?string $email This is the email of the customer.
     */
    #[JsonProperty('email')]
    public ?string $email;

    /**
     * @var ?string $externalId This is the external ID of the customer.
     */
    #[JsonProperty('externalId')]
    public ?string $externalId;

    /**
     * @param array{
     *   numberE164CheckEnabled?: ?bool,
     *   extension?: ?string,
     *   assistantOverrides?: ?AssistantOverrides,
     *   number?: ?string,
     *   sipUri?: ?string,
     *   name?: ?string,
     *   email?: ?string,
     *   externalId?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->numberE164CheckEnabled = $values['numberE164CheckEnabled'] ?? null;
        $this->extension = $values['extension'] ?? null;
        $this->assistantOverrides = $values['assistantOverrides'] ?? null;
        $this->number = $values['number'] ?? null;
        $this->sipUri = $values['sipUri'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->email = $values['email'] ?? null;
        $this->externalId = $values['externalId'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
