<?php declare(strict_types=1);

namespace Vapi\Types;

use Exception;
use Vapi\Core\Json\JsonDecoder;
use Vapi\Core\Json\JsonSerializableType;

/**
 * These are the options for the assistant's LLM.
 */
final class AssistantModel extends JsonSerializableType
{
    /**
     * @var (
     *    'anthropic'
     *   |'anyscale'
     *   |'cerebras'
     *   |'custom-llm'
     *   |'deepinfra'
     *   |'deep-seek'
     *   |'google'
     *   |'groq'
     *   |'inflection-ai'
     *   |'openai'
     *   |'openrouter'
     *   |'perplexity-ai'
     *   |'together-ai'
     *   |'xai'
     *   |'_unknown'
     * ) $provider
     */
    public readonly string $provider;

    /**
     * @var (
     *    AnthropicModel
     *   |AnyscaleModel
     *   |CerebrasModel
     *   |CustomLlmModel
     *   |DeepInfraModel
     *   |DeepSeekModel
     *   |GoogleModel
     *   |GroqModel
     *   |InflectionAiModel
     *   |OpenAiModel
     *   |OpenRouterModel
     *   |PerplexityAiModel
     *   |TogetherAiModel
     *   |XaiModel
     *   |mixed
     * ) $value
     */
    public readonly mixed $value;

    /**
     * @param array{
     *   provider: (
     *    'anthropic'
     *   |'anyscale'
     *   |'cerebras'
     *   |'custom-llm'
     *   |'deepinfra'
     *   |'deep-seek'
     *   |'google'
     *   |'groq'
     *   |'inflection-ai'
     *   |'openai'
     *   |'openrouter'
     *   |'perplexity-ai'
     *   |'together-ai'
     *   |'xai'
     *   |'_unknown'
     * ),
     *   value: (
     *    AnthropicModel
     *   |AnyscaleModel
     *   |CerebrasModel
     *   |CustomLlmModel
     *   |DeepInfraModel
     *   |DeepSeekModel
     *   |GoogleModel
     *   |GroqModel
     *   |InflectionAiModel
     *   |OpenAiModel
     *   |OpenRouterModel
     *   |PerplexityAiModel
     *   |TogetherAiModel
     *   |XaiModel
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
     * @param AnthropicModel $anthropic
     * @return AssistantModel
     */
    public static function anthropic(AnthropicModel $anthropic): AssistantModel
    {
        return new AssistantModel([
            'provider' => 'anthropic',
            'value' => $anthropic,
        ]);
    }

    /**
     * @param AnyscaleModel $anyscale
     * @return AssistantModel
     */
    public static function anyscale(AnyscaleModel $anyscale): AssistantModel
    {
        return new AssistantModel([
            'provider' => 'anyscale',
            'value' => $anyscale,
        ]);
    }

    /**
     * @param CerebrasModel $cerebras
     * @return AssistantModel
     */
    public static function cerebras(CerebrasModel $cerebras): AssistantModel
    {
        return new AssistantModel([
            'provider' => 'cerebras',
            'value' => $cerebras,
        ]);
    }

    /**
     * @param CustomLlmModel $customLlm
     * @return AssistantModel
     */
    public static function customLlm(CustomLlmModel $customLlm): AssistantModel
    {
        return new AssistantModel([
            'provider' => 'custom-llm',
            'value' => $customLlm,
        ]);
    }

    /**
     * @param DeepInfraModel $deepinfra
     * @return AssistantModel
     */
    public static function deepinfra(DeepInfraModel $deepinfra): AssistantModel
    {
        return new AssistantModel([
            'provider' => 'deepinfra',
            'value' => $deepinfra,
        ]);
    }

    /**
     * @param DeepSeekModel $deepSeek
     * @return AssistantModel
     */
    public static function deepSeek(DeepSeekModel $deepSeek): AssistantModel
    {
        return new AssistantModel([
            'provider' => 'deep-seek',
            'value' => $deepSeek,
        ]);
    }

    /**
     * @param GoogleModel $google
     * @return AssistantModel
     */
    public static function google(GoogleModel $google): AssistantModel
    {
        return new AssistantModel([
            'provider' => 'google',
            'value' => $google,
        ]);
    }

    /**
     * @param GroqModel $groq
     * @return AssistantModel
     */
    public static function groq(GroqModel $groq): AssistantModel
    {
        return new AssistantModel([
            'provider' => 'groq',
            'value' => $groq,
        ]);
    }

