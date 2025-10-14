<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class VoicemailDetectionCost extends JsonSerializableType
{
    /**
     * @var array<string, mixed> $model This is the model that was used to perform the analysis.
     */
    #[JsonProperty('model'), ArrayType(['string' => 'mixed'])]
    public array $model;

    /**
     * @var value-of<VoicemailDetectionCostProvider> $provider This is the provider that was used to detect the voicemail.
     */
    #[JsonProperty('provider')]
    public string $provider;

    /**
     * @var float $promptTextTokens This is the number of prompt text tokens used in the voicemail detection.
     */
    #[JsonProperty('promptTextTokens')]
    public float $promptTextTokens;

    /**
     * @var float $promptAudioTokens This is the number of prompt audio tokens used in the voicemail detection.
     */
    #[JsonProperty('promptAudioTokens')]
    public float $promptAudioTokens;

    /**
     * @var float $completionTextTokens This is the number of completion text tokens used in the voicemail detection.
     */
    #[JsonProperty('completionTextTokens')]
    public float $completionTextTokens;

    /**
     * @var float $completionAudioTokens This is the number of completion audio tokens used in the voicemail detection.
     */
    #[JsonProperty('completionAudioTokens')]
    public float $completionAudioTokens;

    /**
     * @var float $cost This is the cost of the component in USD.
     */
    #[JsonProperty('cost')]
    public float $cost;

    /**
     * @param array{
     *   model: array<string, mixed>,
     *   provider: value-of<VoicemailDetectionCostProvider>,
     *   promptTextTokens: float,
     *   promptAudioTokens: float,
     *   completionTextTokens: float,
     *   completionAudioTokens: float,
     *   cost: float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->model = $values['model'];
        $this->provider = $values['provider'];
        $this->promptTextTokens = $values['promptTextTokens'];
        $this->promptAudioTokens = $values['promptAudioTokens'];
        $this->completionTextTokens = $values['completionTextTokens'];
        $this->completionAudioTokens = $values['completionAudioTokens'];
        $this->cost = $values['cost'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
