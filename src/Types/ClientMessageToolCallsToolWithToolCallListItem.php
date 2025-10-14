<?php declare(strict_types=1);

namespace Vapi\Types;

use Exception;
use Vapi\Core\Json\JsonDecoder;
use Vapi\Core\Json\JsonSerializableType;

final class ClientMessageToolCallsToolWithToolCallListItem extends JsonSerializableType
{
    /**
     * @var (
     *    'function'
     *   |'ghl'
     *   |'make'
     *   |'bash'
     *   |'computer'
     *   |'textEditor'
     *   |'google.calendar.event.create'
     *   |'_unknown'
     * ) $type
     */
    public readonly string $type;

    /**
     * @var (
     *    FunctionToolWithToolCall
     *   |GhlToolWithToolCall
     *   |MakeToolWithToolCall
     *   |BashToolWithToolCall
     *   |ComputerToolWithToolCall
     *   |TextEditorToolWithToolCall
     *   |GoogleCalendarCreateEventToolWithToolCall
     *   |mixed
     * ) $value
     */
    public readonly mixed $value;

    /**
     * @param array{
     *   type: (
     *    'function'
     *   |'ghl'
     *   |'make'
     *   |'bash'
     *   |'computer'
     *   |'textEditor'
     *   |'google.calendar.event.create'
     *   |'_unknown'
     * ),
     *   value: (
     *    FunctionToolWithToolCall
     *   |GhlToolWithToolCall
     *   |MakeToolWithToolCall
     *   |BashToolWithToolCall
     *   |ComputerToolWithToolCall
     *   |TextEditorToolWithToolCall
     *   |GoogleCalendarCreateEventToolWithToolCall
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
     * @param FunctionToolWithToolCall $function
     * @return ClientMessageToolCallsToolWithToolCallListItem
     */
    public static function function(FunctionToolWithToolCall $function): ClientMessageToolCallsToolWithToolCallListItem
    {
        return new ClientMessageToolCallsToolWithToolCallListItem([
            'type' => 'function',
            'value' => $function,
        ]);
    }

    /**
     * @param GhlToolWithToolCall $ghl
     * @return ClientMessageToolCallsToolWithToolCallListItem
     */
    public static function ghl(GhlToolWithToolCall $ghl): ClientMessageToolCallsToolWithToolCallListItem
    {
        return new ClientMessageToolCallsToolWithToolCallListItem([
            'type' => 'ghl',
            'value' => $ghl,
        ]);
    }

    /**
     * @param MakeToolWithToolCall $make
     * @return ClientMessageToolCallsToolWithToolCallListItem
     */
    public static function make(MakeToolWithToolCall $make): ClientMessageToolCallsToolWithToolCallListItem
    {
        return new ClientMessageToolCallsToolWithToolCallListItem([
            'type' => 'make',
            'value' => $make,
        ]);
    }

    /**
     * @param BashToolWithToolCall $bash
     * @return ClientMessageToolCallsToolWithToolCallListItem
     */
    public static function bash(BashToolWithToolCall $bash): ClientMessageToolCallsToolWithToolCallListItem
    {
        return new ClientMessageToolCallsToolWithToolCallListItem([
            'type' => 'bash',
            'value' => $bash,
        ]);
    }

    /**
     * @param ComputerToolWithToolCall $computer
     * @return ClientMessageToolCallsToolWithToolCallListItem
     */
    public static function computer(ComputerToolWithToolCall $computer): ClientMessageToolCallsToolWithToolCallListItem
    {
        return new ClientMessageToolCallsToolWithToolCallListItem([
            'type' => 'computer',
            'value' => $computer,
        ]);
    }

    /**
     * @param TextEditorToolWithToolCall $textEditor
     * @return ClientMessageToolCallsToolWithToolCallListItem
     */
    public static function textEditor(TextEditorToolWithToolCall $textEditor): ClientMessageToolCallsToolWithToolCallListItem
    {
        return new ClientMessageToolCallsToolWithToolCallListItem([
            'type' => 'textEditor',
            'value' => $textEditor,
        ]);
    }

    /**
     * @param GoogleCalendarCreateEventToolWithToolCall $googleCalendarEventCreate
     * @return ClientMessageToolCallsToolWithToolCallListItem
     */
    public static function googleCalendarEventCreate(GoogleCalendarCreateEventToolWithToolCall $googleCalendarEventCreate): ClientMessageToolCallsToolWithToolCallListItem
    {
        return new ClientMessageToolCallsToolWithToolCallListItem([
            'type' => 'google.calendar.event.create',
            'value' => $googleCalendarEventCreate,
        ]);
    }

