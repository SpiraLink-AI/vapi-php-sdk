<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class SummaryPlan extends JsonSerializableType
{
    /**
     * These are the messages used to generate the summary.
     *
     * @default: ```
     * [
     *   {
     *     "role": "system",
     *     "content": "You are an expert note-taker. You will be given a transcript of a call. Summarize the call in 2-3 sentences. DO NOT return anything except the summary."
     *   },
     *   {
     *     "role": "user",
     *     "content": "Here is the transcript:\n\n{{transcript}}\n\n. Here is the ended reason of the call:\n\n{{endedReason}}\n\n"
     *   }
     * ]```
     *
     * You can customize by providing any messages you want.
     *
     * Here are the template variables available:
     * - {{transcript}}: The transcript of the call from `call.artifact.transcript`
     * - {{systemPrompt}}: The system prompt of the call from `assistant.model.messages[type=system].content`
     * - {{messages}}: The messages of the call from `assistant.model.messages`
     * - {{endedReason}}: The ended reason of the call from `call.endedReason`
     *
     * @var ?array<array<string, mixed>> $messages
     */
    #[JsonProperty('messages'), ArrayType([['string' => 'mixed']])]
    public ?array $messages;

    /**
     * This determines whether a summary is generated and stored in `call.analysis.summary`. Defaults to true.
     *
     * Usage:
     * - If you want to disable the summary, set this to false.
     *
     * @default true
     *
     * @var ?bool $enabled
     */
    #[JsonProperty('enabled')]
    public ?bool $enabled;

    /**
     * This is how long the request is tried before giving up. When request times out, `call.analysis.summary` will be empty.
     *
     * Usage:
     * - To guarantee the summary is generated, set this value high. Note, this will delay the end of call report in cases where model is slow to respond.
     *
     * @default 5 seconds
     *
     * @var ?float $timeoutSeconds
     */
    #[JsonProperty('timeoutSeconds')]
    public ?float $timeoutSeconds;

    /**
     * @param array{
     *   messages?: ?array<array<string, mixed>>,
     *   enabled?: ?bool,
     *   timeoutSeconds?: ?float,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->messages = $values['messages'] ?? null;
        $this->enabled = $values['enabled'] ?? null;
        $this->timeoutSeconds = $values['timeoutSeconds'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
