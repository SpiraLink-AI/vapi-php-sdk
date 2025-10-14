<?php declare(strict_types=1);

namespace Vapi\Types;

use Exception;
use Vapi\Core\Json\JsonDecoder;
use Vapi\Core\Json\JsonSerializableType;

/**
 * This is the voicemail detection plan for the workflow.
 */
final class UpdateWorkflowDtoVoicemailDetection extends JsonSerializableType
{
    /**
     * @var (
     *    'google'
     *   |'openai'
     *   |'twilio'
     *   |'vapi'
     *   |'_unknown'
     * ) $provider
     */
    public readonly string $provider;

    /**
     * @var (
     *    GoogleVoicemailDetectionPlan
     *   |OpenAiVoicemailDetectionPlan
     *   |TwilioVoicemailDetectionPlan
     *   |VapiVoicemailDetectionPlan
     *   |mixed
     * ) $value
     */
    public readonly mixed $value;

    /**
     * @param array{
     *   provider: (
     *    'google'
     *   |'openai'
     *   |'twilio'
     *   |'vapi'
     *   |'_unknown'
     * ),
     *   value: (
     *    GoogleVoicemailDetectionPlan
     *   |OpenAiVoicemailDetectionPlan
     *   |TwilioVoicemailDetectionPlan
     *   |VapiVoicemailDetectionPlan
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
     * @param GoogleVoicemailDetectionPlan $google
     * @return UpdateWorkflowDtoVoicemailDetection
     */
    public static function google(GoogleVoicemailDetectionPlan $google): UpdateWorkflowDtoVoicemailDetection
    {
        return new UpdateWorkflowDtoVoicemailDetection([
            'provider' => 'google',
            'value' => $google,
        ]);
    }

    /**
     * @param OpenAiVoicemailDetectionPlan $openai
     * @return UpdateWorkflowDtoVoicemailDetection
     */
    public static function openai(OpenAiVoicemailDetectionPlan $openai): UpdateWorkflowDtoVoicemailDetection
    {
        return new UpdateWorkflowDtoVoicemailDetection([
            'provider' => 'openai',
            'value' => $openai,
        ]);
    }

    /**
     * @param TwilioVoicemailDetectionPlan $twilio
     * @return UpdateWorkflowDtoVoicemailDetection
     */
    public static function twilio(TwilioVoicemailDetectionPlan $twilio): UpdateWorkflowDtoVoicemailDetection
    {
        return new UpdateWorkflowDtoVoicemailDetection([
            'provider' => 'twilio',
            'value' => $twilio,
        ]);
    }

    /**
     * @param VapiVoicemailDetectionPlan $vapi
     * @return UpdateWorkflowDtoVoicemailDetection
     */
    public static function vapi(VapiVoicemailDetectionPlan $vapi): UpdateWorkflowDtoVoicemailDetection
    {
        return new UpdateWorkflowDtoVoicemailDetection([
            'provider' => 'vapi',
            'value' => $vapi,
        ]);
    }

    /**
     * @return bool
     */
    public function isGoogle(): bool
    {
        return $this->value instanceof GoogleVoicemailDetectionPlan && $this->provider === 'google';
    }

    /**
     * @return GoogleVoicemailDetectionPlan
     */
    public function asGoogle(): GoogleVoicemailDetectionPlan
    {
        if (! ($this->value instanceof GoogleVoicemailDetectionPlan && $this->provider === 'google')) {
            throw new Exception(
                "Expected google; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isOpenai(): bool
    {
        return $this->value instanceof OpenAiVoicemailDetectionPlan && $this->provider === 'openai';
    }

    /**
     * @return OpenAiVoicemailDetectionPlan
     */
    public function asOpenai(): OpenAiVoicemailDetectionPlan
    {
        if (! ($this->value instanceof OpenAiVoicemailDetectionPlan && $this->provider === 'openai')) {
            throw new Exception(
                "Expected openai; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isTwilio(): bool
    {
        return $this->value instanceof TwilioVoicemailDetectionPlan && $this->provider === 'twilio';
    }

    /**
     * @return TwilioVoicemailDetectionPlan
     */
    public function asTwilio(): TwilioVoicemailDetectionPlan
    {
        if (! ($this->value instanceof TwilioVoicemailDetectionPlan && $this->provider === 'twilio')) {
            throw new Exception(
                "Expected twilio; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isVapi(): bool
    {
        return $this->value instanceof VapiVoicemailDetectionPlan && $this->provider === 'vapi';
    }

    /**
     * @return VapiVoicemailDetectionPlan
     */
    public function asVapi(): VapiVoicemailDetectionPlan
    {
        if (! ($this->value instanceof VapiVoicemailDetectionPlan && $this->provider === 'vapi')) {
            throw new Exception(
                "Expected vapi; got " . $this->provider . " with value of type " . get_debug_type($this->value),
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
            case 'google':
                $value = $this->asGoogle()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'openai':
                $value = $this->asOpenai()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'twilio':
                $value = $this->asTwilio()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'vapi':
                $value = $this->asVapi()->jsonSerialize();
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
            case 'google':
                $args['value'] = GoogleVoicemailDetectionPlan::jsonDeserialize($data);
                break;
            case 'openai':
                $args['value'] = OpenAiVoicemailDetectionPlan::jsonDeserialize($data);
                break;
            case 'twilio':
                $args['value'] = TwilioVoicemailDetectionPlan::jsonDeserialize($data);
                break;
            case 'vapi':
                $args['value'] = VapiVoicemailDetectionPlan::jsonDeserialize($data);
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
