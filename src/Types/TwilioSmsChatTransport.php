<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class TwilioSmsChatTransport extends JsonSerializableType
{
    /**
     * This is the phone number that will be used to send the SMS.
     * If provided, will create a new session. If not provided, uses existing session's phoneNumberId.
     * The phone number must have SMS enabled and belong to your organization.
     *
     * @var ?string $phoneNumberId
     */
    #[JsonProperty('phoneNumberId')]
    public ?string $phoneNumberId;

    /**
     * This is the customer who will receive the SMS.
     * If provided, will create a new session. If not provided, uses existing session's customer.
     *
     * @var ?CreateCustomerDto $customer
     */
    #[JsonProperty('customer')]
    public ?CreateCustomerDto $customer;

    /**
     * Whether to use LLM-generated messages for outbound SMS.
     * When true (default), input is processed by the assistant for a response.
     * When false, the input text is forwarded directly as the SMS message without LLM processing.
     * Useful for sending pre-defined messages or notifications.
     *
     * @var ?bool $useLlmGeneratedMessageForOutbound
     */
    #[JsonProperty('useLLMGeneratedMessageForOutbound')]
    public ?bool $useLlmGeneratedMessageForOutbound;

    /**
     * The type of transport to use for sending the chat response.
     * Currently supports 'twilio.sms' for SMS delivery via Twilio.
     *
     * @var 'twilio.sms' $type
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @param array{
     *   type: 'twilio.sms',
     *   phoneNumberId?: ?string,
     *   customer?: ?CreateCustomerDto,
     *   useLlmGeneratedMessageForOutbound?: ?bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->phoneNumberId = $values['phoneNumberId'] ?? null;
        $this->customer = $values['customer'] ?? null;
        $this->useLlmGeneratedMessageForOutbound = $values['useLlmGeneratedMessageForOutbound'] ?? null;
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
