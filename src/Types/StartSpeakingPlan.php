<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;
use Vapi\Core\Types\Union;

final class StartSpeakingPlan extends JsonSerializableType
{
    /**
     * This is how long assistant waits before speaking. Defaults to 0.4.
     *
     * This is the minimum it will wait but if there is latency is the pipeline, this minimum will be exceeded. This is intended as a stopgap in case the pipeline is moving too fast.
     *
     * Example:
     * - If model generates tokens and voice generates bytes within 100ms, the pipeline still waits 300ms before outputting speech.
     *
     * Usage:
     * - If the customer is taking long pauses, set this to a higher value.
     * - If the assistant is accidentally jumping in too much, set this to a higher value.
     *
     * @default 0.4
     *
     * @var ?float $waitSeconds
     */
    #[JsonProperty('waitSeconds')]
    public ?float $waitSeconds;

    /**
     * @var (
     *    bool
     *   |'livekit'
     * )|null $smartEndpointingEnabled
     */
    #[JsonProperty('smartEndpointingEnabled'), Union('boolean', 'string', 'null')]
    public bool|string|null $smartEndpointingEnabled;

    /**
     * This is the plan for smart endpointing. Pick between Vapi smart endpointing, LiveKit, or custom endpointing model (or nothing). We strongly recommend using livekit endpointing when working in English. LiveKit endpointing is not supported in other languages, yet.
     *
     * If this is set, it will override and take precedence over `transcriptionEndpointingPlan`.
     * This plan will still be overridden by any matching `customEndpointingRules`.
     *
     * If this is not set, the system will automatically use the transcriber's built-in endpointing capabilities if available.
     *
     * @var (
     *    VapiSmartEndpointingPlan
     *   |LivekitSmartEndpointingPlan
     *   |CustomEndpointingModelSmartEndpointingPlan
     * )|null $smartEndpointingPlan
     */
    #[JsonProperty('smartEndpointingPlan'), Union(VapiSmartEndpointingPlan::class, LivekitSmartEndpointingPlan::class, CustomEndpointingModelSmartEndpointingPlan::class, 'null')]
    public VapiSmartEndpointingPlan|LivekitSmartEndpointingPlan|CustomEndpointingModelSmartEndpointingPlan|null $smartEndpointingPlan;

    /**
     * These are the custom endpointing rules to set an endpointing timeout based on a regex on the customer's speech or the assistant's last message.
     *
     * Usage:
     * - If you have yes/no questions like "are you interested in a loan?", you can set a shorter timeout.
     * - If you have questions where the customer may pause to look up information like "what's my account number?", you can set a longer timeout.
     * - If you want to wait longer while customer is enumerating a list of numbers, you can set a longer timeout.
     *
     * These rules have the highest precedence and will override both `smartEndpointingPlan` and `transcriptionEndpointingPlan` when a rule is matched.
     *
     * The rules are evaluated in order and the first one that matches will be used.
     *
     * Order of precedence for endpointing:
     * 1. customEndpointingRules (if any match)
     * 2. smartEndpointingPlan (if set)
     * 3. transcriptionEndpointingPlan
     *
     * @default []
     *
     * @var ?array<StartSpeakingPlanCustomEndpointingRulesItem> $customEndpointingRules
     */
    #[JsonProperty('customEndpointingRules'), ArrayType([StartSpeakingPlanCustomEndpointingRulesItem::class])]
    public ?array $customEndpointingRules;

    /**
     * This determines how a customer speech is considered done (endpointing) using the transcription of customer's speech.
     *
     * Once an endpoint is triggered, the request is sent to `assistant.model`.
     *
     * Note: This plan is only used if `smartEndpointingPlan` is not set and transcriber does not have built-in endpointing capabilities. If both are provided, `smartEndpointingPlan` takes precedence.
     * This plan will also be overridden by any matching `customEndpointingRules`.
     *
     * @var ?TranscriptionEndpointingPlan $transcriptionEndpointingPlan
     */
    #[JsonProperty('transcriptionEndpointingPlan')]
    public ?TranscriptionEndpointingPlan $transcriptionEndpointingPlan;

    /**
     * @param array{
     *   waitSeconds?: ?float,
     *   smartEndpointingEnabled?: (
     *    bool
     *   |'livekit'
     * )|null,
     *   smartEndpointingPlan?: (
     *    VapiSmartEndpointingPlan
     *   |LivekitSmartEndpointingPlan
     *   |CustomEndpointingModelSmartEndpointingPlan
     * )|null,
     *   customEndpointingRules?: ?array<StartSpeakingPlanCustomEndpointingRulesItem>,
     *   transcriptionEndpointingPlan?: ?TranscriptionEndpointingPlan,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->waitSeconds = $values['waitSeconds'] ?? null;
        $this->smartEndpointingEnabled = $values['smartEndpointingEnabled'] ?? null;
        $this->smartEndpointingPlan = $values['smartEndpointingPlan'] ?? null;
        $this->customEndpointingRules = $values['customEndpointingRules'] ?? null;
        $this->transcriptionEndpointingPlan = $values['transcriptionEndpointingPlan'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
