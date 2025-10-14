<?php declare(strict_types=1);

namespace Vapi\Types;

use Exception;
use Vapi\Core\Json\JsonDecoder;
use Vapi\Core\Json\JsonSerializableType;

final class CreateHandoffToolDtoDestinationsItem extends JsonSerializableType
{
    /**
     * @var (
     *    'assistant'
     *   |'dynamic'
     *   |'_unknown'
     * ) $type
     */
    public readonly string $type;

    /**
     * @var (
     *    HandoffDestinationAssistant
     *   |HandoffDestinationDynamic
     *   |mixed
     * ) $value
     */
    public readonly mixed $value;

    /**
     * @param array{
     *   type: (
     *    'assistant'
     *   |'dynamic'
     *   |'_unknown'
     * ),
     *   value: (
     *    HandoffDestinationAssistant
     *   |HandoffDestinationDynamic
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
     * @param HandoffDestinationAssistant $assistant
     * @return CreateHandoffToolDtoDestinationsItem
     */
    public static function assistant(HandoffDestinationAssistant $assistant): CreateHandoffToolDtoDestinationsItem
    {
        return new CreateHandoffToolDtoDestinationsItem([
            'type' => 'assistant',
            'value' => $assistant,
        ]);
    }

    /**
     * @param HandoffDestinationDynamic $dynamic
     * @return CreateHandoffToolDtoDestinationsItem
     */
    public static function dynamic(HandoffDestinationDynamic $dynamic): CreateHandoffToolDtoDestinationsItem
    {
        return new CreateHandoffToolDtoDestinationsItem([
            'type' => 'dynamic',
            'value' => $dynamic,
        ]);
    }

    /**
     * @return bool
     */
    public function isAssistant(): bool
    {
        return $this->value instanceof HandoffDestinationAssistant && $this->type === 'assistant';
    }

    /**
     * @return HandoffDestinationAssistant
     */
    public function asAssistant(): HandoffDestinationAssistant
    {
        if (! ($this->value instanceof HandoffDestinationAssistant && $this->type === 'assistant')) {
            throw new Exception(
                "Expected assistant; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isDynamic(): bool
    {
        return $this->value instanceof HandoffDestinationDynamic && $this->type === 'dynamic';
    }

    /**
     * @return HandoffDestinationDynamic
     */
    public function asDynamic(): HandoffDestinationDynamic
    {
        if (! ($this->value instanceof HandoffDestinationDynamic && $this->type === 'dynamic')) {
            throw new Exception(
                "Expected dynamic; got " . $this->type . " with value of type " . get_debug_type($this->value),
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
            case 'dynamic':
                $value = $this->asDynamic()->jsonSerialize();
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
                $args['value'] = HandoffDestinationAssistant::jsonDeserialize($data);
                break;
            case 'dynamic':
                $args['value'] = HandoffDestinationDynamic::jsonDeserialize($data);
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
