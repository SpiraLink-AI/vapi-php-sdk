<?php declare(strict_types=1);

namespace Vapi\Assistants\Types;

use Exception;
use Vapi\Core\Json\JsonDecoder;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Types\AzureVoice;
use Vapi\Types\CartesiaVoice;
use Vapi\Types\CustomVoice;
use Vapi\Types\DeepgramVoice;
use Vapi\Types\ElevenLabsVoice;
use Vapi\Types\HumeVoice;
use Vapi\Types\InworldVoice;
use Vapi\Types\LmntVoice;
use Vapi\Types\MinimaxVoice;
use Vapi\Types\NeuphonicVoice;
use Vapi\Types\OpenAiVoice;
use Vapi\Types\PlayHtVoice;
use Vapi\Types\RimeAiVoice;
use Vapi\Types\SesameVoice;
use Vapi\Types\SmallestAiVoice;
use Vapi\Types\TavusVoice;
use Vapi\Types\VapiVoice;

/**
 * These are the options for the assistant's voice.
 */
final class UpdateAssistantDtoVoice extends JsonSerializableType
{
    /**
     * @var (
     *    'azure'
     *   |'cartesia'
     *   |'custom-voice'
     *   |'deepgram'
     *   |'11labs'
     *   |'hume'
     *   |'lmnt'
     *   |'neuphonic'
     *   |'openai'
     *   |'playht'
     *   |'rime-ai'
     *   |'smallest-ai'
     *   |'tavus'
     *   |'vapi'
     *   |'sesame'
     *   |'inworld'
     *   |'minimax'
     *   |'_unknown'
     * ) $provider
     */
    public readonly string $provider;

    /**
     * @var (
     *    AzureVoice
     *   |CartesiaVoice
     *   |CustomVoice
     *   |DeepgramVoice
     *   |ElevenLabsVoice
     *   |HumeVoice
     *   |LmntVoice
     *   |NeuphonicVoice
     *   |OpenAiVoice
     *   |PlayHtVoice
     *   |RimeAiVoice
     *   |SmallestAiVoice
     *   |TavusVoice
     *   |VapiVoice
     *   |SesameVoice
     *   |InworldVoice
     *   |MinimaxVoice
     *   |mixed
     * ) $value
     */
    public readonly mixed $value;

    /**
     * @param array{
     *   provider: (
     *    'azure'
     *   |'cartesia'
     *   |'custom-voice'
     *   |'deepgram'
     *   |'11labs'
     *   |'hume'
     *   |'lmnt'
     *   |'neuphonic'
     *   |'openai'
     *   |'playht'
     *   |'rime-ai'
     *   |'smallest-ai'
     *   |'tavus'
     *   |'vapi'
     *   |'sesame'
     *   |'inworld'
     *   |'minimax'
     *   |'_unknown'
     * ),
     *   value: (
     *    AzureVoice
     *   |CartesiaVoice
     *   |CustomVoice
     *   |DeepgramVoice
     *   |ElevenLabsVoice
     *   |HumeVoice
     *   |LmntVoice
     *   |NeuphonicVoice
     *   |OpenAiVoice
     *   |PlayHtVoice
     *   |RimeAiVoice
     *   |SmallestAiVoice
     *   |TavusVoice
     *   |VapiVoice
     *   |SesameVoice
     *   |InworldVoice
     *   |MinimaxVoice
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
     * @param AzureVoice $azure
     * @return UpdateAssistantDtoVoice
     */
    public static function azure(AzureVoice $azure): UpdateAssistantDtoVoice
    {
        return new UpdateAssistantDtoVoice([
            'provider' => 'azure',
            'value' => $azure,
        ]);
    }

    /**
     * @param CartesiaVoice $cartesia
     * @return UpdateAssistantDtoVoice
     */
    public static function cartesia(CartesiaVoice $cartesia): UpdateAssistantDtoVoice
    {
        return new UpdateAssistantDtoVoice([
            'provider' => 'cartesia',
            'value' => $cartesia,
        ]);
    }

    /**
     * @param CustomVoice $customVoice
     * @return UpdateAssistantDtoVoice
     */
    public static function customVoice(CustomVoice $customVoice): UpdateAssistantDtoVoice
    {
        return new UpdateAssistantDtoVoice([
            'provider' => 'custom-voice',
            'value' => $customVoice,
        ]);
    }

