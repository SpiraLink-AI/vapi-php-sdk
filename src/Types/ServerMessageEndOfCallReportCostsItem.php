<?php declare(strict_types=1);

namespace Vapi\Types;

use Exception;
use Vapi\Core\Json\JsonDecoder;
use Vapi\Core\Json\JsonSerializableType;

final class ServerMessageEndOfCallReportCostsItem extends JsonSerializableType
{
    /**
     * @var (
     *    'transport'
     *   |'transcriber'
     *   |'model'
     *   |'voice'
     *   |'vapi'
     *   |'voicemail-detection'
     *   |'analysis'
     *   |'knowledge-base'
     *   |'_unknown'
     * ) $type
     */
    public readonly string $type;

    /**
     * @var (
     *    TransportCost
     *   |TranscriberCost
     *   |ModelCost
     *   |VoiceCost
     *   |VapiCost
     *   |VoicemailDetectionCost
     *   |AnalysisCost
     *   |KnowledgeBaseCost
     *   |mixed
     * ) $value
     */
    public readonly mixed $value;

    /**
     * @param array{
     *   type: (
     *    'transport'
     *   |'transcriber'
     *   |'model'
     *   |'voice'
     *   |'vapi'
     *   |'voicemail-detection'
     *   |'analysis'
     *   |'knowledge-base'
     *   |'_unknown'
     * ),
     *   value: (
     *    TransportCost
     *   |TranscriberCost
     *   |ModelCost
     *   |VoiceCost
     *   |VapiCost
     *   |VoicemailDetectionCost
     *   |AnalysisCost
     *   |KnowledgeBaseCost
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
     * @param TransportCost $transport
     * @return ServerMessageEndOfCallReportCostsItem
     */
    public static function transport(TransportCost $transport): ServerMessageEndOfCallReportCostsItem
    {
        return new ServerMessageEndOfCallReportCostsItem([
            'type' => 'transport',
            'value' => $transport,
        ]);
    }

    /**
     * @param TranscriberCost $transcriber
     * @return ServerMessageEndOfCallReportCostsItem
     */
    public static function transcriber(TranscriberCost $transcriber): ServerMessageEndOfCallReportCostsItem
    {
        return new ServerMessageEndOfCallReportCostsItem([
            'type' => 'transcriber',
            'value' => $transcriber,
        ]);
    }

    /**
     * @param ModelCost $model
     * @return ServerMessageEndOfCallReportCostsItem
     */
    public static function model(ModelCost $model): ServerMessageEndOfCallReportCostsItem
    {
        return new ServerMessageEndOfCallReportCostsItem([
            'type' => 'model',
            'value' => $model,
        ]);
    }

    /**
     * @param VoiceCost $voice
     * @return ServerMessageEndOfCallReportCostsItem
     */
    public static function voice(VoiceCost $voice): ServerMessageEndOfCallReportCostsItem
    {
        return new ServerMessageEndOfCallReportCostsItem([
            'type' => 'voice',
            'value' => $voice,
        ]);
    }

    /**
     * @param VapiCost $vapi
     * @return ServerMessageEndOfCallReportCostsItem
     */
    public static function vapi(VapiCost $vapi): ServerMessageEndOfCallReportCostsItem
    {
        return new ServerMessageEndOfCallReportCostsItem([
            'type' => 'vapi',
            'value' => $vapi,
        ]);
    }

    /**
     * @param VoicemailDetectionCost $voicemailDetection
     * @return ServerMessageEndOfCallReportCostsItem
     */
    public static function voicemailDetection(VoicemailDetectionCost $voicemailDetection): ServerMessageEndOfCallReportCostsItem
    {
        return new ServerMessageEndOfCallReportCostsItem([
            'type' => 'voicemail-detection',
            'value' => $voicemailDetection,
        ]);
    }

    /**
     * @param AnalysisCost $analysis
     * @return ServerMessageEndOfCallReportCostsItem
     */
    public static function analysis(AnalysisCost $analysis): ServerMessageEndOfCallReportCostsItem
    {
        return new ServerMessageEndOfCallReportCostsItem([
            'type' => 'analysis',
            'value' => $analysis,
        ]);
    }

    /**
     * @param KnowledgeBaseCost $knowledgeBase
     * @return ServerMessageEndOfCallReportCostsItem
     */
    public static function knowledgeBase(KnowledgeBaseCost $knowledgeBase): ServerMessageEndOfCallReportCostsItem
    {
        return new ServerMessageEndOfCallReportCostsItem([
            'type' => 'knowledge-base',
            'value' => $knowledgeBase,
        ]);
    }

