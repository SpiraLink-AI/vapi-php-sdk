<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class CompliancePlan extends JsonSerializableType
{
    /**
     * When this is enabled, no logs, recordings, or transcriptions will be stored.
     * At the end of the call, you will still receive an end-of-call-report message to store on your server. Defaults to false.
     *
     * @var ?bool $hipaaEnabled
     */
    #[JsonProperty('hipaaEnabled')]
    public ?bool $hipaaEnabled;

    /**
     * When this is enabled, the user will be restricted to use PCI-compliant providers, and no logs or transcripts are stored.
     * At the end of the call, you will receive an end-of-call-report message to store on your server. Defaults to false.
     *
     * @var ?bool $pciEnabled
     */
    #[JsonProperty('pciEnabled')]
    public ?bool $pciEnabled;

    /**
     * @var ?SecurityFilterPlan $securityFilterPlan This is the security filter plan for the assistant. It allows filtering of transcripts for security threats before sending to LLM.
     */
    #[JsonProperty('securityFilterPlan')]
    public ?SecurityFilterPlan $securityFilterPlan;

    /**
     * @var ?CompliancePlanRecordingConsentPlan $recordingConsentPlan
     */
    #[JsonProperty('recordingConsentPlan')]
    public ?CompliancePlanRecordingConsentPlan $recordingConsentPlan;

    /**
     * @param array{
     *   hipaaEnabled?: ?bool,
     *   pciEnabled?: ?bool,
     *   securityFilterPlan?: ?SecurityFilterPlan,
     *   recordingConsentPlan?: ?CompliancePlanRecordingConsentPlan,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->hipaaEnabled = $values['hipaaEnabled'] ?? null;
        $this->pciEnabled = $values['pciEnabled'] ?? null;
        $this->securityFilterPlan = $values['securityFilterPlan'] ?? null;
        $this->recordingConsentPlan = $values['recordingConsentPlan'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
