<?php declare(strict_types=1);

namespace Vapi\Types;

use Exception;
use Vapi\Core\Json\JsonDecoder;
use Vapi\Core\Json\JsonSerializableType;

final class ImportTwilioPhoneNumberDtoHooksItem extends JsonSerializableType
{
    /**
     * @var (
     *    'call.ringing'
     *   |'call.ending'
     *   |'_unknown'
     * ) $on
     */
    public readonly string $on;

    /**
     * @var (
     *    PhoneNumberHookCallRinging
     *   |PhoneNumberHookCallEnding
     *   |mixed
     * ) $value
     */
    public readonly mixed $value;

    /**
     * @param array{
     *   on: (
     *    'call.ringing'
     *   |'call.ending'
     *   |'_unknown'
     * ),
     *   value: (
     *    PhoneNumberHookCallRinging
     *   |PhoneNumberHookCallEnding
     *   |mixed
     * ),
     * } $values
     */
    private function __construct(
        array $values,
    ) {
        $this->on = $values['on'];
        $this->value = $values['value'];
    }

    /**
     * @param PhoneNumberHookCallRinging $callRinging
     * @return ImportTwilioPhoneNumberDtoHooksItem
     */
    public static function callRinging(PhoneNumberHookCallRinging $callRinging): ImportTwilioPhoneNumberDtoHooksItem
    {
        return new ImportTwilioPhoneNumberDtoHooksItem([
            'on' => 'call.ringing',
            'value' => $callRinging,
        ]);
    }

    /**
     * @param PhoneNumberHookCallEnding $callEnding
     * @return ImportTwilioPhoneNumberDtoHooksItem
     */
    public static function callEnding(PhoneNumberHookCallEnding $callEnding): ImportTwilioPhoneNumberDtoHooksItem
    {
        return new ImportTwilioPhoneNumberDtoHooksItem([
            'on' => 'call.ending',
            'value' => $callEnding,
        ]);
    }

    /**
     * @return bool
     */
    public function isCallRinging(): bool
    {
        return $this->value instanceof PhoneNumberHookCallRinging && $this->on === 'call.ringing';
    }

    /**
     * @return PhoneNumberHookCallRinging
     */
    public function asCallRinging(): PhoneNumberHookCallRinging
    {
        if (! ($this->value instanceof PhoneNumberHookCallRinging && $this->on === 'call.ringing')) {
            throw new Exception(
                "Expected call.ringing; got " . $this->on . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isCallEnding(): bool
    {
        return $this->value instanceof PhoneNumberHookCallEnding && $this->on === 'call.ending';
    }

    /**
     * @return PhoneNumberHookCallEnding
     */
    public function asCallEnding(): PhoneNumberHookCallEnding
    {
        if (! ($this->value instanceof PhoneNumberHookCallEnding && $this->on === 'call.ending')) {
            throw new Exception(
                "Expected call.ending; got " . $this->on . " with value of type " . get_debug_type($this->value),
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
        $result['on'] = $this->on;

        $base = parent::jsonSerialize();
        $result = array_merge($base, $result);

        switch ($this->on) {
            case 'call.ringing':
                $value = $this->asCallRinging()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'call.ending':
                $value = $this->asCallEnding()->jsonSerialize();
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
        if (! array_key_exists('on', $data)) {
            throw new Exception(
                "JSON data is missing property 'on'",
            );
        }
        $on = $data['on'];
        if (! (is_string($on))) {
            throw new Exception(
                "Expected property 'on' in JSON data to be string, instead received " . get_debug_type($data['on']),
            );
        }

        $args['on'] = $on;
        switch ($on) {
            case 'call.ringing':
                $args['value'] = PhoneNumberHookCallRinging::jsonDeserialize($data);
                break;
            case 'call.ending':
                $args['value'] = PhoneNumberHookCallEnding::jsonDeserialize($data);
                break;
            case '_unknown':
            default:
                $args['on'] = '_unknown';
                $args['value'] = $data;
        }

        // @phpstan-ignore-next-line
        return new static($args);
    }
}
