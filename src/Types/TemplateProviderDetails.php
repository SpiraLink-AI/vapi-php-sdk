<?php declare(strict_types=1);

namespace Vapi\Types;

use Exception;
use Vapi\Core\Json\JsonDecoder;
use Vapi\Core\Json\JsonSerializableType;

final class TemplateProviderDetails extends JsonSerializableType
{
    /**
     * @var (
     *    'make'
     *   |'ghl'
     *   |'function'
     *   |'google.calendar.event.create'
     *   |'google.sheets.row.append'
     *   |'gohighlevel.calendar.availability.check'
     *   |'gohighlevel.calendar.event.create'
     *   |'gohighlevel.contact.create'
     *   |'gohighlevel.contact.get'
     *   |'_unknown'
     * ) $type
     */
    public readonly string $type;

    /**
     * @var (
     *    MakeToolProviderDetails
     *   |GhlToolProviderDetails
     *   |FunctionToolProviderDetails
     *   |GoogleCalendarCreateEventToolProviderDetails
     *   |GoogleSheetsRowAppendToolProviderDetails
     *   |GoHighLevelCalendarAvailabilityToolProviderDetails
     *   |GoHighLevelCalendarEventCreateToolProviderDetails
     *   |GoHighLevelContactCreateToolProviderDetails
     *   |GoHighLevelContactGetToolProviderDetails
     *   |mixed
     * ) $value
     */
    public readonly mixed $value;

    /**
     * @param array{
     *   type: (
     *    'make'
     *   |'ghl'
     *   |'function'
     *   |'google.calendar.event.create'
     *   |'google.sheets.row.append'
     *   |'gohighlevel.calendar.availability.check'
     *   |'gohighlevel.calendar.event.create'
     *   |'gohighlevel.contact.create'
     *   |'gohighlevel.contact.get'
     *   |'_unknown'
     * ),
     *   value: (
     *    MakeToolProviderDetails
     *   |GhlToolProviderDetails
     *   |FunctionToolProviderDetails
     *   |GoogleCalendarCreateEventToolProviderDetails
     *   |GoogleSheetsRowAppendToolProviderDetails
     *   |GoHighLevelCalendarAvailabilityToolProviderDetails
     *   |GoHighLevelCalendarEventCreateToolProviderDetails
     *   |GoHighLevelContactCreateToolProviderDetails
     *   |GoHighLevelContactGetToolProviderDetails
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
     * @param MakeToolProviderDetails $make
     * @return TemplateProviderDetails
     */
    public static function make(MakeToolProviderDetails $make): TemplateProviderDetails
    {
        return new TemplateProviderDetails([
            'type' => 'make',
            'value' => $make,
        ]);
    }

    /**
     * @param GhlToolProviderDetails $ghl
     * @return TemplateProviderDetails
     */
    public static function ghl(GhlToolProviderDetails $ghl): TemplateProviderDetails
    {
        return new TemplateProviderDetails([
            'type' => 'ghl',
            'value' => $ghl,
        ]);
    }

    /**
     * @param FunctionToolProviderDetails $function
     * @return TemplateProviderDetails
     */
    public static function function(FunctionToolProviderDetails $function): TemplateProviderDetails
    {
        return new TemplateProviderDetails([
            'type' => 'function',
            'value' => $function,
        ]);
    }

    /**
     * @param GoogleCalendarCreateEventToolProviderDetails $googleCalendarEventCreate
     * @return TemplateProviderDetails
     */
    public static function googleCalendarEventCreate(GoogleCalendarCreateEventToolProviderDetails $googleCalendarEventCreate): TemplateProviderDetails
    {
        return new TemplateProviderDetails([
            'type' => 'google.calendar.event.create',
            'value' => $googleCalendarEventCreate,
        ]);
    }

    /**
     * @param GoogleSheetsRowAppendToolProviderDetails $googleSheetsRowAppend
     * @return TemplateProviderDetails
     */
    public static function googleSheetsRowAppend(GoogleSheetsRowAppendToolProviderDetails $googleSheetsRowAppend): TemplateProviderDetails
    {
        return new TemplateProviderDetails([
            'type' => 'google.sheets.row.append',
            'value' => $googleSheetsRowAppend,
        ]);
    }

