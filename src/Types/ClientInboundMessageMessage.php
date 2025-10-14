<?php declare(strict_types=1);

namespace Vapi\Types;

use Exception;
use Vapi\Core\Json\JsonDecoder;
use Vapi\Core\Json\JsonSerializableType;

/**
 * These are the messages that can be sent from client-side SDKs to control the call.
 */
final class ClientInboundMessageMessage extends JsonSerializableType
{
    /**
     * @var (
     *    'add-message'
     *   |'control'
     *   |'say'
     *   |'end-call'
     *   |'transfer'
     *   |'_unknown'
     * ) $type
     */
    public readonly string $type;

    /**
     * @var (
     *    ClientInboundMessageAddMessage
     *   |ClientInboundMessageControl
     *   |ClientInboundMessageSay
     *   |ClientInboundMessageEndCall
     *   |ClientInboundMessageTransfer
     *   |mixed
     * ) $value
     */
    public readonly mixed $value;

    /**
     * @param array{
     *   type: (
     *    'add-message'
     *   |'control'
     *   |'say'
     *   |'end-call'
     *   |'transfer'
     *   |'_unknown'
     * ),
     *   value: (
     *    ClientInboundMessageAddMessage
     *   |ClientInboundMessageControl
     *   |ClientInboundMessageSay
     *   |ClientInboundMessageEndCall
     *   |ClientInboundMessageTransfer
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
     * @param ClientInboundMessageAddMessage $addMessage
     * @return ClientInboundMessageMessage
     */
    public static function addMessage(ClientInboundMessageAddMessage $addMessage): ClientInboundMessageMessage
    {
        return new ClientInboundMessageMessage([
            'type' => 'add-message',
            'value' => $addMessage,
        ]);
    }

    /**
     * @param ClientInboundMessageControl $control
     * @return ClientInboundMessageMessage
     */
    public static function control(ClientInboundMessageControl $control): ClientInboundMessageMessage
    {
        return new ClientInboundMessageMessage([
            'type' => 'control',
            'value' => $control,
        ]);
    }

    /**
     * @param ClientInboundMessageSay $say
     * @return ClientInboundMessageMessage
     */
    public static function say(ClientInboundMessageSay $say): ClientInboundMessageMessage
    {
        return new ClientInboundMessageMessage([
            'type' => 'say',
            'value' => $say,
        ]);
    }

    /**
     * @param ClientInboundMessageEndCall $endCall
     * @return ClientInboundMessageMessage
     */
    public static function endCall(ClientInboundMessageEndCall $endCall): ClientInboundMessageMessage
    {
        return new ClientInboundMessageMessage([
            'type' => 'end-call',
            'value' => $endCall,
        ]);
    }

    /**
     * @param ClientInboundMessageTransfer $transfer
     * @return ClientInboundMessageMessage
     */
    public static function transfer(ClientInboundMessageTransfer $transfer): ClientInboundMessageMessage
    {
        return new ClientInboundMessageMessage([
            'type' => 'transfer',
            'value' => $transfer,
        ]);
    }

    /**
     * @return bool
     */
    public function isAddMessage(): bool
    {
        return $this->value instanceof ClientInboundMessageAddMessage && $this->type === 'add-message';
    }

    /**
     * @return ClientInboundMessageAddMessage
     */
    public function asAddMessage(): ClientInboundMessageAddMessage
    {
        if (! ($this->value instanceof ClientInboundMessageAddMessage && $this->type === 'add-message')) {
            throw new Exception(
                "Expected add-message; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isControl(): bool
    {
        return $this->value instanceof ClientInboundMessageControl && $this->type === 'control';
    }

    /**
     * @return ClientInboundMessageControl
     */
    public function asControl(): ClientInboundMessageControl
    {
        if (! ($this->value instanceof ClientInboundMessageControl && $this->type === 'control')) {
            throw new Exception(
                "Expected control; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isSay(): bool
    {
        return $this->value instanceof ClientInboundMessageSay && $this->type === 'say';
    }

    /**
     * @return ClientInboundMessageSay
     */
    public function asSay(): ClientInboundMessageSay
    {
        if (! ($this->value instanceof ClientInboundMessageSay && $this->type === 'say')) {
            throw new Exception(
                "Expected say; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isEndCall(): bool
    {
        return $this->value instanceof ClientInboundMessageEndCall && $this->type === 'end-call';
    }

    /**
     * @return ClientInboundMessageEndCall
     */
    public function asEndCall(): ClientInboundMessageEndCall
    {
        if (! ($this->value instanceof ClientInboundMessageEndCall && $this->type === 'end-call')) {
            throw new Exception(
                "Expected end-call; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isTransfer(): bool
    {
        return $this->value instanceof ClientInboundMessageTransfer && $this->type === 'transfer';
    }

    /**
     * @return ClientInboundMessageTransfer
     */
    public function asTransfer(): ClientInboundMessageTransfer
    {
        if (! ($this->value instanceof ClientInboundMessageTransfer && $this->type === 'transfer')) {
            throw new Exception(
                "Expected transfer; got " . $this->type . " with value of type " . get_debug_type($this->value),
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
            case 'add-message':
                $value = $this->asAddMessage()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'control':
                $value = $this->asControl()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'say':
                $value = $this->asSay()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'end-call':
                $value = $this->asEndCall()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'transfer':
                $value = $this->asTransfer()->jsonSerialize();
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
            case 'add-message':
                $args['value'] = ClientInboundMessageAddMessage::jsonDeserialize($data);
                break;
            case 'control':
                $args['value'] = ClientInboundMessageControl::jsonDeserialize($data);
                break;
            case 'say':
                $args['value'] = ClientInboundMessageSay::jsonDeserialize($data);
                break;
            case 'end-call':
                $args['value'] = ClientInboundMessageEndCall::jsonDeserialize($data);
                break;
            case 'transfer':
                $args['value'] = ClientInboundMessageTransfer::jsonDeserialize($data);
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