    /**
     * @param DeepgramVoice $deepgram
     * @return UpdateAssistantDtoVoice
     */
    public static function deepgram(DeepgramVoice $deepgram): UpdateAssistantDtoVoice
    {
        return new UpdateAssistantDtoVoice([
            'provider' => 'deepgram',
            'value' => $deepgram,
        ]);
    }

    /**
     * @param ElevenLabsVoice $_11Labs
     * @return UpdateAssistantDtoVoice
     */
    public static function _11Labs(ElevenLabsVoice $_11Labs): UpdateAssistantDtoVoice
    {
        return new UpdateAssistantDtoVoice([
            'provider' => '11labs',
            'value' => $_11Labs,
        ]);
    }

    /**
     * @param HumeVoice $hume
     * @return UpdateAssistantDtoVoice
     */
    public static function hume(HumeVoice $hume): UpdateAssistantDtoVoice
    {
        return new UpdateAssistantDtoVoice([
            'provider' => 'hume',
            'value' => $hume,
        ]);
    }

    /**
     * @param LmntVoice $lmnt
     * @return UpdateAssistantDtoVoice
     */
    public static function lmnt(LmntVoice $lmnt): UpdateAssistantDtoVoice
    {
        return new UpdateAssistantDtoVoice([
            'provider' => 'lmnt',
            'value' => $lmnt,
        ]);
    }

    /**
     * @param NeuphonicVoice $neuphonic
     * @return UpdateAssistantDtoVoice
     */
    public static function neuphonic(NeuphonicVoice $neuphonic): UpdateAssistantDtoVoice
    {
        return new UpdateAssistantDtoVoice([
            'provider' => 'neuphonic',
            'value' => $neuphonic,
        ]);
    }

    /**
     * @param OpenAiVoice $openai
     * @return UpdateAssistantDtoVoice
     */
    public static function openai(OpenAiVoice $openai): UpdateAssistantDtoVoice
    {
        return new UpdateAssistantDtoVoice([
            'provider' => 'openai',
            'value' => $openai,
        ]);
    }

    /**
     * @param PlayHtVoice $playht
     * @return UpdateAssistantDtoVoice
     */
    public static function playht(PlayHtVoice $playht): UpdateAssistantDtoVoice
    {
        return new UpdateAssistantDtoVoice([
            'provider' => 'playht',
            'value' => $playht,
        ]);
    }

    /**
     * @param RimeAiVoice $rimeAi
     * @return UpdateAssistantDtoVoice
     */
    public static function rimeAi(RimeAiVoice $rimeAi): UpdateAssistantDtoVoice
    {
        return new UpdateAssistantDtoVoice([
            'provider' => 'rime-ai',
            'value' => $rimeAi,
        ]);
    }

    /**
     * @param SmallestAiVoice $smallestAi
     * @return UpdateAssistantDtoVoice
     */
    public static function smallestAi(SmallestAiVoice $smallestAi): UpdateAssistantDtoVoice
    {
        return new UpdateAssistantDtoVoice([
            'provider' => 'smallest-ai',
            'value' => $smallestAi,
        ]);
    }

    /**
     * @param TavusVoice $tavus
     * @return UpdateAssistantDtoVoice
     */
    public static function tavus(TavusVoice $tavus): UpdateAssistantDtoVoice
    {
        return new UpdateAssistantDtoVoice([
            'provider' => 'tavus',
            'value' => $tavus,
        ]);
    }

    /**
     * @param VapiVoice $vapi
     * @return UpdateAssistantDtoVoice
     */
    public static function vapi(VapiVoice $vapi): UpdateAssistantDtoVoice
    {
        return new UpdateAssistantDtoVoice([
            'provider' => 'vapi',
            'value' => $vapi,
        ]);
    }

    /**
     * @param SesameVoice $sesame
     * @return UpdateAssistantDtoVoice
     */
    public static function sesame(SesameVoice $sesame): UpdateAssistantDtoVoice
    {
        return new UpdateAssistantDtoVoice([
            'provider' => 'sesame',
            'value' => $sesame,
        ]);
    }

