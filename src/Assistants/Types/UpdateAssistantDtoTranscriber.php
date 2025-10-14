<?php declare(strict_types=1);

namespace Vapi\Assistants\Types;

use Exception;
use Vapi\Core\Json\JsonDecoder;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Types\AssemblyAiTranscriber;
use Vapi\Types\AzureSpeechTranscriber;
use Vapi\Types\CartesiaTranscriber;
use Vapi\Types\CustomTranscriber;
use Vapi\Types\DeepgramTranscriber;
use Vapi\Types\ElevenLabsTranscriber;
use Vapi\Types\GladiaTranscriber;
use Vapi\Types\GoogleTranscriber;
use Vapi\Types\OpenAiTranscriber;
use Vapi\Types\SpeechmaticsTranscriber;
use Vapi\Types\TalkscriberTranscriber;

/**
 * These are the options for the assistant's transcriber.
 */
final class UpdateAssistantDtoTranscriber extends JsonSerializableType
{
    /**
     * @var (
     *    'assembly-ai'
     *   |'azure'
     *   |'custom-transcriber'
     *   |'deepgram'
     *   |'11labs'
     *   |'gladia'
     *   |'google'
     *   |'speechmatics'
     *   |'talkscriber'
     *   |'openai'
     *   |'cartesia'
     *   |'_unknown'
     * ) $provider
     */
    public readonly string $provider;

    /**
     * @var (
     *    AssemblyAiTranscriber
     *   |AzureSpeechTranscriber
     *   |CustomTranscriber
     *   |DeepgramTranscriber
     *   |ElevenLabsTranscriber
     *   |GladiaTranscriber
     *   |GoogleTranscriber
     *   |SpeechmaticsTranscriber
     *   |TalkscriberTranscriber
     *   |OpenAiTranscriber
     *   |CartesiaTranscriber
     *   |mixed
     * ) $value
     */
    public readonly mixed $value;

    /**
     * @param array{
     *   provider: (
     *    'assembly-ai'
     *   |'azure'
     *   |'custom-transcriber'
     *   |'deepgram'
     *   |'11labs'
     *   |'gladia'
     *   |'google'
     *   |'speechmatics'
     *   |'talkscriber'
     *   |'openai'
     *   |'cartesia'
     *   |'_unknown'
     * ),
     *   value: (
     *    AssemblyAiTranscriber
     *   |AzureSpeechTranscriber
     *   |CustomTranscriber
     *   |DeepgramTranscriber
     *   |ElevenLabsTranscriber
     *   |GladiaTranscriber
     *   |GoogleTranscriber
     *   |SpeechmaticsTranscriber
     *   |TalkscriberTranscriber
     *   |OpenAiTranscriber
     *   |CartesiaTranscriber
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
     * @param AssemblyAiTranscriber $assemblyAi
     * @return UpdateAssistantDtoTranscriber
     */
    public static function assemblyAi(AssemblyAiTranscriber $assemblyAi): UpdateAssistantDtoTranscriber
    {
        return new UpdateAssistantDtoTranscriber([
            'provider' => 'assembly-ai',
            'value' => $assemblyAi,
        ]);
    }

    /**
     * @param AzureSpeechTranscriber $azure
     * @return UpdateAssistantDtoTranscriber
     */
    public static function azure(AzureSpeechTranscriber $azure): UpdateAssistantDtoTranscriber
    {
        return new UpdateAssistantDtoTranscriber([
            'provider' => 'azure',
            'value' => $azure,
        ]);
    }

    /**
     * @param CustomTranscriber $customTranscriber
     * @return UpdateAssistantDtoTranscriber
     */
    public static function customTranscriber(CustomTranscriber $customTranscriber): UpdateAssistantDtoTranscriber
    {
        return new UpdateAssistantDtoTranscriber([
            'provider' => 'custom-transcriber',
            'value' => $customTranscriber,
        ]);
    }

    /**
     * @param DeepgramTranscriber $deepgram
     * @return UpdateAssistantDtoTranscriber
     */
    public static function deepgram(DeepgramTranscriber $deepgram): UpdateAssistantDtoTranscriber
    {
        return new UpdateAssistantDtoTranscriber([
            'provider' => 'deepgram',
            'value' => $deepgram,
        ]);
    }

