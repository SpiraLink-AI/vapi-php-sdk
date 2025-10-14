<?php declare(strict_types=1);

namespace Vapi\Types;

use Exception;
use Vapi\Core\Json\JsonDecoder;
use Vapi\Core\Json\JsonSerializableType;

final class FunctionCallHookActionMessagesItem extends JsonSerializableType
{
    /**
     * @var (
     *    'request-start'
     *   |'request-complete'
     *   |'request-failed'
     *   |'request-response-delayed'
     *   |'_unknown'
     * ) $type
     */
    public readonly string $type;

    /**
     * @var (
     *    ToolMessageStart
     *   |ToolMessageComplete
     *   |ToolMessageFailed
     *   |ToolMessageDelayed
     *   |mixed
     * ) $value
     */
    public readonly mixed $value;

    /**
     * @param array{
     *   type: (
     *    'request-start'
     *   |'request-complete'
     *   |'request-failed'
     *   |'request-response-delayed'
     *   |'_unknown'
     * ),
     *   value: (
     *    ToolMessageStart
     *   |ToolMessageComplete
     *   |ToolMessageFailed
     *   |ToolMessageDelayed
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
     * @param ToolMessageStart $requestStart
     * @return FunctionCallHookActionMessagesItem
     */
    public static function requestStart(ToolMessageStart $requestStart): FunctionCallHookActionMessagesItem
    {
        return new FunctionCallHookActionMessagesItem([
            'type' => 'request-start',
            'value' => $requestStart,
        ]);
    }

    /**
     * @param ToolMessageComplete $requestComplete
     * @return FunctionCallHookActionMessagesItem
     */
    public static function requestComplete(ToolMessageComplete $requestComplete): FunctionCallHookActionMessagesItem
    {
        return new FunctionCallHookActionMessagesItem([
            'type' => 'request-complete',
            'value' => $requestComplete,
        ]);
    }

    /**
     * @param ToolMessageFailed $requestFailed
     * @return FunctionCallHookActionMessagesItem
     */
    public static function requestFailed(ToolMessageFailed $requestFailed): FunctionCallHookActionMessagesItem
    {
        return new FunctionCallHookActionMessagesItem([
            'type' => 'request-failed',
            'value' => $requestFailed,
        ]);
    }

    /**
     * @param ToolMessageDelayed $requestResponseDelayed
     * @return FunctionCallHookActionMessagesItem
     */
    public static function requestResponseDelayed(ToolMessageDelayed $requestResponseDelayed): FunctionCallHookActionMessagesItem
    {
        return new FunctionCallHookActionMessagesItem([
            'type' => 'request-response-delayed',
            'value' => $requestResponseDelayed,
        ]);
    }

    /**
     * @return bool
     */
    public function isRequestStart(): bool
    {
        return $this->value instanceof ToolMessageStart && $this->type === 'request-start';
    }

    /**
     * @return ToolMessageStart
     */
    public function asRequestStart(): ToolMessageStart
    {
        if (! ($this->value instanceof ToolMessageStart && $this->type === 'request-start')) {
            throw new Exception(
                "Expected request-start; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isRequestComplete(): bool
    {
        return $this->value instanceof ToolMessageComplete && $this->type === 'request-complete';
    }

    /**
     * @return ToolMessageComplete
     */
    public function asRequestComplete(): ToolMessageComplete
    {
        if (! ($this->value instanceof ToolMessageComplete && $this->type === 'request-complete')) {
            throw new Exception(
                "Expected request-complete; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isRequestFailed(): bool
    {
        return $this->value instanceof ToolMessageFailed && $this->type === 'request-failed';
    }

    /**
     * @return ToolMessageFailed
     */
    public function asRequestFailed(): ToolMessageFailed
    {
        if (! ($this->value instanceof ToolMessageFailed && $this->type === 'request-failed')) {
            throw new Exception(
                "Expected request-failed; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isRequestResponseDelayed(): bool
    {
        return $this->value instanceof ToolMessageDelayed && $this->type === 'request-response-delayed';
    }

    /**
     * @return ToolMessageDelayed
     */
    public function asRequestResponseDelayed(): ToolMessageDelayed
    {
        if (! ($this->value instanceof ToolMessageDelayed && $this->type === 'request-response-delayed')) {
            throw new Exception(
                "Expected request-response-delayed; got " . $this->type . " with value of type " . get_debug_type($this->value),
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
            case 'request-start':
                $value = $this->asRequestStart()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'request-complete':
                $value = $this->asRequestComplete()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'request-failed':
                $value = $this->asRequestFailed()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'request-response-delayed':
                $value = $this->asRequestResponseDelayed()->jsonSerialize();
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
            case 'request-start':
                $args['value'] = ToolMessageStart::jsonDeserialize($data);
                break;
            case 'request-complete':
                $args['value'] = ToolMessageComplete::jsonDeserialize($data);
                break;
            case 'request-failed':
                $args['value'] = ToolMessageFailed::jsonDeserialize($data);
                break;
            case 'request-response-delayed':
                $args['value'] = ToolMessageDelayed::jsonDeserialize($data);
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
