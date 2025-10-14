<?php declare(strict_types=1);

namespace Vapi\Types;

use Exception;
use Vapi\Core\Json\JsonDecoder;
use Vapi\Core\Json\JsonSerializableType;

final class PhoneNumberHookCallRingingDoItem extends JsonSerializableType
{
    /**
     * @var (
     *    'transfer'
     *   |'say'
     *   |'_unknown'
     * ) $type
     */
    public readonly string $type;

    /**
     * @var (
     *    TransferPhoneNumberHookAction
     *   |SayPhoneNumberHookAction
     *   |mixed
     * ) $value
     */
    public readonly mixed $value;

    /**
     * @param array{
     *   type: (
     *    'transfer'
     *   |'say'
     *   |'_unknown'
     * ),
     *   value: (
     *    TransferPhoneNumberHookAction
     *   |SayPhoneNumberHookAction
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
     * @param TransferPhoneNumberHookAction $transfer
     * @return PhoneNumberHookCallRingingDoItem
     */
    public static function transfer(TransferPhoneNumberHookAction $transfer): PhoneNumberHookCallRingingDoItem
    {
        return new PhoneNumberHookCallRingingDoItem([
            'type' => 'transfer',
            'value' => $transfer,
        ]);
    }

    /**
     * @param SayPhoneNumberHookAction $say
     * @return PhoneNumberHookCallRingingDoItem
     */
    public static function say(SayPhoneNumberHookAction $say): PhoneNumberHookCallRingingDoItem
    {
        return new PhoneNumberHookCallRingingDoItem([
            'type' => 'say',
            'value' => $say,
        ]);
    }

    /**
     * @return bool
     */
    public function isTransfer(): bool
    {
        return $this->value instanceof TransferPhoneNumberHookAction && $this->type === 'transfer';
    }

    /**
     * @return TransferPhoneNumberHookAction
     */
    public function asTransfer(): TransferPhoneNumberHookAction
    {
        if (! ($this->value instanceof TransferPhoneNumberHookAction && $this->type === 'transfer')) {
            throw new Exception(
                "Expected transfer; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isSay(): bool
    {
        return $this->value instanceof SayPhoneNumberHookAction && $this->type === 'say';
    }

    /**
     * @return SayPhoneNumberHookAction
     */
    public function asSay(): SayPhoneNumberHookAction
    {
        if (! ($this->value instanceof SayPhoneNumberHookAction && $this->type === 'say')) {
            throw new Exception(
                "Expected say; got " . $this->type . " with value of type " . get_debug_type($this->value),
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
            case 'transfer':
                $value = $this->asTransfer()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'say':
                $value = $this->asSay()->jsonSerialize();
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
            case 'transfer':
                $args['value'] = TransferPhoneNumberHookAction::jsonDeserialize($data);
                break;
            case 'say':
                $args['value'] = SayPhoneNumberHookAction::jsonDeserialize($data);
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