    /**
     * @param ElevenLabsTranscriber $_11Labs
     * @return UpdateAssistantDtoTranscriber
     */
    public static function _11Labs(ElevenLabsTranscriber $_11Labs): UpdateAssistantDtoTranscriber
    {
        return new UpdateAssistantDtoTranscriber([
            'provider' => '11labs',
            'value' => $_11Labs,
        ]);
    }

    /**
     * @param GladiaTranscriber $gladia
     * @return UpdateAssistantDtoTranscriber
     */
    public static function gladia(GladiaTranscriber $gladia): UpdateAssistantDtoTranscriber
    {
        return new UpdateAssistantDtoTranscriber([
            'provider' => 'gladia',
            'value' => $gladia,
        ]);
    }

    /**
     * @param GoogleTranscriber $google
     * @return UpdateAssistantDtoTranscriber
     */
    public static function google(GoogleTranscriber $google): UpdateAssistantDtoTranscriber
    {
        return new UpdateAssistantDtoTranscriber([
            'provider' => 'google',
            'value' => $google,
        ]);
    }

    /**
     * @param SpeechmaticsTranscriber $speechmatics
     * @return UpdateAssistantDtoTranscriber
     */
    public static function speechmatics(SpeechmaticsTranscriber $speechmatics): UpdateAssistantDtoTranscriber
    {
        return new UpdateAssistantDtoTranscriber([
            'provider' => 'speechmatics',
            'value' => $speechmatics,
        ]);
    }

    /**
     * @param TalkscriberTranscriber $talkscriber
     * @return UpdateAssistantDtoTranscriber
     */
    public static function talkscriber(TalkscriberTranscriber $talkscriber): UpdateAssistantDtoTranscriber
    {
        return new UpdateAssistantDtoTranscriber([
            'provider' => 'talkscriber',
            'value' => $talkscriber,
        ]);
    }

    /**
     * @param OpenAiTranscriber $openai
     * @return UpdateAssistantDtoTranscriber
     */
    public static function openai(OpenAiTranscriber $openai): UpdateAssistantDtoTranscriber
    {
        return new UpdateAssistantDtoTranscriber([
            'provider' => 'openai',
            'value' => $openai,
        ]);
    }

    /**
     * @param CartesiaTranscriber $cartesia
     * @return UpdateAssistantDtoTranscriber
     */
    public static function cartesia(CartesiaTranscriber $cartesia): UpdateAssistantDtoTranscriber
    {
        return new UpdateAssistantDtoTranscriber([
            'provider' => 'cartesia',
            'value' => $cartesia,
        ]);
    }

    /**
     * @return bool
     */
    public function isAssemblyAi(): bool
    {
        return $this->value instanceof AssemblyAiTranscriber && $this->provider === 'assembly-ai';
    }

