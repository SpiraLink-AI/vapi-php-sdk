<?php declare(strict_types=1);

namespace Vapi\Types;

use Exception;
use Vapi\Core\Json\JsonDecoder;
use Vapi\Core\Json\JsonSerializableType;

final class FallbackPlanVoicesItem extends JsonSerializableType
{
    /**
     * @var (
     *    'azure'
     *   |'cartesia'
     *   |'hume'
     *   |'custom-voice'
     *   |'deepgram'
     *   |'11labs'
     *   |'vapi'
     *   |'lmnt'
     *   |'openai'
     *   |'playht'
     *   |'rime-ai'
     *   |'smallest-ai'
     *   |'tavus'
     *   |'neuphonic'
     *   |'sesame'
     *   |'inworld'
     *   |'_unknown'
     * ) $provider
     */
    public readonly string $provider;

    /**
     * @var (
     *    FallbackAzureVoice
     *   |FallbackCartesiaVoice
     *   |FallbackHumeVoice
     *   |FallbackCustomVoice
     *   |FallbackDeepgramVoice
     *   |FallbackElevenLabsVoice
     *   |FallbackVapiVoice
     *   |FallbackLmntVoice
     *   |FallbackOpenAiVoice
     *   |FallbackPlayHtVoice
     *   |FallbackRimeAiVoice
     *   |FallbackSmallestAiVoice
     *   |FallbackTavusVoice
     *   |FallbackNeuphonicVoice
     *   |FallbackSesameVoice
     *   |FallbackInworldVoice
     *   |mixed
     * ) $value
     */
    public readonly mixed $value;

    /**
     * @param array{
     *   provider: (
     *    'azure'
     *   |'cartesia'
     *   |'hume'
     *   |'custom-voice'
     *   |'deepgram'
     *   |'11labs'
     *   |'vapi'
     *   |'lmnt'
     *   |'openai'
     *   |'playht'
     *   |'rime-ai'
     *   |'smallest-ai'
     *   |'tavus'
     *   |'neuphonic'
     *   |'sesame'
     *   |'inworld'
     *   |'_unknown'
     * ),
     *   value: (
     *    FallbackAzureVoice
     *   |FallbackCartesiaVoice
     *   |FallbackHumeVoice
     *   |FallbackCustomVoice
     *   |FallbackDeepgramVoice
     *   |FallbackElevenLabsVoice
     *   |FallbackVapiVoice
     *   |FallbackLmntVoice
     *   |FallbackOpenAiVoice
     *   |FallbackPlayHtVoice
     *   |FallbackRimeAiVoice
     *   |FallbackSmallestAiVoice
     *   |FallbackTavusVoice
     *   |FallbackNeuphonicVoice
     *   |FallbackSesameVoice
     *   |FallbackInworldVoice
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
     * @param FallbackAzureVoice $azure
     * @return FallbackPlanVoicesItem
     */
    public static function azure(FallbackAzureVoice $azure): FallbackPlanVoicesItem
    {
        return new FallbackPlanVoicesItem([
            'provider' => 'azure',
            'value' => $azure,
        ]);
    }

    /**
     * @param FallbackCartesiaVoice $cartesia
     * @return FallbackPlanVoicesItem
     */
    public static function cartesia(FallbackCartesiaVoice $cartesia): FallbackPlanVoicesItem
    {
        return new FallbackPlanVoicesItem([
            'provider' => 'cartesia',
            'value' => $cartesia,
        ]);
    }

    /**
     * @param FallbackHumeVoice $hume
     * @return FallbackPlanVoicesItem
     */
    public static function hume(FallbackHumeVoice $hume): FallbackPlanVoicesItem
    {
        return new FallbackPlanVoicesItem([
            'provider' => 'hume',
            'value' => $hume,
        ]);
    }

    /**
     * @param FallbackCustomVoice $customVoice
     * @return FallbackPlanVoicesItem
     */
    public static function customVoice(FallbackCustomVoice $customVoice): FallbackPlanVoicesItem
    {
        return new FallbackPlanVoicesItem([
            'provider' => 'custom-voice',
            'value' => $customVoice,
        ]);
    }

    /**
     * @param FallbackDeepgramVoice $deepgram
     * @return FallbackPlanVoicesItem
     */
    public static function deepgram(FallbackDeepgramVoice $deepgram): FallbackPlanVoicesItem
    {
        return new FallbackPlanVoicesItem([
            'provider' => 'deepgram',
            'value' => $deepgram,
        ]);
    }

