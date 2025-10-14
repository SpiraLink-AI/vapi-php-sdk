<?php declare(strict_types=1);

namespace Vapi\Types;

use Exception;
use Vapi\Core\Json\JsonDecoder;
use Vapi\Core\Json\JsonSerializableType;

/**
 * This is the model to use for the LLM-as-a-judge.
 * If not provided, will default to the assistant's model.
 *
 * The instructions on how to evaluate the model output with this LLM-Judge must be passed as a system message in the messages array of the model.
 *
 * The Mock conversation can be passed to the LLM-Judge to evaluate using the prompt {{messages}} and will be evaluated as a LiquidJS Variable. To access and judge only the last message, use {{messages[-1]}}
 *
 * The LLM-Judge must respond with "pass" or "fail" and only those two responses are allowed.
 */
final class AssistantMessageJudgePlanAiModel extends JsonSerializableType
{
    /**
     * @var (
     *    'openai'
     *   |'anthropic'
     *   |'google'
     *   |'custom-llm'
     *   |'_unknown'
     * ) $provider
     */
    public readonly string $provider;

    /**
     * @var (
     *    EvalOpenAiModel
     *   |EvalAnthropicModel
     *   |EvalGoogleModel
     *   |EvalCustomModel
     *   |mixed
     * ) $value
     */
    public readonly mixed $value;

    /**
     * @param array{
     *   provider: (
     *    'openai'
     *   |'anthropic'
     *   |'google'
     *   |'custom-llm'
     *   |'_unknown'
     * ),
     *   value: (
     *    EvalOpenAiModel
     *   |EvalAnthropicModel
     *   |EvalGoogleModel
     *   |EvalCustomModel
     *   |mixed
     * ),
     * } $values
     */
    private function __construct(
        array $values,
    ) {
        $this->provider = $values['provider'];
        $this->value = $values['value'];
    }

    /**
     * @param EvalOpenAiModel $openai
     * @return AssistantMessageJudgePlanAiModel
     */
    public static function openai(EvalOpenAiModel $openai): AssistantMessageJudgePlanAiModel
    {
        return new AssistantMessageJudgePlanAiModel([
            'provider' => 'openai',
            'value' => $openai,
        ]);
    }

    /**
     * @param EvalAnthropicModel $anthropic
     * @return AssistantMessageJudgePlanAiModel
     */
    public static function anthropic(EvalAnthropicModel $anthropic): AssistantMessageJudgePlanAiModel
    {
        return new AssistantMessageJudgePlanAiModel([
            'provider' => 'anthropic',
            'value' => $anthropic,
        ]);
    }

    /**
     * @param EvalGoogleModel $google
     * @return AssistantMessageJudgePlanAiModel
     */
    public static function google(EvalGoogleModel $google): AssistantMessageJudgePlanAiModel
    {
        return new AssistantMessageJudgePlanAiModel([
            'provider' => 'google',
            'value' => $google,
        ]);
    }

    /**
     * @param EvalCustomModel $customLlm
     * @return AssistantMessageJudgePlanAiModel
     */
    public static function customLlm(EvalCustomModel $customLlm): AssistantMessageJudgePlanAiModel
    {
        return new AssistantMessageJudgePlanAiModel([
            'provider' => 'custom-llm',
            'value' => $customLlm,
        ]);
    }

    /**
     * @return bool
     */
    public function isOpenai(): bool
    {
        return $this->value instanceof EvalOpenAiModel && $this->provider === 'openai';
    }

    /**
     * @return EvalOpenAiModel
     */
    public function asOpenai(): EvalOpenAiModel
    {
        if (! ($this->value instanceof EvalOpenAiModel && $this->provider === 'openai')) {
            throw new Exception(
                "Expected openai; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isAnthropic(): bool
    {
        return $this->value instanceof EvalAnthropicModel && $this->provider === 'anthropic';
    }

    /**
     * @return EvalAnthropicModel
     */
    public function asAnthropic(): EvalAnthropicModel
    {
        if (! ($this->value instanceof EvalAnthropicModel && $this->provider === 'anthropic')) {
            throw new Exception(
                "Expected anthropic; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isGoogle(): bool
    {
        return $this->value instanceof EvalGoogleModel && $this->provider === 'google';
    }

    /**
     * @return EvalGoogleModel
     */
    public function asGoogle(): EvalGoogleModel
    {
        if (! ($this->value instanceof EvalGoogleModel && $this->provider === 'google')) {
            throw new Exception(
                "Expected google; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isCustomLlm(): bool
    {
        return $this->value instanceof EvalCustomModel && $this->provider === 'custom-llm';
    }

    /**
     * @return EvalCustomModel
     */
    public function asCustomLlm(): EvalCustomModel
    {
        if (! ($this->value instanceof EvalCustomModel && $this->provider === 'custom-llm')) {
            throw new Exception(
                "Expected custom-llm; got " . $this->provider . " with value of type " . get_debug_type($this->value),
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
        $result['provider'] = $this->provider;

        $base = parent::jsonSerialize();
        $result = array_merge($base, $result);

        switch ($this->provider) {
            case 'openai':
                $value = $this->asOpenai()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'anthropic':
                $value = $this->asAnthropic()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'google':
                $value = $this->asGoogle()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'custom-llm':
                $value = $this->asCustomLlm()->jsonSerialize();
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
        if (! array_key_exists('provider', $data)) {
            throw new Exception(
                "JSON data is missing property 'provider'",
            );
        }
        $provider = $data['provider'];
        if (! (is_string($provider))) {
            throw new Exception(
                "Expected property 'provider' in JSON data to be string, instead received " . get_debug_type($data['provider']),
            );
        }

        $args['provider'] = $provider;
        switch ($provider) {
            case 'openai':
                $args['value'] = EvalOpenAiModel::jsonDeserialize($data);
                break;
            case 'anthropic':
                $args['value'] = EvalAnthropicModel::jsonDeserialize($data);
                break;
            case 'google':
                $args['value'] = EvalGoogleModel::jsonDeserialize($data);
                break;
            case 'custom-llm':
                $args['value'] = EvalCustomModel::jsonDeserialize($data);
                break;
            case '_unknown':
            default:
                $args['provider'] = '_unknown';
                $args['value'] = $data;
        }

        // @phpstan-ignore-next-line
        return new static($args);
    }
}
