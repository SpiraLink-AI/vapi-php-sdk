<?php declare(strict_types=1);

namespace Vapi\PhoneNumbers\Types;

use Exception;
use Vapi\Core\Json\JsonDecoder;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Types\ByoPhoneNumber;
use Vapi\Types\TelnyxPhoneNumber;
use Vapi\Types\TwilioPhoneNumber;
use Vapi\Types\VapiPhoneNumber;
use Vapi\Types\VonagePhoneNumber;

final class PhoneNumber extends JsonSerializableType
{
    /**
     * @var (
     *    'byo-phone-number'
     *   |'twilio'
     *   |'vonage'
     *   |'vapi'
     *   |'telnyx'
     *   |'_unknown'
     * ) $provider
     */
    public readonly string $provider;

    /**
     * @var (
     *    ByoPhoneNumber
     *   |TwilioPhoneNumber
     *   |VonagePhoneNumber
     *   |VapiPhoneNumber
     *   |TelnyxPhoneNumber
     *   |mixed
     * ) $value
     */
    public readonly mixed $value;

    /**
     * @param array{
     *   provider: (
     *    'byo-phone-number'
     *   |'twilio'
     *   |'vonage'
     *   |'vapi'
     *   |'telnyx'
     *   |'_unknown'
     * ),
     *   value: (
     *    ByoPhoneNumber
     *   |TwilioPhoneNumber
     *   |VonagePhoneNumber
     *   |VapiPhoneNumber
     *   |TelnyxPhoneNumber
     *   |mixed
     * ),
     * } $values
     */
    private function __construct(
        array $values,
    ) {
        $this->provider = $values['provider'];
        $this->value = $values['value'];
    }

    /**
     * @param ByoPhoneNumber $byoPhoneNumber
     * @return PhoneNumber
     */
    public static function byoPhoneNumber(ByoPhoneNumber $byoPhoneNumber): PhoneNumber
    {
        return new PhoneNumber([
            'provider' => 'byo-phone-number',
            'value' => $byoPhoneNumber,
        ]);
    }

    /**
     * @param TwilioPhoneNumber $twilio
     * @return PhoneNumber
     */
    public static function twilio(TwilioPhoneNumber $twilio): PhoneNumber
    {
        return new PhoneNumber([
            'provider' => 'twilio',
            'value' => $twilio,
        ]);
    }

    /**
     * @param VonagePhoneNumber $vonage
     * @return PhoneNumber
     */
    public static function vonage(VonagePhoneNumber $vonage): PhoneNumber
    {
        return new PhoneNumber([
            'provider' => 'vonage',
            'value' => $vonage,
        ]);
    }

    /**
     * @param VapiPhoneNumber $vapi
     * @return PhoneNumber
     */
    public static function vapi(VapiPhoneNumber $vapi): PhoneNumber
    {
        return new PhoneNumber([
            'provider' => 'vapi',
            'value' => $vapi,
        ]);
    }

    /**
     * @param TelnyxPhoneNumber $telnyx
     * @return PhoneNumber
     */
    public static function telnyx(TelnyxPhoneNumber $telnyx): PhoneNumber
    {
        return new PhoneNumber([
            'provider' => 'telnyx',
            'value' => $telnyx,
        ]);
    }

    /**
     * @return bool
     */
    public function isByoPhoneNumber(): bool
    {
        return $this->value instanceof ByoPhoneNumber && $this->provider === 'byo-phone-number';
    }

