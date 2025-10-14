<?php declare(strict_types=1);

namespace Vapi\StructuredOutputs\Types;

use Exception;
use Vapi\Core\Json\JsonDecoder;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Types\WorkflowAnthropicModel;
use Vapi\Types\WorkflowCustomModel;
use Vapi\Types\WorkflowGoogleModel;
use Vapi\Types\WorkflowOpenAiModel;

/**
 * This is the model that will be used to extract the structured output.
 *
 * To provide your own custom system and user prompts for structured output extraction, populate the messages array with your system and user messages. You can specify liquid templating in your system and user messages.
 * Between the system or user messages, you must reference either 'transcript' or 'messages' with the '{{}}' syntax to access the conversation history.
 * Between the system or user messages, you must reference a variation of the structured output with the '{{}}' syntax to access the structured output definition.
 * i.e.:
 * {{structuredOutput}}
 * {{structuredOutput.name}}
 * {{structuredOutput.description}}
 * {{structuredOutput.schema}}
 *
 * If model is not specified, GPT-4.1 will be used by default for extraction, utilizing default system and user prompts.
 * If messages or required fields are not specified, the default system and user prompts will be used.
 */
final class UpdateStructuredOutputDtoModel extends JsonSerializableType
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
     *    WorkflowOpenAiModel
     *   |WorkflowAnthropicModel
     *   |WorkflowGoogleModel
     *   |WorkflowCustomModel
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
     *    WorkflowOpenAiModel
     *   |WorkflowAnthropicModel
     *   |WorkflowGoogleModel
     *   |WorkflowCustomModel
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
     * @param WorkflowOpenAiModel $openai
     * @return UpdateStructuredOutputDtoModel
     */
    public static function openai(WorkflowOpenAiModel $openai): UpdateStructuredOutputDtoModel
    {
        return new UpdateStructuredOutputDtoModel([
            'provider' => 'openai',
            'value' => $openai,
        ]);
    }

    /**
     * @param WorkflowAnthropicModel $anthropic
     * @return UpdateStructuredOutputDtoModel
     */
    public static function anthropic(WorkflowAnthropicModel $anthropic): UpdateStructuredOutputDtoModel
    {
        return new UpdateStructuredOutputDtoModel([
            'provider' => 'anthropic',
            'value' => $anthropic,
        ]);
    }

    /**
     * @param WorkflowGoogleModel $google
     * @return UpdateStructuredOutputDtoModel
     */
    public static function google(WorkflowGoogleModel $google): UpdateStructuredOutputDtoModel
    {
        return new UpdateStructuredOutputDtoModel([
            'provider' => 'google',
            'value' => $google,
        ]);
    }

    /**
     * @param WorkflowCustomModel $customLlm
     * @return UpdateStructuredOutputDtoModel
     */
    public static function customLlm(WorkflowCustomModel $customLlm): UpdateStructuredOutputDtoModel
    {
        return new UpdateStructuredOutputDtoModel([
            'provider' => 'custom-llm',
            'value' => $customLlm,
        ]);
    }

    /**
     * @return bool
     */
    public function isOpenai(): bool
    {
        return $this->value instanceof WorkflowOpenAiModel && $this->provider === 'openai';
    }

    /**
     * @return WorkflowOpenAiModel
     */
    public function asOpenai(): WorkflowOpenAiModel
    {
        if (! ($this->value instanceof WorkflowOpenAiModel && $this->provider === 'openai')) {
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
        return $this->value instanceof WorkflowAnthropicModel && $this->provider === 'anthropic';
    }

    /**
     * @return WorkflowAnthropicModel
     */
    public function asAnthropic(): WorkflowAnthropicModel
    {
        if (! ($this->value instanceof WorkflowAnthropicModel && $this->provider === 'anthropic')) {
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
        return $this->value instanceof WorkflowGoogleModel && $this->provider === 'google';
    }

    /**
     * @return WorkflowGoogleModel
     */
    public function asGoogle(): WorkflowGoogleModel
    {
        if (! ($this->value instanceof WorkflowGoogleModel && $this->provider === 'google')) {
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
        return $this->value instanceof WorkflowCustomModel && $this->provider === 'custom-llm';
    }

    /**
     * @return WorkflowCustomModel
     */
    public function asCustomLlm(): WorkflowCustomModel
    {
        if (! ($this->value instanceof WorkflowCustomModel && $this->provider === 'custom-llm')) {
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
                $args['value'] = WorkflowOpenAiModel::jsonDeserialize($data);
                break;
            case 'anthropic':
                $args['value'] = WorkflowAnthropicModel::jsonDeserialize($data);
                break;
            case 'google':
                $args['value'] = WorkflowGoogleModel::jsonDeserialize($data);
                break;
            case 'custom-llm':
                $args['value'] = WorkflowCustomModel::jsonDeserialize($data);
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
