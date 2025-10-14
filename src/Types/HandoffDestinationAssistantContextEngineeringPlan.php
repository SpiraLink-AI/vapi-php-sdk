<?php declare(strict_types=1);

namespace Vapi\Types;

use Exception;
use Vapi\Core\Json\JsonDecoder;
use Vapi\Core\Json\JsonSerializableType;

/**
 * This is the plan for manipulating the message context before handing off the call to the next assistant.
 */
final class HandoffDestinationAssistantContextEngineeringPlan extends JsonSerializableType
{
    /**
     * @var (
     *    'lastNMessages'
     *   |'none'
     *   |'all'
     *   |'_unknown'
     * ) $type
     */
    public readonly string $type;

    /**
     * @var (
     *    ContextEngineeringPlanLastNMessages
     *   |ContextEngineeringPlanNone
     *   |ContextEngineeringPlanAll
     *   |mixed
     * ) $value
     */
    public readonly mixed $value;

    /**
     * @param array{
     *   type: (
     *    'lastNMessages'
     *   |'none'
     *   |'all'
     *   |'_unknown'
     * ),
     *   value: (
     *    ContextEngineeringPlanLastNMessages
     *   |ContextEngineeringPlanNone
     *   |ContextEngineeringPlanAll
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
     * @param ContextEngineeringPlanLastNMessages $lastNMessages
     * @return HandoffDestinationAssistantContextEngineeringPlan
     */
    public static function lastNMessages(ContextEngineeringPlanLastNMessages $lastNMessages): HandoffDestinationAssistantContextEngineeringPlan
    {
        return new HandoffDestinationAssistantContextEngineeringPlan([
            'type' => 'lastNMessages',
            'value' => $lastNMessages,
        ]);
    }

    /**
     * @param ContextEngineeringPlanNone $none
     * @return HandoffDestinationAssistantContextEngineeringPlan
     */
    public static function none(ContextEngineeringPlanNone $none): HandoffDestinationAssistantContextEngineeringPlan
    {
        return new HandoffDestinationAssistantContextEngineeringPlan([
            'type' => 'none',
            'value' => $none,
        ]);
    }

    /**
     * @param ContextEngineeringPlanAll $all
     * @return HandoffDestinationAssistantContextEngineeringPlan
     */
    public static function all(ContextEngineeringPlanAll $all): HandoffDestinationAssistantContextEngineeringPlan
    {
        return new HandoffDestinationAssistantContextEngineeringPlan([
            'type' => 'all',
            'value' => $all,
        ]);
    }

    /**
     * @return bool
     */
    public function isLastNMessages(): bool
    {
        return $this->value instanceof ContextEngineeringPlanLastNMessages && $this->type === 'lastNMessages';
    }

    /**
     * @return ContextEngineeringPlanLastNMessages
     */
    public function asLastNMessages(): ContextEngineeringPlanLastNMessages
    {
        if (! ($this->value instanceof ContextEngineeringPlanLastNMessages && $this->type === 'lastNMessages')) {
            throw new Exception(
                "Expected lastNMessages; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isNone(): bool
    {
        return $this->value instanceof ContextEngineeringPlanNone && $this->type === 'none';
    }

    /**
     * @return ContextEngineeringPlanNone
     */
    public function asNone(): ContextEngineeringPlanNone
    {
        if (! ($this->value instanceof ContextEngineeringPlanNone && $this->type === 'none')) {
            throw new Exception(
                "Expected none; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isAll(): bool
    {
        return $this->value instanceof ContextEngineeringPlanAll && $this->type === 'all';
    }

    /**
     * @return ContextEngineeringPlanAll
     */
    public function asAll(): ContextEngineeringPlanAll
    {
        if (! ($this->value instanceof ContextEngineeringPlanAll && $this->type === 'all')) {
            throw new Exception(
                "Expected all; got " . $this->type . " with value of type " . get_debug_type($this->value),
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
            case 'lastNMessages':
                $value = $this->asLastNMessages()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'none':
                $value = $this->asNone()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'all':
                $value = $this->asAll()->jsonSerialize();
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
            case 'lastNMessages':
                $args['value'] = ContextEngineeringPlanLastNMessages::jsonDeserialize($data);
                break;
            case 'none':
                $args['value'] = ContextEngineeringPlanNone::jsonDeserialize($data);
                break;
            case 'all':
                $args['value'] = ContextEngineeringPlanAll::jsonDeserialize($data);
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
