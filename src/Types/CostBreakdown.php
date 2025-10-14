<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class CostBreakdown extends JsonSerializableType
{
    /**
     * @var ?float $transport This is the cost of the transport provider, like Twilio or Vonage.
     */
    #[JsonProperty('transport')]
    public ?float $transport;

    /**
     * @var ?float $stt This is the cost of the speech-to-text service.
     */
    #[JsonProperty('stt')]
    public ?float $stt;

    /**
     * @var ?float $llm This is the cost of the language model.
     */
    #[JsonProperty('llm')]
    public ?float $llm;

    /**
     * @var ?float $tts This is the cost of the text-to-speech service.
     */
    #[JsonProperty('tts')]
    public ?float $tts;

    /**
     * @var ?float $vapi This is the cost of Vapi.
     */
    #[JsonProperty('vapi')]
    public ?float $vapi;

    /**
     * @var ?float $chat This is the cost of chat interactions.
     */
    #[JsonProperty('chat')]
    public ?float $chat;

    /**
     * @var ?float $total This is the total cost of the call.
     */
    #[JsonProperty('total')]
    public ?float $total;

    /**
     * @var ?float $llmPromptTokens This is the LLM prompt tokens used for the call.
     */
    #[JsonProperty('llmPromptTokens')]
    public ?float $llmPromptTokens;

    /**
     * @var ?float $llmCompletionTokens This is the LLM completion tokens used for the call.
     */
    #[JsonProperty('llmCompletionTokens')]
    public ?float $llmCompletionTokens;

    /**
     * @var ?float $ttsCharacters This is the TTS characters used for the call.
     */
    #[JsonProperty('ttsCharacters')]
    public ?float $ttsCharacters;

    /**
     * @var ?AnalysisCostBreakdown $analysisCostBreakdown This is the cost of the analysis.
     */
    #[JsonProperty('analysisCostBreakdown')]
    public ?AnalysisCostBreakdown $analysisCostBreakdown;

    /**
     * @param array{
     *   transport?: ?float,
     *   stt?: ?float,
     *   llm?: ?float,
     *   tts?: ?float,
     *   vapi?: ?float,
     *   chat?: ?float,
     *   total?: ?float,
     *   llmPromptTokens?: ?float,
     *   llmCompletionTokens?: ?float,
     *   ttsCharacters?: ?float,
     *   analysisCostBreakdown?: ?AnalysisCostBreakdown,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->transport = $values['transport'] ?? null;
        $this->stt = $values['stt'] ?? null;
        $this->llm = $values['llm'] ?? null;
        $this->tts = $values['tts'] ?? null;
        $this->vapi = $values['vapi'] ?? null;
        $this->chat = $values['chat'] ?? null;
        $this->total = $values['total'] ?? null;
        $this->llmPromptTokens = $values['llmPromptTokens'] ?? null;
        $this->llmCompletionTokens = $values['llmCompletionTokens'] ?? null;
        $this->ttsCharacters = $values['ttsCharacters'] ?? null;
        $this->analysisCostBreakdown = $values['analysisCostBreakdown'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