    /**
     * @param GoHighLevelCalendarAvailabilityToolProviderDetails $gohighlevelCalendarAvailabilityCheck
     * @return TemplateProviderDetails
     */
    public static function gohighlevelCalendarAvailabilityCheck(GoHighLevelCalendarAvailabilityToolProviderDetails $gohighlevelCalendarAvailabilityCheck): TemplateProviderDetails
    {
        return new TemplateProviderDetails([
            'type' => 'gohighlevel.calendar.availability.check',
            'value' => $gohighlevelCalendarAvailabilityCheck,
        ]);
    }

    /**
     * @param GoHighLevelCalendarEventCreateToolProviderDetails $gohighlevelCalendarEventCreate
     * @return TemplateProviderDetails
     */
    public static function gohighlevelCalendarEventCreate(GoHighLevelCalendarEventCreateToolProviderDetails $gohighlevelCalendarEventCreate): TemplateProviderDetails
    {
        return new TemplateProviderDetails([
            'type' => 'gohighlevel.calendar.event.create',
            'value' => $gohighlevelCalendarEventCreate,
        ]);
    }

    /**
     * @param GoHighLevelContactCreateToolProviderDetails $gohighlevelContactCreate
     * @return TemplateProviderDetails
     */
    public static function gohighlevelContactCreate(GoHighLevelContactCreateToolProviderDetails $gohighlevelContactCreate): TemplateProviderDetails
    {
        return new TemplateProviderDetails([
            'type' => 'gohighlevel.contact.create',
            'value' => $gohighlevelContactCreate,
        ]);
    }

    /**
     * @param GoHighLevelContactGetToolProviderDetails $gohighlevelContactGet
     * @return TemplateProviderDetails
     */
    public static function gohighlevelContactGet(GoHighLevelContactGetToolProviderDetails $gohighlevelContactGet): TemplateProviderDetails
    {
        return new TemplateProviderDetails([
            'type' => 'gohighlevel.contact.get',
            'value' => $gohighlevelContactGet,
        ]);
    }

    /**
     * @return bool
     */
    public function isMake(): bool
    {
        return $this->value instanceof MakeToolProviderDetails && $this->type === 'make';
    }