    /**
     * @param FallbackElevenLabsVoice $_11Labs
     * @return FallbackPlanVoicesItem
     */
    public static function _11Labs(FallbackElevenLabsVoice $_11Labs): FallbackPlanVoicesItem
    {
        return new FallbackPlanVoicesItem([
            'provider' => '11labs',
            'value' => $_11Labs,
        ]);
    }

    /**
     * @param FallbackVapiVoice $vapi
     * @return FallbackPlanVoicesItem
     */
    public static function vapi(FallbackVapiVoice $vapi): FallbackPlanVoicesItem
    {
        return new FallbackPlanVoicesItem([
            'provider' => 'vapi',
            'value' => $vapi,
        ]);
    }

    /**
     * @param FallbackLmntVoice $lmnt
     * @return FallbackPlanVoicesItem
     */
    public static function lmnt(FallbackLmntVoice $lmnt): FallbackPlanVoicesItem
    {
        return new FallbackPlanVoicesItem([
            'provider' => 'lmnt',
            'value' => $lmnt,
        ]);
    }

    /**
     * @param FallbackOpenAiVoice $openai
     * @return FallbackPlanVoicesItem
     */
    public static function openai(FallbackOpenAiVoice $openai): FallbackPlanVoicesItem
    {
        return new FallbackPlanVoicesItem([
            'provider' => 'openai',
            'value' => $openai,
        ]);
    }

    /**
     * @param FallbackPlayHtVoice $playht
     * @return FallbackPlanVoicesItem
     */
    public static function playht(FallbackPlayHtVoice $playht): FallbackPlanVoicesItem
    {
        return new FallbackPlanVoicesItem([
            'provider' => 'playht',
            'value' => $playht,
        ]);
    }

    /**
     * @param FallbackRimeAiVoice $rimeAi
     * @return FallbackPlanVoicesItem
     */
    public static function rimeAi(FallbackRimeAiVoice $rimeAi): FallbackPlanVoicesItem
    {
        return new FallbackPlanVoicesItem([
            'provider' => 'rime-ai',
            'value' => $rimeAi,
        ]);
    }

    /**
     * @param FallbackSmallestAiVoice $smallestAi
     * @return FallbackPlanVoicesItem
     */
    public static function smallestAi(FallbackSmallestAiVoice $smallestAi): FallbackPlanVoicesItem
    {
        return new FallbackPlanVoicesItem([
            'provider' => 'smallest-ai',
            'value' => $smallestAi,
        ]);
    }

    /**
     * @param FallbackTavusVoice $tavus
     * @return FallbackPlanVoicesItem
     */
    public static function tavus(FallbackTavusVoice $tavus): FallbackPlanVoicesItem
    {
        return new FallbackPlanVoicesItem([
            'provider' => 'tavus',
            'value' => $tavus,
        ]);
    }

    /**
     * @param FallbackNeuphonicVoice $neuphonic
     * @return FallbackPlanVoicesItem
     */
    public static function neuphonic(FallbackNeuphonicVoice $neuphonic): FallbackPlanVoicesItem
    {
        return new FallbackPlanVoicesItem([
            'provider' => 'neuphonic',
            'value' => $neuphonic,
        ]);
    }

    /**
     * @param FallbackSesameVoice $sesame
     * @return FallbackPlanVoicesItem
     */
    public static function sesame(FallbackSesameVoice $sesame): FallbackPlanVoicesItem
    {
        return new FallbackPlanVoicesItem([
            'provider' => 'sesame',
            'value' => $sesame,
        ]);
    }

    /**
     * @param FallbackInworldVoice $inworld
     * @return FallbackPlanVoicesItem
     */
    public static function inworld(FallbackInworldVoice $inworld): FallbackPlanVoicesItem
    {
        return new FallbackPlanVoicesItem([
            'provider' => 'inworld',
            'value' => $inworld,
        ]);
    }

    /**
     * @return bool
     */
    public function isAzure(): bool
    {
        return $this->value instanceof FallbackAzureVoice && $this->provider === 'azure';
    }