    /**
     * @return bool
     */
    public function isTransport(): bool
    {
        return $this->value instanceof TransportCost && $this->type === 'transport';
    }

    /**
     * @return TransportCost
     */
    public function asTransport(): TransportCost
    {
        if (! ($this->value instanceof TransportCost && $this->type === 'transport')) {
            throw new Exception(
                "Expected transport; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isTranscriber(): bool
    {
        return $this->value instanceof TranscriberCost && $this->type === 'transcriber';
    }

    /**
     * @return TranscriberCost
     */
    public function asTranscriber(): TranscriberCost
    {
        if (! ($this->value instanceof TranscriberCost && $this->type === 'transcriber')) {
            throw new Exception(
                "Expected transcriber; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isModel(): bool
    {
        return $this->value instanceof ModelCost && $this->type === 'model';
    }

    /**
     * @return ModelCost
     */
    public function asModel(): ModelCost
    {
        if (! ($this->value instanceof ModelCost && $this->type === 'model')) {
            throw new Exception(
                "Expected model; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isVoice(): bool
    {
        return $this->value instanceof VoiceCost && $this->type === 'voice';
    }

    /**
     * @return VoiceCost
     */
    public function asVoice(): VoiceCost
    {
        if (! ($this->value instanceof VoiceCost && $this->type === 'voice')) {
            throw new Exception(
                "Expected voice; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isVapi(): bool
    {
        return $this->value instanceof VapiCost && $this->type === 'vapi';
    }

    /**
     * @return VapiCost
     */
    public function asVapi(): VapiCost
    {
        if (! ($this->value instanceof VapiCost && $this->type === 'vapi')) {
            throw new Exception(
                "Expected vapi; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isVoicemailDetection(): bool
    {
        return $this->value instanceof VoicemailDetectionCost && $this->type === 'voicemail-detection';
    }

    /**
     * @return VoicemailDetectionCost
     */
    public function asVoicemailDetection(): VoicemailDetectionCost
    {
        if (! ($this->value instanceof VoicemailDetectionCost && $this->type === 'voicemail-detection')) {
            throw new Exception(
                "Expected voicemail-detection; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isAnalysis(): bool
    {
        return $this->value instanceof AnalysisCost && $this->type === 'analysis';
    }

    /**
     * @return AnalysisCost
     */
    public function asAnalysis(): AnalysisCost
    {
        if (! ($this->value instanceof AnalysisCost && $this->type === 'analysis')) {
            throw new Exception(
                "Expected analysis; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isKnowledgeBase(): bool
    {
        return $this->value instanceof KnowledgeBaseCost && $this->type === 'knowledge-base';
    }

    /**
     * @return KnowledgeBaseCost
     */
    public function asKnowledgeBase(): KnowledgeBaseCost
    {
        if (! ($this->value instanceof KnowledgeBaseCost && $this->type === 'knowledge-base')) {
            throw new Exception(
                "Expected knowledge-base; got " . $this->type . " with value of type " . get_debug_type($this->value),
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
            case 'transport':
                $value = $this->asTransport()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'transcriber':
                $value = $this->asTranscriber()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'model':
                $value = $this->asModel()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'voice':
                $value = $this->asVoice()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'vapi':
                $value = $this->asVapi()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'voicemail-detection':
                $value = $this->asVoicemailDetection()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'analysis':
                $value = $this->asAnalysis()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'knowledge-base':
                $value = $this->asKnowledgeBase()->jsonSerialize();
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
            case 'transport':
                $args['value'] = TransportCost::jsonDeserialize($data);
                break;
            case 'transcriber':
                $args['value'] = TranscriberCost::jsonDeserialize($data);
                break;
            case 'model':
                $args['value'] = ModelCost::jsonDeserialize($data);
                break;
            case 'voice':
                $args['value'] = VoiceCost::jsonDeserialize($data);
                break;
            case 'vapi':
                $args['value'] = VapiCost::jsonDeserialize($data);
                break;
            case 'voicemail-detection':
                $args['value'] = VoicemailDetectionCost::jsonDeserialize($data);
                break;
            case 'analysis':
                $args['value'] = AnalysisCost::jsonDeserialize($data);
                break;
            case 'knowledge-base':
                $args['value'] = KnowledgeBaseCost::jsonDeserialize($data);
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
