<?php declare(strict_types=1);

namespace Vapi\Types;

use Exception;
use Vapi\Core\Json\JsonDecoder;
use Vapi\Core\Json\JsonSerializableType;

/**
 * This is the fallback destination an inbound call will be transferred to if:
 * 1. `assistantId` is not set
 * 2. `squadId` is not set
 * 3. and, `assistant-request` message to the `serverUrl` fails
 *
 * If this is not set and above conditions are met, the inbound call is hung up with an error message.
 */
final class UpdateTwilioPhoneNumberDtoFallbackDestination extends JsonSerializableType
{
    /**
     * @var (
     *    'number'
     *   |'sip'
     *   |'_unknown'
     * ) $type
     */
    public readonly string $type;

    /**
     * @var (
     *    TransferDestinationNumber
     *   |TransferDestinationSip
     *   |mixed
     * ) $value
     */
    public readonly mixed $value;

    /**
     * @param array{
     *   type: (
     *    'number'
     *   |'sip'
     *   |'_unknown'
     * ),
     *   value: (
     *    TransferDestinationNumber
     *   |TransferDestinationSip
     *   |mixed
     * ),
     * } $values
     */
    private function __construct(
        array $values,
    ) {
        $this->type = $values['type'];
        $this->value = $values['value'];
    }

    /**
     * @param TransferDestinationNumber $number
     * @return UpdateTwilioPhoneNumberDtoFallbackDestination
     */
    public static function number(TransferDestinationNumber $number): UpdateTwilioPhoneNumberDtoFallbackDestination
    {
        return new UpdateTwilioPhoneNumberDtoFallbackDestination([
            'type' => 'number',
            'value' => $number,
        ]);
    }

    /**
     * @param TransferDestinationSip $sip
     * @return UpdateTwilioPhoneNumberDtoFallbackDestination
     */
    public static function sip(TransferDestinationSip $sip): UpdateTwilioPhoneNumberDtoFallbackDestination
    {
        return new UpdateTwilioPhoneNumberDtoFallbackDestination([
            'type' => 'sip',
            'value' => $sip,
        ]);
    }

    /**
     * @return bool
     */
    public function isNumber(): bool
    {
        return $this->value instanceof TransferDestinationNumber && $this->type === 'number';
    }

    /**
     * @return TransferDestinationNumber
     */
    public function asNumber(): TransferDestinationNumber
    {
        if (! ($this->value instanceof TransferDestinationNumber && $this->type === 'number')) {
            throw new Exception(
                "Expected number; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isSip(): bool
    {
        return $this->value instanceof TransferDestinationSip && $this->type === 'sip';
    }

    /**
     * @return TransferDestinationSip
     */
    public function asSip(): TransferDestinationSip
    {
        if (! ($this->value instanceof TransferDestinationSip && $this->type === 'sip')) {
            throw new Exception(
                "Expected sip; got " . $this->type . " with value of type " . get_debug_type($this->value),
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
        $result['type'] = $this->type;

        $base = parent::jsonSerialize();
        $result = array_merge($base, $result);

        switch ($this->type) {
            case 'number':
                $value = $this->asNumber()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'sip':
                $value = $this->asSip()->jsonSerialize();
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
        if (! array_key_exists('type', $data)) {
            throw new Exception(
                "JSON data is missing property 'type'",
            );
        }
        $type = $data['type'];
        if (! (is_string($type))) {
            throw new Exception(
                "Expected property 'type' in JSON data to be string, instead received " . get_debug_type($data['type']),
            );
        }

        $args['type'] = $type;
        switch ($type) {
            case 'number':
                $args['value'] = TransferDestinationNumber::jsonDeserialize($data);
                break;
            case 'sip':
                $args['value'] = TransferDestinationSip::jsonDeserialize($data);
                break;
            case '_unknown':
            default:
                $args['type'] = '_unknown';
                $args['value'] = $data;
        }

        // @phpstan-ignore-next-line
        return new static($args);
    }
}
