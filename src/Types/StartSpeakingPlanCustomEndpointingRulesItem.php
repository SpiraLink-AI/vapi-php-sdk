<?php declare(strict_types=1);

namespace Vapi\Types;

use Exception;
use Vapi\Core\Json\JsonDecoder;
use Vapi\Core\Json\JsonSerializableType;

final class StartSpeakingPlanCustomEndpointingRulesItem extends JsonSerializableType
{
    /**
     * @var (
     *    'assistant'
     *   |'customer'
     *   |'both'
     *   |'_unknown'
     * ) $type
     */
    public readonly string $type;

    /**
     * @var (
     *    AssistantCustomEndpointingRule
     *   |CustomerCustomEndpointingRule
     *   |BothCustomEndpointingRule
     *   |mixed
     * ) $value
     */
    public readonly mixed $value;

    /**
     * @param array{
     *   type: (
     *    'assistant'
     *   |'customer'
     *   |'both'
     *   |'_unknown'
     * ),
     *   value: (
     *    AssistantCustomEndpointingRule
     *   |CustomerCustomEndpointingRule
     *   |BothCustomEndpointingRule
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
     * @param AssistantCustomEndpointingRule $assistant
     * @return StartSpeakingPlanCustomEndpointingRulesItem
     */
    public static function assistant(AssistantCustomEndpointingRule $assistant): StartSpeakingPlanCustomEndpointingRulesItem
    {
        return new StartSpeakingPlanCustomEndpointingRulesItem([
            'type' => 'assistant',
            'value' => $assistant,
        ]);
    }

    /**
     * @param CustomerCustomEndpointingRule $customer
     * @return StartSpeakingPlanCustomEndpointingRulesItem
     */
    public static function customer(CustomerCustomEndpointingRule $customer): StartSpeakingPlanCustomEndpointingRulesItem
    {
        return new StartSpeakingPlanCustomEndpointingRulesItem([
            'type' => 'customer',
            'value' => $customer,
        ]);
    }

    /**
     * @param BothCustomEndpointingRule $both
     * @return StartSpeakingPlanCustomEndpointingRulesItem
     */
    public static function both(BothCustomEndpointingRule $both): StartSpeakingPlanCustomEndpointingRulesItem
    {
        return new StartSpeakingPlanCustomEndpointingRulesItem([
            'type' => 'both',
            'value' => $both,
        ]);
    }

    /**
     * @return bool
     */
    public function isAssistant(): bool
    {
        return $this->value instanceof AssistantCustomEndpointingRule && $this->type === 'assistant';
    }

    /**
     * @return AssistantCustomEndpointingRule
     */
    public function asAssistant(): AssistantCustomEndpointingRule
    {
        if (! ($this->value instanceof AssistantCustomEndpointingRule && $this->type === 'assistant')) {
            throw new Exception(
                "Expected assistant; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isCustomer(): bool
    {
        return $this->value instanceof CustomerCustomEndpointingRule && $this->type === 'customer';
    }

    /**
     * @return CustomerCustomEndpointingRule
     */
    public function asCustomer(): CustomerCustomEndpointingRule
    {
        if (! ($this->value instanceof CustomerCustomEndpointingRule && $this->type === 'customer')) {
            throw new Exception(
                "Expected customer; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isBoth(): bool
    {
        return $this->value instanceof BothCustomEndpointingRule && $this->type === 'both';
    }

    /**
     * @return BothCustomEndpointingRule
     */
    public function asBoth(): BothCustomEndpointingRule
    {
        if (! ($this->value instanceof BothCustomEndpointingRule && $this->type === 'both')) {
            throw new Exception(
                "Expected both; got " . $this->type . " with value of type " . get_debug_type($this->value),
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
            case 'customer':
                $value = $this->asCustomer()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'both':
                $value = $this->asBoth()->jsonSerialize();
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
                $args['value'] = AssistantCustomEndpointingRule::jsonDeserialize($data);
                break;
            case 'customer':
                $args['value'] = CustomerCustomEndpointingRule::jsonDeserialize($data);
                break;
            case 'both':
                $args['value'] = BothCustomEndpointingRule::jsonDeserialize($data);
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
