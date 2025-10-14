<?php declare(strict_types=1);

namespace Vapi\Types;

use Exception;
use Vapi\Core\Json\JsonDecoder;
use Vapi\Core\Json\JsonSerializableType;

final class FallbackTranscriberPlanTranscribersItem extends JsonSerializableType
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
     *   |'talkscriber'
     *   |'speechmatics'
     *   |'openai'
     *   |'cartesia'
     *   |'_unknown'
     * ) $provider
     */
    public readonly string $provider;

    /**
     * @var (
     *    FallbackAssemblyAiTranscriber
     *   |FallbackAzureSpeechTranscriber
     *   |FallbackCustomTranscriber
     *   |FallbackDeepgramTranscriber
     *   |FallbackElevenLabsTranscriber
     *   |FallbackGladiaTranscriber
     *   |FallbackGoogleTranscriber
     *   |FallbackTalkscriberTranscriber
     *   |FallbackSpeechmaticsTranscriber
     *   |FallbackOpenAiTranscriber
     *   |FallbackCartesiaTranscriber
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
     *   |'talkscriber'
     *   |'speechmatics'
     *   |'openai'
     *   |'cartesia'
     *   |'_unknown'
     * ),
     *   value: (
     *    FallbackAssemblyAiTranscriber
     *   |FallbackAzureSpeechTranscriber
     *   |FallbackCustomTranscriber
     *   |FallbackDeepgramTranscriber
     *   |FallbackElevenLabsTranscriber
     *   |FallbackGladiaTranscriber
     *   |FallbackGoogleTranscriber
     *   |FallbackTalkscriberTranscriber
     *   |FallbackSpeechmaticsTranscriber
     *   |FallbackOpenAiTranscriber
     *   |FallbackCartesiaTranscriber
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
     * @param FallbackAssemblyAiTranscriber $assemblyAi
     * @return FallbackTranscriberPlanTranscribersItem
     */
    public static function assemblyAi(FallbackAssemblyAiTranscriber $assemblyAi): FallbackTranscriberPlanTranscribersItem
    {
        return new FallbackTranscriberPlanTranscribersItem([
            'provider' => 'assembly-ai',
            'value' => $assemblyAi,
        ]);
    }

    /**
     * @param FallbackAzureSpeechTranscriber $azure
     * @return FallbackTranscriberPlanTranscribersItem
     */
    public static function azure(FallbackAzureSpeechTranscriber $azure): FallbackTranscriberPlanTranscribersItem
    {
        return new FallbackTranscriberPlanTranscribersItem([
            'provider' => 'azure',
            'value' => $azure,
        ]);
    }

    /**
     * @param FallbackCustomTranscriber $customTranscriber
     * @return FallbackTranscriberPlanTranscribersItem
     */
    public static function customTranscriber(FallbackCustomTranscriber $customTranscriber): FallbackTranscriberPlanTranscribersItem
    {
        return new FallbackTranscriberPlanTranscribersItem([
            'provider' => 'custom-transcriber',
            'value' => $customTranscriber,
        ]);
    }

    /**
     * @param FallbackDeepgramTranscriber $deepgram
     * @return FallbackTranscriberPlanTranscribersItem
     */
    public static function deepgram(FallbackDeepgramTranscriber $deepgram): FallbackTranscriberPlanTranscribersItem
    {
        return new FallbackTranscriberPlanTranscribersItem([
            'provider' => 'deepgram',
            'value' => $deepgram,
        ]);
    }

    /**
     * @param FallbackElevenLabsTranscriber $_11Labs
     * @return FallbackTranscriberPlanTranscribersItem
     */
    public static function _11Labs(FallbackElevenLabsTranscriber $_11Labs): FallbackTranscriberPlanTranscribersItem
    {
        return new FallbackTranscriberPlanTranscribersItem([
            'provider' => '11labs',
            'value' => $_11Labs,
        ]);
    }

    /**
     * @param FallbackGladiaTranscriber $gladia
     * @return FallbackTranscriberPlanTranscribersItem
     */
    public static function gladia(FallbackGladiaTranscriber $gladia): FallbackTranscriberPlanTranscribersItem
    {
        return new FallbackTranscriberPlanTranscribersItem([
            'provider' => 'gladia',
            'value' => $gladia,
        ]);
    }

    /**
     * @param FallbackGoogleTranscriber $google
     * @return FallbackTranscriberPlanTranscribersItem
     */
    public static function google(FallbackGoogleTranscriber $google): FallbackTranscriberPlanTranscribersItem
    {
        return new FallbackTranscriberPlanTranscribersItem([
            'provider' => 'google',
            'value' => $google,
        ]);
    }

    /**
     * @param FallbackTalkscriberTranscriber $talkscriber
     * @return FallbackTranscriberPlanTranscribersItem
     */
    public static function talkscriber(FallbackTalkscriberTranscriber $talkscriber): FallbackTranscriberPlanTranscribersItem
    {
        return new FallbackTranscriberPlanTranscribersItem([
            'provider' => 'talkscriber',
            'value' => $talkscriber,
        ]);
    }

    /**
     * @param FallbackSpeechmaticsTranscriber $speechmatics
     * @return FallbackTranscriberPlanTranscribersItem
     */
    public static function speechmatics(FallbackSpeechmaticsTranscriber $speechmatics): FallbackTranscriberPlanTranscribersItem
    {
        return new FallbackTranscriberPlanTranscribersItem([
            'provider' => 'speechmatics',
            'value' => $speechmatics,
        ]);
    }

    /**
     * @param FallbackOpenAiTranscriber $openai
     * @return FallbackTranscriberPlanTranscribersItem
     */
    public static function openai(FallbackOpenAiTranscriber $openai): FallbackTranscriberPlanTranscribersItem
    {
        return new FallbackTranscriberPlanTranscribersItem([
            'provider' => 'openai',
            'value' => $openai,
        ]);
    }

    /**
     * @param FallbackCartesiaTranscriber $cartesia
     * @return FallbackTranscriberPlanTranscribersItem
     */
    public static function cartesia(FallbackCartesiaTranscriber $cartesia): FallbackTranscriberPlanTranscribersItem
    {
        return new FallbackTranscriberPlanTranscribersItem([
            'provider' => 'cartesia',
            'value' => $cartesia,
        ]);
    }

    /**
     * @return bool
     */
    public function isAssemblyAi(): bool
    {
        return $this->value instanceof FallbackAssemblyAiTranscriber && $this->provider === 'assembly-ai';
    }

    /**
     * @return FallbackAssemblyAiTranscriber
     */
    public function asAssemblyAi(): FallbackAssemblyAiTranscriber
    {
        if (! ($this->value instanceof FallbackAssemblyAiTranscriber && $this->provider === 'assembly-ai')) {
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
        return $this->value instanceof FallbackAzureSpeechTranscriber && $this->provider === 'azure';
    }

    /**
     * @return FallbackAzureSpeechTranscriber
     */
    public function asAzure(): FallbackAzureSpeechTranscriber
    {
        if (! ($this->value instanceof FallbackAzureSpeechTranscriber && $this->provider === 'azure')) {
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
        return $this->value instanceof FallbackCustomTranscriber && $this->provider === 'custom-transcriber';
    }

    /**
     * @return FallbackCustomTranscriber
     */
    public function asCustomTranscriber(): FallbackCustomTranscriber
    {
        if (! ($this->value instanceof FallbackCustomTranscriber && $this->provider === 'custom-transcriber')) {
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
        return $this->value instanceof FallbackDeepgramTranscriber && $this->provider === 'deepgram';
    }

    /**
     * @return FallbackDeepgramTranscriber
     */
    public function asDeepgram(): FallbackDeepgramTranscriber
    {
        if (! ($this->value instanceof FallbackDeepgramTranscriber && $this->provider === 'deepgram')) {
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
        return $this->value instanceof FallbackElevenLabsTranscriber && $this->provider === '11labs';
    }

    /**
     * @return FallbackElevenLabsTranscriber
     */
    public function as_11Labs(): FallbackElevenLabsTranscriber
    {
        if (! ($this->value instanceof FallbackElevenLabsTranscriber && $this->provider === '11labs')) {
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
        return $this->value instanceof FallbackGladiaTranscriber && $this->provider === 'gladia';
    }

    /**
     * @return FallbackGladiaTranscriber
     */
    public function asGladia(): FallbackGladiaTranscriber
    {
        if (! ($this->value instanceof FallbackGladiaTranscriber && $this->provider === 'gladia')) {
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
        return $this->value instanceof FallbackGoogleTranscriber && $this->provider === 'google';
    }

    /**
     * @return FallbackGoogleTranscriber
     */
    public function asGoogle(): FallbackGoogleTranscriber
    {
        if (! ($this->value instanceof FallbackGoogleTranscriber && $this->provider === 'google')) {
            throw new Exception(
                "Expected google; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isTalkscriber(): bool
    {
        return $this->value instanceof FallbackTalkscriberTranscriber && $this->provider === 'talkscriber';
    }

    /**
     * @return FallbackTalkscriberTranscriber
     */
    public function asTalkscriber(): FallbackTalkscriberTranscriber
    {
        if (! ($this->value instanceof FallbackTalkscriberTranscriber && $this->provider === 'talkscriber')) {
            throw new Exception(
                "Expected talkscriber; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isSpeechmatics(): bool
    {
        return $this->value instanceof FallbackSpeechmaticsTranscriber && $this->provider === 'speechmatics';
    }

    /**
     * @return FallbackSpeechmaticsTranscriber
     */
    public function asSpeechmatics(): FallbackSpeechmaticsTranscriber
    {
        if (! ($this->value instanceof FallbackSpeechmaticsTranscriber && $this->provider === 'speechmatics')) {
            throw new Exception(
                "Expected speechmatics; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isOpenai(): bool
    {
        return $this->value instanceof FallbackOpenAiTranscriber && $this->provider === 'openai';
    }

    /**
     * @return FallbackOpenAiTranscriber
     */
    public function asOpenai(): FallbackOpenAiTranscriber
    {
        if (! ($this->value instanceof FallbackOpenAiTranscriber && $this->provider === 'openai')) {
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
        return $this->value instanceof FallbackCartesiaTranscriber && $this->provider === 'cartesia';
    }

    /**
     * @return FallbackCartesiaTranscriber
     */
    public function asCartesia(): FallbackCartesiaTranscriber
    {
        if (! ($this->value instanceof FallbackCartesiaTranscriber && $this->provider === 'cartesia')) {
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
            case 'talkscriber':
                $value = $this->asTalkscriber()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'speechmatics':
                $value = $this->asSpeechmatics()->jsonSerialize();
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
                $args['value'] = FallbackAssemblyAiTranscriber::jsonDeserialize($data);
                break;
            case 'azure':
                $args['value'] = FallbackAzureSpeechTranscriber::jsonDeserialize($data);
                break;
            case 'custom-transcriber':
                $args['value'] = FallbackCustomTranscriber::jsonDeserialize($data);
                break;
            case 'deepgram':
                $args['value'] = FallbackDeepgramTranscriber::jsonDeserialize($data);
                break;
            case '11labs':
                $args['value'] = FallbackElevenLabsTranscriber::jsonDeserialize($data);
                break;
            case 'gladia':
                $args['value'] = FallbackGladiaTranscriber::jsonDeserialize($data);
                break;
            case 'google':
                $args['value'] = FallbackGoogleTranscriber::jsonDeserialize($data);
                break;
            case 'talkscriber':
                $args['value'] = FallbackTalkscriberTranscriber::jsonDeserialize($data);
                break;
            case 'speechmatics':
                $args['value'] = FallbackSpeechmaticsTranscriber::jsonDeserialize($data);
                break;
            case 'openai':
                $args['value'] = FallbackOpenAiTranscriber::jsonDeserialize($data);
                break;
            case 'cartesia':
                $args['value'] = FallbackCartesiaTranscriber::jsonDeserialize($data);
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
