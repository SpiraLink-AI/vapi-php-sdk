<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class GoogleRealtimeConfig extends JsonSerializableType
{
    /**
     * This is the nucleus sampling parameter that controls the cumulative probability of tokens considered during text generation.
     * Only applicable with the Gemini Flash 2.0 Multimodal Live API.
     *
     * @var ?float $topP
     */
    #[JsonProperty('topP')]
    public ?float $topP;

    /**
     * This is the top-k sampling parameter that limits the number of highest probability tokens considered during text generation.
     * Only applicable with the Gemini Flash 2.0 Multimodal Live API.
     *
     * @var ?float $topK
     */
    #[JsonProperty('topK')]
    public ?float $topK;

    /**
     * This is the presence penalty parameter that influences the model's likelihood to repeat information by penalizing tokens based on their presence in the text.
     * Only applicable with the Gemini Flash 2.0 Multimodal Live API.
     *
     * @var ?float $presencePenalty
     */
    #[JsonProperty('presencePenalty')]
    public ?float $presencePenalty;

    /**
     * This is the frequency penalty parameter that influences the model's likelihood to repeat tokens by penalizing them based on their frequency in the text.
     * Only applicable with the Gemini Flash 2.0 Multimodal Live API.
     *
     * @var ?float $frequencyPenalty
     */
    #[JsonProperty('frequencyPenalty')]
    public ?float $frequencyPenalty;

    /**
     * This is the speech configuration object that defines the voice settings to be used for the model's speech output.
     * Only applicable with the Gemini Flash 2.0 Multimodal Live API.
     *
     * @var ?GeminiMultimodalLiveSpeechConfig $speechConfig
     */
    #[JsonProperty('speechConfig')]
    public ?GeminiMultimodalLiveSpeechConfig $speechConfig;

    /**
     * @param array{
     *   topP?: ?float,
     *   topK?: ?float,
     *   presencePenalty?: ?float,
     *   frequencyPenalty?: ?float,
     *   speechConfig?: ?GeminiMultimodalLiveSpeechConfig,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->topP = $values['topP'] ?? null;
        $this->topK = $values['topK'] ?? null;
        $this->presencePenalty = $values['presencePenalty'] ?? null;
        $this->frequencyPenalty = $values['frequencyPenalty'] ?? null;
        $this->speechConfig = $values['speechConfig'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
