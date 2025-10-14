<?php declare(strict_types=1);

namespace Vapi\Types;

use Exception;
use Vapi\Core\Json\JsonDecoder;
use Vapi\Core\Json\JsonSerializableType;

final class ToolRejectionPlanConditionsItem extends JsonSerializableType
{
    /**
     * @var (
     *    'regex'
     *   |'liquid'
     *   |'group'
     *   |'_unknown'
     * ) $type
     */
    public readonly string $type;

    /**
     * @var (
     *    RegexCondition
     *   |LiquidCondition
     *   |GroupCondition
     *   |mixed
     * ) $value
     */
    public readonly mixed $value;

    /**
     * @param array{
     *   type: (
     *    'regex'
     *   |'liquid'
     *   |'group'
     *   |'_unknown'
     * ),
     *   value: (
     *    RegexCondition
     *   |LiquidCondition
     *   |GroupCondition
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
     * @param RegexCondition $regex
     * @return ToolRejectionPlanConditionsItem
     */
    public static function regex(RegexCondition $regex): ToolRejectionPlanConditionsItem
    {
        return new ToolRejectionPlanConditionsItem([
            'type' => 'regex',
            'value' => $regex,
        ]);
    }

    /**
     * @param LiquidCondition $liquid
     * @return ToolRejectionPlanConditionsItem
     */
    public static function liquid(LiquidCondition $liquid): ToolRejectionPlanConditionsItem
    {
        return new ToolRejectionPlanConditionsItem([
            'type' => 'liquid',
            'value' => $liquid,
        ]);
    }

    /**
     * @param GroupCondition $group
     * @return ToolRejectionPlanConditionsItem
     */
    public static function group(GroupCondition $group): ToolRejectionPlanConditionsItem
    {
        return new ToolRejectionPlanConditionsItem([
            'type' => 'group',
            'value' => $group,
        ]);
    }

    /**
     * @return bool
     */
    public function isRegex(): bool
    {
        return $this->value instanceof RegexCondition && $this->type === 'regex';
    }

    /**
     * @return RegexCondition
     */
    public function asRegex(): RegexCondition
    {
        if (! ($this->value instanceof RegexCondition && $this->type === 'regex')) {
            throw new Exception(
                "Expected regex; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isLiquid(): bool
    {
        return $this->value instanceof LiquidCondition && $this->type === 'liquid';
    }

    /**
     * @return LiquidCondition
     */
    public function asLiquid(): LiquidCondition
    {
        if (! ($this->value instanceof LiquidCondition && $this->type === 'liquid')) {
            throw new Exception(
                "Expected liquid; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isGroup(): bool
    {
        return $this->value instanceof GroupCondition && $this->type === 'group';
    }

    /**
     * @return GroupCondition
     */
    public function asGroup(): GroupCondition
    {
        if (! ($this->value instanceof GroupCondition && $this->type === 'group')) {
            throw new Exception(
                "Expected group; got " . $this->type . " with value of type " . get_debug_type($this->value),
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
            case 'regex':
                $value = $this->asRegex()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'liquid':
                $value = $this->asLiquid()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'group':
                $value = $this->asGroup()->jsonSerialize();
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
            case 'regex':
                $args['value'] = RegexCondition::jsonDeserialize($data);
                break;
            case 'liquid':
                $args['value'] = LiquidCondition::jsonDeserialize($data);
                break;
            case 'group':
                $args['value'] = GroupCondition::jsonDeserialize($data);
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
