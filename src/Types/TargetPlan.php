<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class TargetPlan extends JsonSerializableType
{
    /**
     * This is the phone number that is being tested.
     * During the actual test, it'll be called and the assistant attached to it will pick up and be tested.
     * To test an assistant directly, send assistantId instead.
     *
     * @var ?string $phoneNumberId
     */
    #[JsonProperty('phoneNumberId')]
    public ?string $phoneNumberId;

    /**
     * This can be any phone number (even not on Vapi).
     * During the actual test, it'll be called.
     * To test a Vapi number, send phoneNumberId. To test an assistant directly, send assistantId instead.
     *
     * @var ?TestSuitePhoneNumber $phoneNumber
     */
    #[JsonProperty('phoneNumber')]
    public ?TestSuitePhoneNumber $phoneNumber;

    /**
     * This is the assistant being tested.
     * During the actual test, it'll invoked directly.
     * To test the assistant over phone number, send phoneNumberId instead.
     *
     * @var ?string $assistantId
     */
    #[JsonProperty('assistantId')]
    public ?string $assistantId;

    /**
     * @var ?AssistantOverrides $assistantOverrides This is the assistant overrides applied to assistantId before it is tested.
     */
    #[JsonProperty('assistantOverrides')]
    public ?AssistantOverrides $assistantOverrides;

    /**
     * @param array{
     *   phoneNumberId?: ?string,
     *   phoneNumber?: ?TestSuitePhoneNumber,
     *   assistantId?: ?string,
     *   assistantOverrides?: ?AssistantOverrides,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->phoneNumberId = $values['phoneNumberId'] ?? null;
        $this->phoneNumber = $values['phoneNumber'] ?? null;
        $this->assistantId = $values['assistantId'] ?? null;
        $this->assistantOverrides = $values['assistantOverrides'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