    /**
     * @param InflectionAiModel $inflectionAi
     * @return AssistantModel
     */
    public static function inflectionAi(InflectionAiModel $inflectionAi): AssistantModel
    {
        return new AssistantModel([
            'provider' => 'inflection-ai',
            'value' => $inflectionAi,
        ]);
    }

    /**
     * @param OpenAiModel $openai
     * @return AssistantModel
     */
    public static function openai(OpenAiModel $openai): AssistantModel
    {
        return new AssistantModel([
            'provider' => 'openai',
            'value' => $openai,
        ]);
    }

    /**
     * @param OpenRouterModel $openrouter
     * @return AssistantModel
     */
    public static function openrouter(OpenRouterModel $openrouter): AssistantModel
    {
        return new AssistantModel([
            'provider' => 'openrouter',
            'value' => $openrouter,
        ]);
    }

    /**
     * @param PerplexityAiModel $perplexityAi
     * @return AssistantModel
     */
    public static function perplexityAi(PerplexityAiModel $perplexityAi): AssistantModel
    {
        return new AssistantModel([
            'provider' => 'perplexity-ai',
            'value' => $perplexityAi,
        ]);
    }

    /**
     * @param TogetherAiModel $togetherAi
     * @return AssistantModel
     */
    public static function togetherAi(TogetherAiModel $togetherAi): AssistantModel
    {
        return new AssistantModel([
            'provider' => 'together-ai',
            'value' => $togetherAi,
        ]);
    }

    /**
     * @param XaiModel $xai
     * @return AssistantModel
     */
    public static function xai(XaiModel $xai): AssistantModel
    {
        return new AssistantModel([
            'provider' => 'xai',
            'value' => $xai,
        ]);
    }

    /**
     * @return bool
     */
    public function isAnthropic(): bool
    {
        return $this->value instanceof AnthropicModel && $this->provider === 'anthropic';
    }

