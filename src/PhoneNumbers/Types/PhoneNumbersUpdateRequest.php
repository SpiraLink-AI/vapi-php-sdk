<?php declare(strict_types=1);

namespace Vapi\PhoneNumbers\Types;

use Exception;
use Vapi\Core\Json\JsonDecoder;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Types\UpdateByoPhoneNumberDto;
use Vapi\Types\UpdateTelnyxPhoneNumberDto;
use Vapi\Types\UpdateTwilioPhoneNumberDto;
use Vapi\Types\UpdateVapiPhoneNumberDto;
use Vapi\Types\UpdateVonagePhoneNumberDto;

final class PhoneNumbersUpdateRequest extends JsonSerializableType
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
     *    UpdateByoPhoneNumberDto
     *   |UpdateTwilioPhoneNumberDto
     *   |UpdateVonagePhoneNumberDto
     *   |UpdateVapiPhoneNumberDto
     *   |UpdateTelnyxPhoneNumberDto
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
     *    UpdateByoPhoneNumberDto
     *   |UpdateTwilioPhoneNumberDto
     *   |UpdateVonagePhoneNumberDto
     *   |UpdateVapiPhoneNumberDto
     *   |UpdateTelnyxPhoneNumberDto
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
     * @param UpdateByoPhoneNumberDto $byoPhoneNumber
     * @return PhoneNumbersUpdateRequest
     */
    public static function byoPhoneNumber(UpdateByoPhoneNumberDto $byoPhoneNumber): PhoneNumbersUpdateRequest
    {
        return new PhoneNumbersUpdateRequest([
            'provider' => 'byo-phone-number',
            'value' => $byoPhoneNumber,
        ]);
    }

    /**
     * @param UpdateTwilioPhoneNumberDto $twilio
     * @return PhoneNumbersUpdateRequest
     */
    public static function twilio(UpdateTwilioPhoneNumberDto $twilio): PhoneNumbersUpdateRequest
    {
        return new PhoneNumbersUpdateRequest([
            'provider' => 'twilio',
            'value' => $twilio,
        ]);
    }

    /**
     * @param UpdateVonagePhoneNumberDto $vonage
     * @return PhoneNumbersUpdateRequest
     */
    public static function vonage(UpdateVonagePhoneNumberDto $vonage): PhoneNumbersUpdateRequest
    {
        return new PhoneNumbersUpdateRequest([
            'provider' => 'vonage',
            'value' => $vonage,
        ]);
    }

    /**
     * @param UpdateVapiPhoneNumberDto $vapi
     * @return PhoneNumbersUpdateRequest
     */
    public static function vapi(UpdateVapiPhoneNumberDto $vapi): PhoneNumbersUpdateRequest
    {
        return new PhoneNumbersUpdateRequest([
            'provider' => 'vapi',
            'value' => $vapi,
        ]);
    }

    /**
     * @param UpdateTelnyxPhoneNumberDto $telnyx
     * @return PhoneNumbersUpdateRequest
     */
    public static function telnyx(UpdateTelnyxPhoneNumberDto $telnyx): PhoneNumbersUpdateRequest
    {
        return new PhoneNumbersUpdateRequest([
            'provider' => 'telnyx',
            'value' => $telnyx,
        ]);
    }

    /**
     * @return bool
     */
    public function isByoPhoneNumber(): bool
    {
        return $this->value instanceof UpdateByoPhoneNumberDto && $this->provider === 'byo-phone-number';
    }

    /**
     * @return UpdateByoPhoneNumberDto
     */
    public function asByoPhoneNumber(): UpdateByoPhoneNumberDto
    {
        if (! ($this->value instanceof UpdateByoPhoneNumberDto && $this->provider === 'byo-phone-number')) {
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
        return $this->value instanceof UpdateTwilioPhoneNumberDto && $this->provider === 'twilio';
    }

    /**
     * @return UpdateTwilioPhoneNumberDto
     */
    public function asTwilio(): UpdateTwilioPhoneNumberDto
    {
        if (! ($this->value instanceof UpdateTwilioPhoneNumberDto && $this->provider === 'twilio')) {
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
        return $this->value instanceof UpdateVonagePhoneNumberDto && $this->provider === 'vonage';
    }

    /**
     * @return UpdateVonagePhoneNumberDto
     */
    public function asVonage(): UpdateVonagePhoneNumberDto
    {
        if (! ($this->value instanceof UpdateVonagePhoneNumberDto && $this->provider === 'vonage')) {
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
        return $this->value instanceof UpdateVapiPhoneNumberDto && $this->provider === 'vapi';
    }

    /**
     * @return UpdateVapiPhoneNumberDto
     */
    public function asVapi(): UpdateVapiPhoneNumberDto
    {
        if (! ($this->value instanceof UpdateVapiPhoneNumberDto && $this->provider === 'vapi')) {
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
        return $this->value instanceof UpdateTelnyxPhoneNumberDto && $this->provider === 'telnyx';
    }

    /**
     * @return UpdateTelnyxPhoneNumberDto
     */
    public function asTelnyx(): UpdateTelnyxPhoneNumberDto
    {
        if (! ($this->value instanceof UpdateTelnyxPhoneNumberDto && $this->provider === 'telnyx')) {
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
                $args['value'] = UpdateByoPhoneNumberDto::jsonDeserialize($data);
                break;
            case 'twilio':
                $args['value'] = UpdateTwilioPhoneNumberDto::jsonDeserialize($data);
                break;
            case 'vonage':
                $args['value'] = UpdateVonagePhoneNumberDto::jsonDeserialize($data);
                break;
            case 'vapi':
                $args['value'] = UpdateVapiPhoneNumberDto::jsonDeserialize($data);
                break;
            case 'telnyx':
                $args['value'] = UpdateTelnyxPhoneNumberDto::jsonDeserialize($data);
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