    /**
     * @return FallbackAzureVoice
     */
    public function asAzure(): FallbackAzureVoice
    {
        if (! ($this->value instanceof FallbackAzureVoice && $this->provider === 'azure')) {
            throw new Exception(
                "Expected azure; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isCartesia(): bool
    {
        return $this->value instanceof FallbackCartesiaVoice && $this->provider === 'cartesia';
    }

    /**
     * @return FallbackCartesiaVoice
     */
    public function asCartesia(): FallbackCartesiaVoice
    {
        if (! ($this->value instanceof FallbackCartesiaVoice && $this->provider === 'cartesia')) {
            throw new Exception(
                "Expected cartesia; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isHume(): bool
    {
        return $this->value instanceof FallbackHumeVoice && $this->provider === 'hume';
    }

    /**
     * @return FallbackHumeVoice
     */
    public function asHume(): FallbackHumeVoice
    {
        if (! ($this->value instanceof FallbackHumeVoice && $this->provider === 'hume')) {
            throw new Exception(
                "Expected hume; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isCustomVoice(): bool
    {
        return $this->value instanceof FallbackCustomVoice && $this->provider === 'custom-voice';
    }

    /**
     * @return FallbackCustomVoice
     */
    public function asCustomVoice(): FallbackCustomVoice
    {
        if (! ($this->value instanceof FallbackCustomVoice && $this->provider === 'custom-voice')) {
            throw new Exception(
                "Expected custom-voice; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isDeepgram(): bool
    {
        return $this->value instanceof FallbackDeepgramVoice && $this->provider === 'deepgram';
    }

    /**
     * @return FallbackDeepgramVoice
     */
    public function asDeepgram(): FallbackDeepgramVoice
    {
        if (! ($this->value instanceof FallbackDeepgramVoice && $this->provider === 'deepgram')) {
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
        return $this->value instanceof FallbackElevenLabsVoice && $this->provider === '11labs';
    }

    /**
     * @return FallbackElevenLabsVoice
     */
    public function as_11Labs(): FallbackElevenLabsVoice
    {
        if (! ($this->value instanceof FallbackElevenLabsVoice && $this->provider === '11labs')) {
            throw new Exception(
                "Expected 11labs; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isVapi(): bool
    {
        return $this->value instanceof FallbackVapiVoice && $this->provider === 'vapi';
    }

    /**
     * @return FallbackVapiVoice
     */
    public function asVapi(): FallbackVapiVoice
    {
        if (! ($this->value instanceof FallbackVapiVoice && $this->provider === 'vapi')) {
            throw new Exception(
                "Expected vapi; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isLmnt(): bool
    {
        return $this->value instanceof FallbackLmntVoice && $this->provider === 'lmnt';
    }

    /**
     * @return FallbackLmntVoice
     */
    public function asLmnt(): FallbackLmntVoice
    {
        if (! ($this->value instanceof FallbackLmntVoice && $this->provider === 'lmnt')) {
            throw new Exception(
                "Expected lmnt; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isOpenai(): bool
    {
        return $this->value instanceof FallbackOpenAiVoice && $this->provider === 'openai';
    }

    /**
     * @return FallbackOpenAiVoice
     */
    public function asOpenai(): FallbackOpenAiVoice
    {
        if (! ($this->value instanceof FallbackOpenAiVoice && $this->provider === 'openai')) {
            throw new Exception(
                "Expected openai; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isPlayht(): bool
    {
        return $this->value instanceof FallbackPlayHtVoice && $this->provider === 'playht';
    }

    /**
     * @return FallbackPlayHtVoice
     */
    public function asPlayht(): FallbackPlayHtVoice
    {
        if (! ($this->value instanceof FallbackPlayHtVoice && $this->provider === 'playht')) {
            throw new Exception(
                "Expected playht; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isRimeAi(): bool
    {
        return $this->value instanceof FallbackRimeAiVoice && $this->provider === 'rime-ai';
    }

    /**
     * @return FallbackRimeAiVoice
     */
    public function asRimeAi(): FallbackRimeAiVoice
    {
        if (! ($this->value instanceof FallbackRimeAiVoice && $this->provider === 'rime-ai')) {
            throw new Exception(
                "Expected rime-ai; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isSmallestAi(): bool
    {
        return $this->value instanceof FallbackSmallestAiVoice && $this->provider === 'smallest-ai';
    }

    /**
     * @return FallbackSmallestAiVoice
     */
    public function asSmallestAi(): FallbackSmallestAiVoice
    {
        if (! ($this->value instanceof FallbackSmallestAiVoice && $this->provider === 'smallest-ai')) {
            throw new Exception(
                "Expected smallest-ai; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isTavus(): bool
    {
        return $this->value instanceof FallbackTavusVoice && $this->provider === 'tavus';
    }

    /**
     * @return FallbackTavusVoice
     */
    public function asTavus(): FallbackTavusVoice
    {
        if (! ($this->value instanceof FallbackTavusVoice && $this->provider === 'tavus')) {
            throw new Exception(
                "Expected tavus; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isNeuphonic(): bool
    {
        return $this->value instanceof FallbackNeuphonicVoice && $this->provider === 'neuphonic';
    }

    /**
     * @return FallbackNeuphonicVoice
     */
    public function asNeuphonic(): FallbackNeuphonicVoice
    {
        if (! ($this->value instanceof FallbackNeuphonicVoice && $this->provider === 'neuphonic')) {
            throw new Exception(
                "Expected neuphonic; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isSesame(): bool
    {
        return $this->value instanceof FallbackSesameVoice && $this->provider === 'sesame';
    }

    /**
     * @return FallbackSesameVoice
     */
    public function asSesame(): FallbackSesameVoice
    {
        if (! ($this->value instanceof FallbackSesameVoice && $this->provider === 'sesame')) {
            throw new Exception(
                "Expected sesame; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isInworld(): bool
    {
        return $this->value instanceof FallbackInworldVoice && $this->provider === 'inworld';
    }

    /**
     * @return FallbackInworldVoice
     */
    public function asInworld(): FallbackInworldVoice
    {
        if (! ($this->value instanceof FallbackInworldVoice && $this->provider === 'inworld')) {
            throw new Exception(
                "Expected inworld; got " . $this->provider . " with value of type " . get_debug_type($this->value),
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
            case 'azure':
                $value = $this->asAzure()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'cartesia':
                $value = $this->asCartesia()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'hume':
                $value = $this->asHume()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'custom-voice':
                $value = $this->asCustomVoice()->jsonSerialize();
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
            case 'vapi':
                $value = $this->asVapi()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'lmnt':
                $value = $this->asLmnt()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'openai':
                $value = $this->asOpenai()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'playht':
                $value = $this->asPlayht()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'rime-ai':
                $value = $this->asRimeAi()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'smallest-ai':
                $value = $this->asSmallestAi()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'tavus':
                $value = $this->asTavus()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'neuphonic':
                $value = $this->asNeuphonic()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'sesame':
                $value = $this->asSesame()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'inworld':
                $value = $this->asInworld()->jsonSerialize();
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
            case 'azure':
                $args['value'] = FallbackAzureVoice::jsonDeserialize($data);
                break;
            case 'cartesia':
                $args['value'] = FallbackCartesiaVoice::jsonDeserialize($data);
                break;
            case 'hume':
                $args['value'] = FallbackHumeVoice::jsonDeserialize($data);
                break;
            case 'custom-voice':
                $args['value'] = FallbackCustomVoice::jsonDeserialize($data);
                break;
            case 'deepgram':
                $args['value'] = FallbackDeepgramVoice::jsonDeserialize($data);
                break;
            case '11labs':
                $args['value'] = FallbackElevenLabsVoice::jsonDeserialize($data);
                break;
            case 'vapi':
                $args['value'] = FallbackVapiVoice::jsonDeserialize($data);
                break;
            case 'lmnt':
                $args['value'] = FallbackLmntVoice::jsonDeserialize($data);
                break;
            case 'openai':
                $args['value'] = FallbackOpenAiVoice::jsonDeserialize($data);
                break;
            case 'playht':
                $args['value'] = FallbackPlayHtVoice::jsonDeserialize($data);
                break;
            case 'rime-ai':
                $args['value'] = FallbackRimeAiVoice::jsonDeserialize($data);
                break;
            case 'smallest-ai':
                $args['value'] = FallbackSmallestAiVoice::jsonDeserialize($data);
                break;
            case 'tavus':
                $args['value'] = FallbackTavusVoice::jsonDeserialize($data);
                break;
            case 'neuphonic':
                $args['value'] = FallbackNeuphonicVoice::jsonDeserialize($data);
                break;
            case 'sesame':
                $args['value'] = FallbackSesameVoice::jsonDeserialize($data);
                break;
            case 'inworld':
                $args['value'] = FallbackInworldVoice::jsonDeserialize($data);
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
