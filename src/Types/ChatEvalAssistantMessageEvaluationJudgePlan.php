<?php declare(strict_types=1);

namespace Vapi\Types;

use Exception;
use Vapi\Core\Json\JsonDecoder;
use Vapi\Core\Json\JsonSerializableType;

/**
 * This is the judge plan that instructs how to evaluate the assistant message.
 * The assistant message can be evaluated against fixed content (exact match or RegEx) or with an LLM-as-judge by defining the evaluation criteria in a prompt.
 */
final class ChatEvalAssistantMessageEvaluationJudgePlan extends JsonSerializableType
{
    /**
     * @var (
     *    'exact'
     *   |'regex'
     *   |'ai'
     *   |'_unknown'
     * ) $type
     */
    public readonly string $type;

    /**
     * @var (
     *    AssistantMessageJudgePlanExact
     *   |AssistantMessageJudgePlanRegex
     *   |AssistantMessageJudgePlanAi
     *   |mixed
     * ) $value
     */
    public readonly mixed $value;

    /**
     * @param array{
     *   type: (
     *    'exact'
     *   |'regex'
     *   |'ai'
     *   |'_unknown'
     * ),
     *   value: (
     *    AssistantMessageJudgePlanExact
     *   |AssistantMessageJudgePlanRegex
     *   |AssistantMessageJudgePlanAi
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
     * @param AssistantMessageJudgePlanExact $exact
     * @return ChatEvalAssistantMessageEvaluationJudgePlan
     */
    public static function exact(AssistantMessageJudgePlanExact $exact): ChatEvalAssistantMessageEvaluationJudgePlan
    {
        return new ChatEvalAssistantMessageEvaluationJudgePlan([
            'type' => 'exact',
            'value' => $exact,
        ]);
    }

    /**
     * @param AssistantMessageJudgePlanRegex $regex
     * @return ChatEvalAssistantMessageEvaluationJudgePlan
     */
    public static function regex(AssistantMessageJudgePlanRegex $regex): ChatEvalAssistantMessageEvaluationJudgePlan
    {
        return new ChatEvalAssistantMessageEvaluationJudgePlan([
            'type' => 'regex',
            'value' => $regex,
        ]);
    }

    /**
     * @param AssistantMessageJudgePlanAi $ai
     * @return ChatEvalAssistantMessageEvaluationJudgePlan
     */
    public static function ai(AssistantMessageJudgePlanAi $ai): ChatEvalAssistantMessageEvaluationJudgePlan
    {
        return new ChatEvalAssistantMessageEvaluationJudgePlan([
            'type' => 'ai',
            'value' => $ai,
        ]);
    }

    /**
     * @return bool
     */
    public function isExact(): bool
    {
        return $this->value instanceof AssistantMessageJudgePlanExact && $this->type === 'exact';
    }

    /**
     * @return AssistantMessageJudgePlanExact
     */
    public function asExact(): AssistantMessageJudgePlanExact
    {
        if (! ($this->value instanceof AssistantMessageJudgePlanExact && $this->type === 'exact')) {
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
        return $this->value instanceof AssistantMessageJudgePlanRegex && $this->type === 'regex';
    }

    /**
     * @return AssistantMessageJudgePlanRegex
     */
    public function asRegex(): AssistantMessageJudgePlanRegex
    {
        if (! ($this->value instanceof AssistantMessageJudgePlanRegex && $this->type === 'regex')) {
            throw new Exception(
                "Expected regex; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isAi(): bool
    {
        return $this->value instanceof AssistantMessageJudgePlanAi && $this->type === 'ai';
    }

    /**
     * @return AssistantMessageJudgePlanAi
     */
    public function asAi(): AssistantMessageJudgePlanAi
    {
        if (! ($this->value instanceof AssistantMessageJudgePlanAi && $this->type === 'ai')) {
            throw new Exception(
                "Expected ai; got " . $this->type . " with value of type " . get_debug_type($this->value),
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
            case 'ai':
                $value = $this->asAi()->jsonSerialize();
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
                $args['value'] = AssistantMessageJudgePlanExact::jsonDeserialize($data);
                break;
            case 'regex':
                $args['value'] = AssistantMessageJudgePlanRegex::jsonDeserialize($data);
                break;
            case 'ai':
                $args['value'] = AssistantMessageJudgePlanAi::jsonDeserialize($data);
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
