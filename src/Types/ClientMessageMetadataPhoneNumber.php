<?php declare(strict_types=1);

namespace Vapi\Types;

use Exception;
use Vapi\Core\Json\JsonDecoder;
use Vapi\Core\Json\JsonSerializableType;

/**
 * This is the phone number that the message is associated with.
 */
final class ClientMessageMetadataPhoneNumber extends JsonSerializableType
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
     *    CreateByoPhoneNumberDto
     *   |CreateTwilioPhoneNumberDto
     *   |CreateVonagePhoneNumberDto
     *   |CreateVapiPhoneNumberDto
     *   |CreateTelnyxPhoneNumberDto
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
     *    CreateByoPhoneNumberDto
     *   |CreateTwilioPhoneNumberDto
     *   |CreateVonagePhoneNumberDto
     *   |CreateVapiPhoneNumberDto
     *   |CreateTelnyxPhoneNumberDto
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
     * @param CreateByoPhoneNumberDto $byoPhoneNumber
     * @return ClientMessageMetadataPhoneNumber
     */
    public static function byoPhoneNumber(CreateByoPhoneNumberDto $byoPhoneNumber): ClientMessageMetadataPhoneNumber
    {
        return new ClientMessageMetadataPhoneNumber([
            'provider' => 'byo-phone-number',
            'value' => $byoPhoneNumber,
        ]);
    }

    /**
     * @param CreateTwilioPhoneNumberDto $twilio
     * @return ClientMessageMetadataPhoneNumber
     */
    public static function twilio(CreateTwilioPhoneNumberDto $twilio): ClientMessageMetadataPhoneNumber
    {
        return new ClientMessageMetadataPhoneNumber([
            'provider' => 'twilio',
            'value' => $twilio,
        ]);
    }

    /**
     * @param CreateVonagePhoneNumberDto $vonage
     * @return ClientMessageMetadataPhoneNumber
     */
    public static function vonage(CreateVonagePhoneNumberDto $vonage): ClientMessageMetadataPhoneNumber
    {
        return new ClientMessageMetadataPhoneNumber([
            'provider' => 'vonage',
            'value' => $vonage,
        ]);
    }

    /**
     * @param CreateVapiPhoneNumberDto $vapi
     * @return ClientMessageMetadataPhoneNumber
     */
    public static function vapi(CreateVapiPhoneNumberDto $vapi): ClientMessageMetadataPhoneNumber
    {
        return new ClientMessageMetadataPhoneNumber([
            'provider' => 'vapi',
            'value' => $vapi,
        ]);
    }

    /**
     * @param CreateTelnyxPhoneNumberDto $telnyx
     * @return ClientMessageMetadataPhoneNumber
     */
    public static function telnyx(CreateTelnyxPhoneNumberDto $telnyx): ClientMessageMetadataPhoneNumber
    {
        return new ClientMessageMetadataPhoneNumber([
            'provider' => 'telnyx',
            'value' => $telnyx,
        ]);
    }

    /**
     * @return bool
     */
    public function isByoPhoneNumber(): bool
    {
        return $this->value instanceof CreateByoPhoneNumberDto && $this->provider === 'byo-phone-number';
    }

    /**
     * @return CreateByoPhoneNumberDto
     */
    public function asByoPhoneNumber(): CreateByoPhoneNumberDto
    {
        if (! ($this->value instanceof CreateByoPhoneNumberDto && $this->provider === 'byo-phone-number')) {
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
        return $this->value instanceof CreateTwilioPhoneNumberDto && $this->provider === 'twilio';
    }

    /**
     * @return CreateTwilioPhoneNumberDto
     */
    public function asTwilio(): CreateTwilioPhoneNumberDto
    {
        if (! ($this->value instanceof CreateTwilioPhoneNumberDto && $this->provider === 'twilio')) {
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
        return $this->value instanceof CreateVonagePhoneNumberDto && $this->provider === 'vonage';
    }

    /**
     * @return CreateVonagePhoneNumberDto
     */
    public function asVonage(): CreateVonagePhoneNumberDto
    {
        if (! ($this->value instanceof CreateVonagePhoneNumberDto && $this->provider === 'vonage')) {
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
        return $this->value instanceof CreateVapiPhoneNumberDto && $this->provider === 'vapi';
    }

    /**
     * @return CreateVapiPhoneNumberDto
     */
    public function asVapi(): CreateVapiPhoneNumberDto
    {
        if (! ($this->value instanceof CreateVapiPhoneNumberDto && $this->provider === 'vapi')) {
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
        return $this->value instanceof CreateTelnyxPhoneNumberDto && $this->provider === 'telnyx';
    }

    /**
     * @return CreateTelnyxPhoneNumberDto
     */
    public function asTelnyx(): CreateTelnyxPhoneNumberDto
    {
        if (! ($this->value instanceof CreateTelnyxPhoneNumberDto && $this->provider === 'telnyx')) {
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
                $args['value'] = CreateByoPhoneNumberDto::jsonDeserialize($data);
                break;
            case 'twilio':
                $args['value'] = CreateTwilioPhoneNumberDto::jsonDeserialize($data);
                break;
            case 'vonage':
                $args['value'] = CreateVonagePhoneNumberDto::jsonDeserialize($data);
                break;
            case 'vapi':
                $args['value'] = CreateVapiPhoneNumberDto::jsonDeserialize($data);
                break;
            case 'telnyx':
                $args['value'] = CreateTelnyxPhoneNumberDto::jsonDeserialize($data);
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