    /**
     * @return bool
     */
    public function isFunction_(): bool
    {
        return $this->value instanceof FunctionToolWithToolCall && $this->type === 'function';
    }

    /**
     * @return FunctionToolWithToolCall
     */
    public function asFunction_(): FunctionToolWithToolCall
    {
        if (! ($this->value instanceof FunctionToolWithToolCall && $this->type === 'function')) {
            throw new Exception(
                "Expected function; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isGhl(): bool
    {
        return $this->value instanceof GhlToolWithToolCall && $this->type === 'ghl';
    }

    /**
     * @return GhlToolWithToolCall
     */
    public function asGhl(): GhlToolWithToolCall
    {
        if (! ($this->value instanceof GhlToolWithToolCall && $this->type === 'ghl')) {
            throw new Exception(
                "Expected ghl; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isMake(): bool
    {
        return $this->value instanceof MakeToolWithToolCall && $this->type === 'make';
    }

    /**
     * @return MakeToolWithToolCall
     */
    public function asMake(): MakeToolWithToolCall
    {
        if (! ($this->value instanceof MakeToolWithToolCall && $this->type === 'make')) {
            throw new Exception(
                "Expected make; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isBash(): bool
    {
        return $this->value instanceof BashToolWithToolCall && $this->type === 'bash';
    }

    /**
     * @return BashToolWithToolCall
     */
    public function asBash(): BashToolWithToolCall
    {
        if (! ($this->value instanceof BashToolWithToolCall && $this->type === 'bash')) {
            throw new Exception(
                "Expected bash; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isComputer(): bool
    {
        return $this->value instanceof ComputerToolWithToolCall && $this->type === 'computer';
    }

    /**
     * @return ComputerToolWithToolCall
     */
    public function asComputer(): ComputerToolWithToolCall
    {
        if (! ($this->value instanceof ComputerToolWithToolCall && $this->type === 'computer')) {
            throw new Exception(
                "Expected computer; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isTextEditor(): bool
    {
        return $this->value instanceof TextEditorToolWithToolCall && $this->type === 'textEditor';
    }

    /**
     * @return TextEditorToolWithToolCall
     */
    public function asTextEditor(): TextEditorToolWithToolCall
    {
        if (! ($this->value instanceof TextEditorToolWithToolCall && $this->type === 'textEditor')) {
            throw new Exception(
                "Expected textEditor; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isGoogleCalendarEventCreate(): bool
    {
        return $this->value instanceof GoogleCalendarCreateEventToolWithToolCall && $this->type === 'google.calendar.event.create';
    }

    /**
     * @return GoogleCalendarCreateEventToolWithToolCall
     */
    public function asGoogleCalendarEventCreate(): GoogleCalendarCreateEventToolWithToolCall
    {
        if (! ($this->value instanceof GoogleCalendarCreateEventToolWithToolCall && $this->type === 'google.calendar.event.create')) {
            throw new Exception(
                "Expected google.calendar.event.create; got " . $this->type . " with value of type " . get_debug_type($this->value),
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
            case 'function':
                $value = $this->asFunction_()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'ghl':
                $value = $this->asGhl()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'make':
                $value = $this->asMake()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'bash':
                $value = $this->asBash()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'computer':
                $value = $this->asComputer()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'textEditor':
                $value = $this->asTextEditor()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'google.calendar.event.create':
                $value = $this->asGoogleCalendarEventCreate()->jsonSerialize();
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
            case 'function':
                $args['value'] = FunctionToolWithToolCall::jsonDeserialize($data);
                break;
            case 'ghl':
                $args['value'] = GhlToolWithToolCall::jsonDeserialize($data);
                break;
            case 'make':
                $args['value'] = MakeToolWithToolCall::jsonDeserialize($data);
                break;
            case 'bash':
                $args['value'] = BashToolWithToolCall::jsonDeserialize($data);
                break;
            case 'computer':
                $args['value'] = ComputerToolWithToolCall::jsonDeserialize($data);
                break;
            case 'textEditor':
                $args['value'] = TextEditorToolWithToolCall::jsonDeserialize($data);
                break;
            case 'google.calendar.event.create':
                $args['value'] = GoogleCalendarCreateEventToolWithToolCall::jsonDeserialize($data);
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
