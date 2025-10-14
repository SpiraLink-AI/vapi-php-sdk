<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class TranscriptionEndpointingPlan extends JsonSerializableType
{
    /**
     * The minimum number of seconds to wait after transcription ending with punctuation before sending a request to the model. Defaults to 0.1.
     *
     * This setting exists because the transcriber punctuates the transcription when it's more confident that customer has completed a thought.
     *
     * @default 0.1
     *
     * @var ?float $onPunctuationSeconds
     */
    #[JsonProperty('onPunctuationSeconds')]
    public ?float $onPunctuationSeconds;

    /**
     * The minimum number of seconds to wait after transcription ending without punctuation before sending a request to the model. Defaults to 1.5.
     *
     * This setting exists to catch the cases where the transcriber was not confident enough to punctuate the transcription, but the customer is done and has been silent for a long time.
     *
     * @default 1.5
     *
     * @var ?float $onNoPunctuationSeconds
     */
    #[JsonProperty('onNoPunctuationSeconds')]
    public ?float $onNoPunctuationSeconds;

    /**
     * The minimum number of seconds to wait after transcription ending with a number before sending a request to the model. Defaults to 0.4.
     *
     * This setting exists because the transcriber will sometimes punctuate the transcription ending with a number, even though the customer hasn't uttered the full number. This happens commonly for long numbers when the customer reads the number in chunks.
     *
     * @default 0.5
     *
     * @var ?float $onNumberSeconds
     */
    #[JsonProperty('onNumberSeconds')]
    public ?float $onNumberSeconds;

    /**
     * @param array{
     *   onPunctuationSeconds?: ?float,
     *   onNoPunctuationSeconds?: ?float,
     *   onNumberSeconds?: ?float,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->onPunctuationSeconds = $values['onPunctuationSeconds'] ?? null;
        $this->onNoPunctuationSeconds = $values['onNoPunctuationSeconds'] ?? null;
        $this->onNumberSeconds = $values['onNumberSeconds'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