    /**
     * @return AnthropicModel
     */
    public function asAnthropic(): AnthropicModel
    {
        if (! ($this->value instanceof AnthropicModel && $this->provider === 'anthropic')) {
            throw new Exception(
                "Expected anthropic; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isAnyscale(): bool
    {
        return $this->value instanceof AnyscaleModel && $this->provider === 'anyscale';
    }

    /**
     * @return AnyscaleModel
     */
    public function asAnyscale(): AnyscaleModel
    {
        if (! ($this->value instanceof AnyscaleModel && $this->provider === 'anyscale')) {
            throw new Exception(
                "Expected anyscale; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isCerebras(): bool
    {
        return $this->value instanceof CerebrasModel && $this->provider === 'cerebras';
    }

    /**
     * @return CerebrasModel
     */
    public function asCerebras(): CerebrasModel
    {
        if (! ($this->value instanceof CerebrasModel && $this->provider === 'cerebras')) {
            throw new Exception(
                "Expected cerebras; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isCustomLlm(): bool
    {
        return $this->value instanceof CustomLlmModel && $this->provider === 'custom-llm';
    }

    /**
     * @return CustomLlmModel
     */
    public function asCustomLlm(): CustomLlmModel
    {
        if (! ($this->value instanceof CustomLlmModel && $this->provider === 'custom-llm')) {
            throw new Exception(
                "Expected custom-llm; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isDeepinfra(): bool
    {
        return $this->value instanceof DeepInfraModel && $this->provider === 'deepinfra';
    }

    /**
     * @return DeepInfraModel
     */
    public function asDeepinfra(): DeepInfraModel
    {
        if (! ($this->value instanceof DeepInfraModel && $this->provider === 'deepinfra')) {
            throw new Exception(
                "Expected deepinfra; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isDeepSeek(): bool
    {
        return $this->value instanceof DeepSeekModel && $this->provider === 'deep-seek';
    }

    /**
     * @return DeepSeekModel
     */
    public function asDeepSeek(): DeepSeekModel
    {
        if (! ($this->value instanceof DeepSeekModel && $this->provider === 'deep-seek')) {
            throw new Exception(
                "Expected deep-seek; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isGoogle(): bool
    {
        return $this->value instanceof GoogleModel && $this->provider === 'google';
    }

    /**
     * @return GoogleModel
     */
    public function asGoogle(): GoogleModel
    {
        if (! ($this->value instanceof GoogleModel && $this->provider === 'google')) {
            throw new Exception(
                "Expected google; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isGroq(): bool
    {
        return $this->value instanceof GroqModel && $this->provider === 'groq';
    }

    /**
     * @return GroqModel
     */
    public function asGroq(): GroqModel
    {
        if (! ($this->value instanceof GroqModel && $this->provider === 'groq')) {
            throw new Exception(
                "Expected groq; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isInflectionAi(): bool
    {
        return $this->value instanceof InflectionAiModel && $this->provider === 'inflection-ai';
    }

    /**
     * @return InflectionAiModel
     */
    public function asInflectionAi(): InflectionAiModel
    {
        if (! ($this->value instanceof InflectionAiModel && $this->provider === 'inflection-ai')) {
            throw new Exception(
                "Expected inflection-ai; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isOpenai(): bool
    {
        return $this->value instanceof OpenAiModel && $this->provider === 'openai';
    }

    /**
     * @return OpenAiModel
     */
    public function asOpenai(): OpenAiModel
    {
        if (! ($this->value instanceof OpenAiModel && $this->provider === 'openai')) {
            throw new Exception(
                "Expected openai; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isOpenrouter(): bool
    {
        return $this->value instanceof OpenRouterModel && $this->provider === 'openrouter';
    }

    /**
     * @return OpenRouterModel
     */
    public function asOpenrouter(): OpenRouterModel
    {
        if (! ($this->value instanceof OpenRouterModel && $this->provider === 'openrouter')) {
            throw new Exception(
                "Expected openrouter; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isPerplexityAi(): bool
    {
        return $this->value instanceof PerplexityAiModel && $this->provider === 'perplexity-ai';
    }

    /**
     * @return PerplexityAiModel
     */
    public function asPerplexityAi(): PerplexityAiModel
    {
        if (! ($this->value instanceof PerplexityAiModel && $this->provider === 'perplexity-ai')) {
            throw new Exception(
                "Expected perplexity-ai; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isTogetherAi(): bool
    {
        return $this->value instanceof TogetherAiModel && $this->provider === 'together-ai';
    }

    /**
     * @return TogetherAiModel
     */
    public function asTogetherAi(): TogetherAiModel
    {
        if (! ($this->value instanceof TogetherAiModel && $this->provider === 'together-ai')) {
            throw new Exception(
                "Expected together-ai; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isXai(): bool
    {
        return $this->value instanceof XaiModel && $this->provider === 'xai';
    }

    /**
     * @return XaiModel
     */
    public function asXai(): XaiModel
    {
        if (! ($this->value instanceof XaiModel && $this->provider === 'xai')) {
            throw new Exception(
                "Expected xai; got " . $this->provider . " with value of type " . get_debug_type($this->value),
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
            case 'anthropic':
                $value = $this->asAnthropic()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'anyscale':
                $value = $this->asAnyscale()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'cerebras':
                $value = $this->asCerebras()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'custom-llm':
                $value = $this->asCustomLlm()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'deepinfra':
                $value = $this->asDeepinfra()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'deep-seek':
                $value = $this->asDeepSeek()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'google':
                $value = $this->asGoogle()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'groq':
                $value = $this->asGroq()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'inflection-ai':
                $value = $this->asInflectionAi()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'openai':
                $value = $this->asOpenai()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'openrouter':
                $value = $this->asOpenrouter()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'perplexity-ai':
                $value = $this->asPerplexityAi()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'together-ai':
                $value = $this->asTogetherAi()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'xai':
                $value = $this->asXai()->jsonSerialize();
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
            case 'anthropic':
                $args['value'] = AnthropicModel::jsonDeserialize($data);
                break;
            case 'anyscale':
                $args['value'] = AnyscaleModel::jsonDeserialize($data);
                break;
            case 'cerebras':
                $args['value'] = CerebrasModel::jsonDeserialize($data);
                break;
            case 'custom-llm':
                $args['value'] = CustomLlmModel::jsonDeserialize($data);
                break;
            case 'deepinfra':
                $args['value'] = DeepInfraModel::jsonDeserialize($data);
                break;
            case 'deep-seek':
                $args['value'] = DeepSeekModel::jsonDeserialize($data);
                break;
            case 'google':
                $args['value'] = GoogleModel::jsonDeserialize($data);
                break;
            case 'groq':
                $args['value'] = GroqModel::jsonDeserialize($data);
                break;
            case 'inflection-ai':
                $args['value'] = InflectionAiModel::jsonDeserialize($data);
                break;
            case 'openai':
                $args['value'] = OpenAiModel::jsonDeserialize($data);
                break;
            case 'openrouter':
                $args['value'] = OpenRouterModel::jsonDeserialize($data);
                break;
            case 'perplexity-ai':
                $args['value'] = PerplexityAiModel::jsonDeserialize($data);
                break;
            case 'together-ai':
                $args['value'] = TogetherAiModel::jsonDeserialize($data);
                break;
            case 'xai':
                $args['value'] = XaiModel::jsonDeserialize($data);
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
