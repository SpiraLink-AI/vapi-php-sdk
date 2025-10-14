<?php declare(strict_types=1);

namespace Vapi\Types;

use Exception;
use Vapi\Core\Json\JsonDecoder;
use Vapi\Core\Json\JsonSerializableType;

/**
 * This is the target that will be run against the eval
 */
final class EvalRunTarget extends JsonSerializableType
{
    /**
     * @var (
     *    'assistant'
     *   |'squad'
     *   |'_unknown'
     * ) $type
     */
    public readonly string $type;

    /**
     * @var (
     *    EvalRunTargetAssistant
     *   |EvalRunTargetSquad
     *   |mixed
     * ) $value
     */
    public readonly mixed $value;

    /**
     * @param array{
     *   type: (
     *    'assistant'
     *   |'squad'
     *   |'_unknown'
     * ),
     *   value: (
     *    EvalRunTargetAssistant
     *   |EvalRunTargetSquad
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
     * @param EvalRunTargetAssistant $assistant
     * @return EvalRunTarget
     */
    public static function assistant(EvalRunTargetAssistant $assistant): EvalRunTarget
    {
        return new EvalRunTarget([
            'type' => 'assistant',
            'value' => $assistant,
        ]);
    }

    /**
     * @param EvalRunTargetSquad $squad
     * @return EvalRunTarget
     */
    public static function squad(EvalRunTargetSquad $squad): EvalRunTarget
    {
        return new EvalRunTarget([
            'type' => 'squad',
            'value' => $squad,
        ]);
    }

    /**
     * @return bool
     */
    public function isAssistant(): bool
    {
        return $this->value instanceof EvalRunTargetAssistant && $this->type === 'assistant';
    }

    /**
     * @return EvalRunTargetAssistant
     */
    public function asAssistant(): EvalRunTargetAssistant
    {
        if (! ($this->value instanceof EvalRunTargetAssistant && $this->type === 'assistant')) {
            throw new Exception(
                "Expected assistant; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isSquad(): bool
    {
        return $this->value instanceof EvalRunTargetSquad && $this->type === 'squad';
    }

    /**
     * @return EvalRunTargetSquad
     */
    public function asSquad(): EvalRunTargetSquad
    {
        if (! ($this->value instanceof EvalRunTargetSquad && $this->type === 'squad')) {
            throw new Exception(
                "Expected squad; got " . $this->type . " with value of type " . get_debug_type($this->value),
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
            case 'assistant':
                $value = $this->asAssistant()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'squad':
                $value = $this->asSquad()->jsonSerialize();
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
            case 'assistant':
                $args['value'] = EvalRunTargetAssistant::jsonDeserialize($data);
                break;
            case 'squad':
                $args['value'] = EvalRunTargetSquad::jsonDeserialize($data);
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
