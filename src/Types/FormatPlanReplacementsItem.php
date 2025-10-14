<?php declare(strict_types=1);

namespace Vapi\Types;

use Exception;
use Vapi\Core\Json\JsonDecoder;
use Vapi\Core\Json\JsonSerializableType;

final class FormatPlanReplacementsItem extends JsonSerializableType
{
    /**
     * @var (
     *    'exact'
     *   |'regex'
     *   |'_unknown'
     * ) $type
     */
    public readonly string $type;

    /**
     * @var (
     *    ExactReplacement
     *   |RegexReplacement
     *   |mixed
     * ) $value
     */
    public readonly mixed $value;

    /**
     * @param array{
     *   type: (
     *    'exact'
     *   |'regex'
     *   |'_unknown'
     * ),
     *   value: (
     *    ExactReplacement
     *   |RegexReplacement
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
     * @param ExactReplacement $exact
     * @return FormatPlanReplacementsItem
     */
    public static function exact(ExactReplacement $exact): FormatPlanReplacementsItem
    {
        return new FormatPlanReplacementsItem([
            'type' => 'exact',
            'value' => $exact,
        ]);
    }

    /**
     * @param RegexReplacement $regex
     * @return FormatPlanReplacementsItem
     */
    public static function regex(RegexReplacement $regex): FormatPlanReplacementsItem
    {
        return new FormatPlanReplacementsItem([
            'type' => 'regex',
            'value' => $regex,
        ]);
    }

    /**
     * @return bool
     */
    public function isExact(): bool
    {
        return $this->value instanceof ExactReplacement && $this->type === 'exact';
    }

    /**
     * @return ExactReplacement
     */
    public function asExact(): ExactReplacement
    {
        if (! ($this->value instanceof ExactReplacement && $this->type === 'exact')) {
            throw new Exception(
                "Expected exact; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isRegex(): bool
    {
        return $this->value instanceof RegexReplacement && $this->type === 'regex';
    }

    /**
     * @return RegexReplacement
     */
    public function asRegex(): RegexReplacement
    {
        if (! ($this->value instanceof RegexReplacement && $this->type === 'regex')) {
            throw new Exception(
                "Expected regex; got " . $this->type . " with value of type " . get_debug_type($this->value),
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
            case 'exact':
                $value = $this->asExact()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'regex':
                $value = $this->asRegex()->jsonSerialize();
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
            case 'exact':
                $args['value'] = ExactReplacement::jsonDeserialize($data);
                break;
            case 'regex':
                $args['value'] = RegexReplacement::jsonDeserialize($data);
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
