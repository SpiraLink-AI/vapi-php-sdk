<?php declare(strict_types=1);

namespace Vapi\Types;

use Exception;
use Vapi\Core\Json\JsonDecoder;
use Vapi\Core\Json\JsonSerializableType;

final class CompliancePlanRecordingConsentPlan extends JsonSerializableType
{
    /**
     * @var (
     *    'stay-on-line'
     *   |'verbal'
     *   |'_unknown'
     * ) $type
     */
    public readonly string $type;

    /**
     * @var (
     *    RecordingConsentPlanStayOnLine
     *   |RecordingConsentPlanVerbal
     *   |mixed
     * ) $value
     */
    public readonly mixed $value;

    /**
     * @param array{
     *   type: (
     *    'stay-on-line'
     *   |'verbal'
     *   |'_unknown'
     * ),
     *   value: (
     *    RecordingConsentPlanStayOnLine
     *   |RecordingConsentPlanVerbal
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
     * @param RecordingConsentPlanStayOnLine $stayOnLine
     * @return CompliancePlanRecordingConsentPlan
     */
    public static function stayOnLine(RecordingConsentPlanStayOnLine $stayOnLine): CompliancePlanRecordingConsentPlan
    {
        return new CompliancePlanRecordingConsentPlan([
            'type' => 'stay-on-line',
            'value' => $stayOnLine,
        ]);
    }

    /**
     * @param RecordingConsentPlanVerbal $verbal
     * @return CompliancePlanRecordingConsentPlan
     */
    public static function verbal(RecordingConsentPlanVerbal $verbal): CompliancePlanRecordingConsentPlan
    {
        return new CompliancePlanRecordingConsentPlan([
            'type' => 'verbal',
            'value' => $verbal,
        ]);
    }

    /**
     * @return bool
     */
    public function isStayOnLine(): bool
    {
        return $this->value instanceof RecordingConsentPlanStayOnLine && $this->type === 'stay-on-line';
    }

    /**
     * @return RecordingConsentPlanStayOnLine
     */
    public function asStayOnLine(): RecordingConsentPlanStayOnLine
    {
        if (! ($this->value instanceof RecordingConsentPlanStayOnLine && $this->type === 'stay-on-line')) {
            throw new Exception(
                "Expected stay-on-line; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isVerbal(): bool
    {
        return $this->value instanceof RecordingConsentPlanVerbal && $this->type === 'verbal';
    }

    /**
     * @return RecordingConsentPlanVerbal
     */
    public function asVerbal(): RecordingConsentPlanVerbal
    {
        if (! ($this->value instanceof RecordingConsentPlanVerbal && $this->type === 'verbal')) {
            throw new Exception(
                "Expected verbal; got " . $this->type . " with value of type " . get_debug_type($this->value),
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
            case 'stay-on-line':
                $value = $this->asStayOnLine()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'verbal':
                $value = $this->asVerbal()->jsonSerialize();
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
            case 'stay-on-line':
                $args['value'] = RecordingConsentPlanStayOnLine::jsonDeserialize($data);
                break;
            case 'verbal':
                $args['value'] = RecordingConsentPlanVerbal::jsonDeserialize($data);
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