    /**
     * @return AssemblyAiTranscriber
     */
    public function asAssemblyAi(): AssemblyAiTranscriber
    {
        if (! ($this->value instanceof AssemblyAiTranscriber && $this->provider === 'assembly-ai')) {
            throw new Exception(
                "Expected assembly-ai; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isAzure(): bool
    {
        return $this->value instanceof AzureSpeechTranscriber && $this->provider === 'azure';
    }

    /**
     * @return AzureSpeechTranscriber
     */
    public function asAzure(): AzureSpeechTranscriber
    {
        if (! ($this->value instanceof AzureSpeechTranscriber && $this->provider === 'azure')) {
            throw new Exception(
                "Expected azure; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isCustomTranscriber(): bool
    {
        return $this->value instanceof CustomTranscriber && $this->provider === 'custom-transcriber';
    }

    /**
     * @return CustomTranscriber
     */
    public function asCustomTranscriber(): CustomTranscriber
    {
        if (! ($this->value instanceof CustomTranscriber && $this->provider === 'custom-transcriber')) {
            throw new Exception(
                "Expected custom-transcriber; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isDeepgram(): bool
    {
        return $this->value instanceof DeepgramTranscriber && $this->provider === 'deepgram';
    }

    /**
     * @return DeepgramTranscriber
     */
    public function asDeepgram(): DeepgramTranscriber
    {
        if (! ($this->value instanceof DeepgramTranscriber && $this->provider === 'deepgram')) {
            throw new Exception(
                "Expected deepgram; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function is_11Labs(): bool
    {
        return $this->value instanceof ElevenLabsTranscriber && $this->provider === '11labs';
    }

    /**
     * @return ElevenLabsTranscriber
     */
    public function as_11Labs(): ElevenLabsTranscriber
    {
        if (! ($this->value instanceof ElevenLabsTranscriber && $this->provider === '11labs')) {
            throw new Exception(
                "Expected 11labs; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isGladia(): bool
    {
        return $this->value instanceof GladiaTranscriber && $this->provider === 'gladia';
    }

    /**
     * @return GladiaTranscriber
     */
    public function asGladia(): GladiaTranscriber
    {
        if (! ($this->value instanceof GladiaTranscriber && $this->provider === 'gladia')) {
            throw new Exception(
                "Expected gladia; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isGoogle(): bool
    {
        return $this->value instanceof GoogleTranscriber && $this->provider === 'google';
    }

    /**
     * @return GoogleTranscriber
     */
    public function asGoogle(): GoogleTranscriber
    {
        if (! ($this->value instanceof GoogleTranscriber && $this->provider === 'google')) {
            throw new Exception(
                "Expected google; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isSpeechmatics(): bool
    {
        return $this->value instanceof SpeechmaticsTranscriber && $this->provider === 'speechmatics';
    }

    /**
     * @return SpeechmaticsTranscriber
     */
    public function asSpeechmatics(): SpeechmaticsTranscriber
    {
        if (! ($this->value instanceof SpeechmaticsTranscriber && $this->provider === 'speechmatics')) {
            throw new Exception(
                "Expected speechmatics; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isTalkscriber(): bool
    {
        return $this->value instanceof TalkscriberTranscriber && $this->provider === 'talkscriber';
    }

    /**
     * @return TalkscriberTranscriber
     */
    public function asTalkscriber(): TalkscriberTranscriber
    {
        if (! ($this->value instanceof TalkscriberTranscriber && $this->provider === 'talkscriber')) {
            throw new Exception(
                "Expected talkscriber; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isOpenai(): bool
    {
        return $this->value instanceof OpenAiTranscriber && $this->provider === 'openai';
    }

    /**
     * @return OpenAiTranscriber
     */
    public function asOpenai(): OpenAiTranscriber
    {
        if (! ($this->value instanceof OpenAiTranscriber && $this->provider === 'openai')) {
            throw new Exception(
                "Expected openai; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isCartesia(): bool
    {
        return $this->value instanceof CartesiaTranscriber && $this->provider === 'cartesia';
    }

    /**
     * @return CartesiaTranscriber
     */
    public function asCartesia(): CartesiaTranscriber
    {
        if (! ($this->value instanceof CartesiaTranscriber && $this->provider === 'cartesia')) {
            throw new Exception(
                "Expected cartesia; got " . $this->provider . " with value of type " . get_debug_type($this->value),
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
            case 'assembly-ai':
                $value = $this->asAssemblyAi()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'azure':
                $value = $this->asAzure()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'custom-transcriber':
                $value = $this->asCustomTranscriber()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'deepgram':
                $value = $this->asDeepgram()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case '11labs':
                $value = $this->as_11Labs()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'gladia':
                $value = $this->asGladia()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'google':
                $value = $this->asGoogle()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'speechmatics':
                $value = $this->asSpeechmatics()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'talkscriber':
                $value = $this->asTalkscriber()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'openai':
                $value = $this->asOpenai()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'cartesia':
                $value = $this->asCartesia()->jsonSerialize();
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
            case 'assembly-ai':
                $args['value'] = AssemblyAiTranscriber::jsonDeserialize($data);
                break;
            case 'azure':
                $args['value'] = AzureSpeechTranscriber::jsonDeserialize($data);
                break;
            case 'custom-transcriber':
                $args['value'] = CustomTranscriber::jsonDeserialize($data);
                break;
            case 'deepgram':
                $args['value'] = DeepgramTranscriber::jsonDeserialize($data);
                break;
            case '11labs':
                $args['value'] = ElevenLabsTranscriber::jsonDeserialize($data);
                break;
            case 'gladia':
                $args['value'] = GladiaTranscriber::jsonDeserialize($data);
                break;
            case 'google':
                $args['value'] = GoogleTranscriber::jsonDeserialize($data);
                break;
            case 'speechmatics':
                $args['value'] = SpeechmaticsTranscriber::jsonDeserialize($data);
                break;
            case 'talkscriber':
                $args['value'] = TalkscriberTranscriber::jsonDeserialize($data);
                break;
            case 'openai':
                $args['value'] = OpenAiTranscriber::jsonDeserialize($data);
                break;
            case 'cartesia':
                $args['value'] = CartesiaTranscriber::jsonDeserialize($data);
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