    /**
     * @param InworldVoice $inworld
     * @return UpdateAssistantDtoVoice
     */
    public static function inworld(InworldVoice $inworld): UpdateAssistantDtoVoice
    {
        return new UpdateAssistantDtoVoice([
            'provider' => 'inworld',
            'value' => $inworld,
        ]);
    }

    /**
     * @param MinimaxVoice $minimax
     * @return UpdateAssistantDtoVoice
     */
    public static function minimax(MinimaxVoice $minimax): UpdateAssistantDtoVoice
    {
        return new UpdateAssistantDtoVoice([
            'provider' => 'minimax',
            'value' => $minimax,
        ]);
    }

    /**
     * @return bool
     */
    public function isAzure(): bool
    {
        return $this->value instanceof AzureVoice && $this->provider === 'azure';
    }

    /**
     * @return AzureVoice
     */
    public function asAzure(): AzureVoice
    {
        if (! ($this->value instanceof AzureVoice && $this->provider === 'azure')) {
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
        return $this->value instanceof CartesiaVoice && $this->provider === 'cartesia';
    }

    /**
     * @return CartesiaVoice
     */
    public function asCartesia(): CartesiaVoice
    {
        if (! ($this->value instanceof CartesiaVoice && $this->provider === 'cartesia')) {
            throw new Exception(
                "Expected cartesia; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isCustomVoice(): bool
    {
        return $this->value instanceof CustomVoice && $this->provider === 'custom-voice';
    }

    /**
     * @return CustomVoice
     */
    public function asCustomVoice(): CustomVoice
    {
        if (! ($this->value instanceof CustomVoice && $this->provider === 'custom-voice')) {
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
        return $this->value instanceof DeepgramVoice && $this->provider === 'deepgram';
    }

    /**
     * @return DeepgramVoice
     */
    public function asDeepgram(): DeepgramVoice
    {
        if (! ($this->value instanceof DeepgramVoice && $this->provider === 'deepgram')) {
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
        return $this->value instanceof ElevenLabsVoice && $this->provider === '11labs';
    }

    /**
     * @return ElevenLabsVoice
     */
    public function as_11Labs(): ElevenLabsVoice
    {
        if (! ($this->value instanceof ElevenLabsVoice && $this->provider === '11labs')) {
            throw new Exception(
                "Expected 11labs; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isHume(): bool
    {
        return $this->value instanceof HumeVoice && $this->provider === 'hume';
    }

    /**
     * @return HumeVoice
     */
    public function asHume(): HumeVoice
    {
        if (! ($this->value instanceof HumeVoice && $this->provider === 'hume')) {
            throw new Exception(
                "Expected hume; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isLmnt(): bool
    {
        return $this->value instanceof LmntVoice && $this->provider === 'lmnt';
    }

    /**
     * @return LmntVoice
     */
    public function asLmnt(): LmntVoice
    {
        if (! ($this->value instanceof LmntVoice && $this->provider === 'lmnt')) {
            throw new Exception(
                "Expected lmnt; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isNeuphonic(): bool
    {
        return $this->value instanceof NeuphonicVoice && $this->provider === 'neuphonic';
    }

    /**
     * @return NeuphonicVoice
     */
    public function asNeuphonic(): NeuphonicVoice
    {
        if (! ($this->value instanceof NeuphonicVoice && $this->provider === 'neuphonic')) {
            throw new Exception(
                "Expected neuphonic; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isOpenai(): bool
    {
        return $this->value instanceof OpenAiVoice && $this->provider === 'openai';
    }

    /**
     * @return OpenAiVoice
     */
    public function asOpenai(): OpenAiVoice
    {
        if (! ($this->value instanceof OpenAiVoice && $this->provider === 'openai')) {
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
        return $this->value instanceof PlayHtVoice && $this->provider === 'playht';
    }

    /**
     * @return PlayHtVoice
     */
    public function asPlayht(): PlayHtVoice
    {
        if (! ($this->value instanceof PlayHtVoice && $this->provider === 'playht')) {
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
        return $this->value instanceof RimeAiVoice && $this->provider === 'rime-ai';
    }

    /**
     * @return RimeAiVoice
     */
    public function asRimeAi(): RimeAiVoice
    {
        if (! ($this->value instanceof RimeAiVoice && $this->provider === 'rime-ai')) {
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
        return $this->value instanceof SmallestAiVoice && $this->provider === 'smallest-ai';
    }

    /**
     * @return SmallestAiVoice
     */
    public function asSmallestAi(): SmallestAiVoice
    {
        if (! ($this->value instanceof SmallestAiVoice && $this->provider === 'smallest-ai')) {
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
        return $this->value instanceof TavusVoice && $this->provider === 'tavus';
    }

    /**
     * @return TavusVoice
     */
    public function asTavus(): TavusVoice
    {
        if (! ($this->value instanceof TavusVoice && $this->provider === 'tavus')) {
            throw new Exception(
                "Expected tavus; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isVapi(): bool
    {
        return $this->value instanceof VapiVoice && $this->provider === 'vapi';
    }

    /**
     * @return VapiVoice
     */
    public function asVapi(): VapiVoice
    {
        if (! ($this->value instanceof VapiVoice && $this->provider === 'vapi')) {
            throw new Exception(
                "Expected vapi; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isSesame(): bool
    {
        return $this->value instanceof SesameVoice && $this->provider === 'sesame';
    }

    /**
     * @return SesameVoice
     */
    public function asSesame(): SesameVoice
    {
        if (! ($this->value instanceof SesameVoice && $this->provider === 'sesame')) {
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
        return $this->value instanceof InworldVoice && $this->provider === 'inworld';
    }

    /**
     * @return InworldVoice
     */
    public function asInworld(): InworldVoice
    {
        if (! ($this->value instanceof InworldVoice && $this->provider === 'inworld')) {
            throw new Exception(
                "Expected inworld; got " . $this->provider . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isMinimax(): bool
    {
        return $this->value instanceof MinimaxVoice && $this->provider === 'minimax';
    }

    /**
     * @return MinimaxVoice
     */
    public function asMinimax(): MinimaxVoice
    {
        if (! ($this->value instanceof MinimaxVoice && $this->provider === 'minimax')) {
            throw new Exception(
                "Expected minimax; got " . $this->provider . " with value of type " . get_debug_type($this->value),
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
            case 'hume':
                $value = $this->asHume()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'lmnt':
                $value = $this->asLmnt()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'neuphonic':
                $value = $this->asNeuphonic()->jsonSerialize();
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
            case 'vapi':
                $value = $this->asVapi()->jsonSerialize();
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
            case 'minimax':
                $value = $this->asMinimax()->jsonSerialize();
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
                $args['value'] = AzureVoice::jsonDeserialize($data);
                break;
            case 'cartesia':
                $args['value'] = CartesiaVoice::jsonDeserialize($data);
                break;
            case 'custom-voice':
                $args['value'] = CustomVoice::jsonDeserialize($data);
                break;
            case 'deepgram':
                $args['value'] = DeepgramVoice::jsonDeserialize($data);
                break;
            case '11labs':
                $args['value'] = ElevenLabsVoice::jsonDeserialize($data);
                break;
            case 'hume':
                $args['value'] = HumeVoice::jsonDeserialize($data);
                break;
            case 'lmnt':
                $args['value'] = LmntVoice::jsonDeserialize($data);
                break;
            case 'neuphonic':
                $args['value'] = NeuphonicVoice::jsonDeserialize($data);
                break;
            case 'openai':
                $args['value'] = OpenAiVoice::jsonDeserialize($data);
                break;
            case 'playht':
                $args['value'] = PlayHtVoice::jsonDeserialize($data);
                break;
            case 'rime-ai':
                $args['value'] = RimeAiVoice::jsonDeserialize($data);
                break;
            case 'smallest-ai':
                $args['value'] = SmallestAiVoice::jsonDeserialize($data);
                break;
            case 'tavus':
                $args['value'] = TavusVoice::jsonDeserialize($data);
                break;
            case 'vapi':
                $args['value'] = VapiVoice::jsonDeserialize($data);
                break;
            case 'sesame':
                $args['value'] = SesameVoice::jsonDeserialize($data);
                break;
            case 'inworld':
                $args['value'] = InworldVoice::jsonDeserialize($data);
                break;
            case 'minimax':
                $args['value'] = MinimaxVoice::jsonDeserialize($data);
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