    /**
     * @return ByoPhoneNumber
     */
    public function asByoPhoneNumber(): ByoPhoneNumber
    {
        if (! ($this->value instanceof ByoPhoneNumber && $this->provider === 'byo-phone-number')) {
            throw new Exception(
                "Expected byo-phone-number; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isTwilio(): bool
    {
        return $this->value instanceof TwilioPhoneNumber && $this->provider === 'twilio';
    }

    /**
     * @return TwilioPhoneNumber
     */
    public function asTwilio(): TwilioPhoneNumber
    {
        if (! ($this->value instanceof TwilioPhoneNumber && $this->provider === 'twilio')) {
            throw new Exception(
                "Expected twilio; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isVonage(): bool
    {
        return $this->value instanceof VonagePhoneNumber && $this->provider === 'vonage';
    }

    /**
     * @return VonagePhoneNumber
     */
    public function asVonage(): VonagePhoneNumber
    {
        if (! ($this->value instanceof VonagePhoneNumber && $this->provider === 'vonage')) {
            throw new Exception(
                "Expected vonage; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isVapi(): bool
    {
        return $this->value instanceof VapiPhoneNumber && $this->provider === 'vapi';
    }

    /**
     * @return VapiPhoneNumber
     */
    public function asVapi(): VapiPhoneNumber
    {
        if (! ($this->value instanceof VapiPhoneNumber && $this->provider === 'vapi')) {
            throw new Exception(
                "Expected vapi; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isTelnyx(): bool
    {
        return $this->value instanceof TelnyxPhoneNumber && $this->provider === 'telnyx';
    }

    /**
     * @return TelnyxPhoneNumber
     */
    public function asTelnyx(): TelnyxPhoneNumber
    {
        if (! ($this->value instanceof TelnyxPhoneNumber && $this->provider === 'telnyx')) {
            throw new Exception(
                "Expected telnyx; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }

    /**
     * @return array<mixed>
     */
    public function jsonSerialize(): array
    {
        $result = [];
        $result['provider'] = $this->provider;

        $base = parent::jsonSerialize();
        $result = array_merge($base, $result);

        switch ($this->provider) {
            case 'byo-phone-number':
                $value = $this->asByoPhoneNumber()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'twilio':
                $value = $this->asTwilio()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'vonage':
                $value = $this->asVonage()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'vapi':
                $value = $this->asVapi()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'telnyx':
                $value = $this->asTelnyx()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case '_unknown':
            default:
                if (is_null($this->value)) {
                    break;
                }
                if ($this->value instanceof JsonSerializableType) {
                    $value = $this->value->jsonSerialize();
                    $result = array_merge($value, $result);
                } elseif (is_array($this->value)) {
                    $result = array_merge($this->value, $result);
                }
        }

        return $result;
    }

    /**
     * @param string $json
     */
    public static function fromJson(string $json): static
    {
        $decodedJson = JsonDecoder::decode($json);
        if (! is_array($decodedJson)) {
            throw new Exception("Unexpected non-array decoded type: " . gettype($decodedJson));
        }

        return self::jsonDeserialize($decodedJson);
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function jsonDeserialize(array $data): static
    {
        $args = [];
        if (! array_key_exists('provider', $data)) {
            throw new Exception(
                "JSON data is missing property 'provider'",
            );
        }
        $provider = $data['provider'];
        if (! (is_string($provider))) {
            throw new Exception(
                "Expected property 'provider' in JSON data to be string, instead received " . get_debug_type($data['provider']),
            );
        }

        $args['provider'] = $provider;
        switch ($provider) {
            case 'byo-phone-number':
                $args['value'] = ByoPhoneNumber::jsonDeserialize($data);
                break;
            case 'twilio':
                $args['value'] = TwilioPhoneNumber::jsonDeserialize($data);
                break;
            case 'vonage':
                $args['value'] = VonagePhoneNumber::jsonDeserialize($data);
                break;
            case 'vapi':
                $args['value'] = VapiPhoneNumber::jsonDeserialize($data);
                break;
            case 'telnyx':
                $args['value'] = TelnyxPhoneNumber::jsonDeserialize($data);
                break;
            case '_unknown':
            default:
                $args['provider'] = '_unknown';
                $args['value'] = $data;
        }

        // @phpstan-ignore-next-line
        return new static($args);
    }
}