    /**
     * @return MakeToolProviderDetails
     */
    public function asMake(): MakeToolProviderDetails
    {
        if (! ($this->value instanceof MakeToolProviderDetails && $this->type === 'make')) {
            throw new Exception(
                "Expected make; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isGhl(): bool
    {
        return $this->value instanceof GhlToolProviderDetails && $this->type === 'ghl';
    }

    /**
     * @return GhlToolProviderDetails
     */
    public function asGhl(): GhlToolProviderDetails
    {
        if (! ($this->value instanceof GhlToolProviderDetails && $this->type === 'ghl')) {
            throw new Exception(
                "Expected ghl; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isFunction_(): bool
    {
        return $this->value instanceof FunctionToolProviderDetails && $this->type === 'function';
    }

    /**
     * @return FunctionToolProviderDetails
     */
    public function asFunction_(): FunctionToolProviderDetails
    {
        if (! ($this->value instanceof FunctionToolProviderDetails && $this->type === 'function')) {
            throw new Exception(
                "Expected function; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isGoogleCalendarEventCreate(): bool
    {
        return $this->value instanceof GoogleCalendarCreateEventToolProviderDetails && $this->type === 'google.calendar.event.create';
    }

    /**
     * @return GoogleCalendarCreateEventToolProviderDetails
     */
    public function asGoogleCalendarEventCreate(): GoogleCalendarCreateEventToolProviderDetails
    {
        if (! ($this->value instanceof GoogleCalendarCreateEventToolProviderDetails && $this->type === 'google.calendar.event.create')) {
            throw new Exception(
                "Expected google.calendar.event.create; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isGoogleSheetsRowAppend(): bool
    {
        return $this->value instanceof GoogleSheetsRowAppendToolProviderDetails && $this->type === 'google.sheets.row.append';
    }

    /**
     * @return GoogleSheetsRowAppendToolProviderDetails
     */
    public function asGoogleSheetsRowAppend(): GoogleSheetsRowAppendToolProviderDetails
    {
        if (! ($this->value instanceof GoogleSheetsRowAppendToolProviderDetails && $this->type === 'google.sheets.row.append')) {
            throw new Exception(
                "Expected google.sheets.row.append; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isGohighlevelCalendarAvailabilityCheck(): bool
    {
        return $this->value instanceof GoHighLevelCalendarAvailabilityToolProviderDetails && $this->type === 'gohighlevel.calendar.availability.check';
    }

    /**
     * @return GoHighLevelCalendarAvailabilityToolProviderDetails
     */
    public function asGohighlevelCalendarAvailabilityCheck(): GoHighLevelCalendarAvailabilityToolProviderDetails
    {
        if (! ($this->value instanceof GoHighLevelCalendarAvailabilityToolProviderDetails && $this->type === 'gohighlevel.calendar.availability.check')) {
            throw new Exception(
                "Expected gohighlevel.calendar.availability.check; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isGohighlevelCalendarEventCreate(): bool
    {
        return $this->value instanceof GoHighLevelCalendarEventCreateToolProviderDetails && $this->type === 'gohighlevel.calendar.event.create';
    }

    /**
     * @return GoHighLevelCalendarEventCreateToolProviderDetails
     */
    public function asGohighlevelCalendarEventCreate(): GoHighLevelCalendarEventCreateToolProviderDetails
    {
        if (! ($this->value instanceof GoHighLevelCalendarEventCreateToolProviderDetails && $this->type === 'gohighlevel.calendar.event.create')) {
            throw new Exception(
                "Expected gohighlevel.calendar.event.create; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isGohighlevelContactCreate(): bool
    {
        return $this->value instanceof GoHighLevelContactCreateToolProviderDetails && $this->type === 'gohighlevel.contact.create';
    }

    /**
     * @return GoHighLevelContactCreateToolProviderDetails
     */
    public function asGohighlevelContactCreate(): GoHighLevelContactCreateToolProviderDetails
    {
        if (! ($this->value instanceof GoHighLevelContactCreateToolProviderDetails && $this->type === 'gohighlevel.contact.create')) {
            throw new Exception(
                "Expected gohighlevel.contact.create; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isGohighlevelContactGet(): bool
    {
        return $this->value instanceof GoHighLevelContactGetToolProviderDetails && $this->type === 'gohighlevel.contact.get';
    }

    /**
     * @return GoHighLevelContactGetToolProviderDetails
     */
    public function asGohighlevelContactGet(): GoHighLevelContactGetToolProviderDetails
    {
        if (! ($this->value instanceof GoHighLevelContactGetToolProviderDetails && $this->type === 'gohighlevel.contact.get')) {
            throw new Exception(
                "Expected gohighlevel.contact.get; got " . $this->type . " with value of type " . get_debug_type($this->value),
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
            case 'make':
                $value = $this->asMake()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'ghl':
                $value = $this->asGhl()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'function':
                $value = $this->asFunction_()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'google.calendar.event.create':
                $value = $this->asGoogleCalendarEventCreate()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'google.sheets.row.append':
                $value = $this->asGoogleSheetsRowAppend()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'gohighlevel.calendar.availability.check':
                $value = $this->asGohighlevelCalendarAvailabilityCheck()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'gohighlevel.calendar.event.create':
                $value = $this->asGohighlevelCalendarEventCreate()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'gohighlevel.contact.create':
                $value = $this->asGohighlevelContactCreate()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'gohighlevel.contact.get':
                $value = $this->asGohighlevelContactGet()->jsonSerialize();
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
            case 'make':
                $args['value'] = MakeToolProviderDetails::jsonDeserialize($data);
                break;
            case 'ghl':
                $args['value'] = GhlToolProviderDetails::jsonDeserialize($data);
                break;
            case 'function':
                $args['value'] = FunctionToolProviderDetails::jsonDeserialize($data);
                break;
            case 'google.calendar.event.create':
                $args['value'] = GoogleCalendarCreateEventToolProviderDetails::jsonDeserialize($data);
                break;
            case 'google.sheets.row.append':
                $args['value'] = GoogleSheetsRowAppendToolProviderDetails::jsonDeserialize($data);
                break;
            case 'gohighlevel.calendar.availability.check':
                $args['value'] = GoHighLevelCalendarAvailabilityToolProviderDetails::jsonDeserialize($data);
                break;
            case 'gohighlevel.calendar.event.create':
                $args['value'] = GoHighLevelCalendarEventCreateToolProviderDetails::jsonDeserialize($data);
                break;
            case 'gohighlevel.contact.create':
                $args['value'] = GoHighLevelContactCreateToolProviderDetails::jsonDeserialize($data);
                break;
            case 'gohighlevel.contact.get':
                $args['value'] = GoHighLevelContactGetToolProviderDetails::jsonDeserialize($data);
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
