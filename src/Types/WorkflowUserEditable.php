<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;
use Vapi\Core\Types\Union;

final class WorkflowUserEditable extends JsonSerializableType
{
    /**
     * @var array<WorkflowUserEditableNodesItem> $nodes
     */
    #[JsonProperty('nodes'), ArrayType([WorkflowUserEditableNodesItem::class])]
    public array $nodes;

    /**
     * This is the model for the workflow.
     *
     * This can be overridden at node level using `nodes[n].model`.
     *
     * @var ?WorkflowUserEditableModel $model
     */
    #[JsonProperty('model')]
    public ?WorkflowUserEditableModel $model;

    /**
     * This is the transcriber for the workflow.
     *
     * This can be overridden at node level using `nodes[n].transcriber`.
     *
     * @var ?WorkflowUserEditableTranscriber $transcriber
     */
    #[JsonProperty('transcriber')]
    public ?WorkflowUserEditableTranscriber $transcriber;

    /**
     * This is the voice for the workflow.
     *
     * This can be overridden at node level using `nodes[n].voice`.
     *
     * @var ?WorkflowUserEditableVoice $voice
     */
    #[JsonProperty('voice')]
    public ?WorkflowUserEditableVoice $voice;

    /**
     * This is the plan for observability of workflow's calls.
     *
     * Currently, only Langfuse is supported.
     *
     * @var ?LangfuseObservabilityPlan $observabilityPlan
     */
    #[JsonProperty('observabilityPlan')]
    public ?LangfuseObservabilityPlan $observabilityPlan;

    /**
     * This is the background sound in the call. Default for phone calls is 'office' and default for web calls is 'off'.
     * You can also provide a custom sound by providing a URL to an audio file.
     *
     * @var (
     *    value-of<WorkflowUserEditableBackgroundSoundZero>
     *   |string
     * )|null $backgroundSound
     */
    #[JsonProperty('backgroundSound'), Union('string', 'null')]
    public string|null $backgroundSound;

    /**
     * @var ?array<(
     *    CallHookCallEnding
     *   |CallHookAssistantSpeechInterrupted
     *   |CallHookCustomerSpeechInterrupted
     *   |CallHookCustomerSpeechTimeout
     * )> $hooks This is a set of actions that will be performed on certain events.
     */
    #[JsonProperty('hooks'), ArrayType([new Union(CallHookCallEnding::class, CallHookAssistantSpeechInterrupted::class, CallHookCustomerSpeechInterrupted::class, CallHookCustomerSpeechTimeout::class)])]
    public ?array $hooks;

    /**
     * @var ?array<WorkflowUserEditableCredentialsItem> $credentials These are dynamic credentials that will be used for the workflow calls. By default, all the credentials are available for use in the call but you can supplement an additional credentials using this. Dynamic credentials override existing credentials.
     */
    #[JsonProperty('credentials'), ArrayType([WorkflowUserEditableCredentialsItem::class])]
    public ?array $credentials;

    /**
     * @var ?WorkflowUserEditableVoicemailDetection $voicemailDetection This is the voicemail detection plan for the workflow.
     */
    #[JsonProperty('voicemailDetection')]
    public ?WorkflowUserEditableVoicemailDetection $voicemailDetection;

    /**
     * This is the maximum duration of the call in seconds.
     *
     * After this duration, the call will automatically end.
     *
     * Default is 1800 (30 minutes), max is 43200 (12 hours), and min is 10 seconds.
     *
     * @var ?float $maxDurationSeconds
     */
    #[JsonProperty('maxDurationSeconds')]
    public ?float $maxDurationSeconds;

    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var array<Edge> $edges
     */
    #[JsonProperty('edges'), ArrayType([Edge::class])]
    public array $edges;

    /**
     * @var ?string $globalPrompt
     */
    #[JsonProperty('globalPrompt')]
    public ?string $globalPrompt;

    /**
     * This is where Vapi will send webhooks. You can find all webhooks available along with their shape in ServerMessage schema.
     *
     * The order of precedence is:
     *
     * 1. tool.server
     * 2. workflow.server / assistant.server
     * 3. phoneNumber.server
     * 4. org.server
     *
     * @var ?Server $server
     */
    #[JsonProperty('server')]
    public ?Server $server;

    /**
     * @var ?CompliancePlan $compliancePlan This is the compliance plan for the workflow. It allows you to configure HIPAA and other compliance settings.
     */
    #[JsonProperty('compliancePlan')]
    public ?CompliancePlan $compliancePlan;

    /**
     * @var ?AnalysisPlan $analysisPlan This is the plan for analysis of workflow's calls. Stored in `call.analysis`.
     */
    #[JsonProperty('analysisPlan')]
    public ?AnalysisPlan $analysisPlan;

    /**
     * @var ?ArtifactPlan $artifactPlan This is the plan for artifacts generated during workflow's calls. Stored in `call.artifact`.
     */
    #[JsonProperty('artifactPlan')]
    public ?ArtifactPlan $artifactPlan;

    /**
     * This is the plan for when the workflow nodes should start talking.
     *
     * You should configure this if you're running into these issues:
     * - The assistant is too slow to start talking after the customer is done speaking.
     * - The assistant is too fast to start talking after the customer is done speaking.
     * - The assistant is so fast that it's actually interrupting the customer.
     *
     * @var ?StartSpeakingPlan $startSpeakingPlan
     */
    #[JsonProperty('startSpeakingPlan')]
    public ?StartSpeakingPlan $startSpeakingPlan;

    /**
     * This is the plan for when workflow nodes should stop talking on customer interruption.
     *
     * You should configure this if you're running into these issues:
     * - The assistant is too slow to recognize customer's interruption.
     * - The assistant is too fast to recognize customer's interruption.
     * - The assistant is getting interrupted by phrases that are just acknowledgments.
     * - The assistant is getting interrupted by background noises.
     * - The assistant is not properly stopping -- it starts talking right after getting interrupted.
     *
     * @var ?StopSpeakingPlan $stopSpeakingPlan
     */
    #[JsonProperty('stopSpeakingPlan')]
    public ?StopSpeakingPlan $stopSpeakingPlan;

    /**
     * This is the plan for real-time monitoring of the workflow's calls.
     *
     * Usage:
     * - To enable live listening of the workflow's calls, set `monitorPlan.listenEnabled` to `true`.
     * - To enable live control of the workflow's calls, set `monitorPlan.controlEnabled` to `true`.
     *
     * @var ?MonitorPlan $monitorPlan
     */
    #[JsonProperty('monitorPlan')]
    public ?MonitorPlan $monitorPlan;

    /**
     * This enables filtering of noise and background speech while the user is talking.
     *
     * Features:
     * - Smart denoising using Krisp
     * - Fourier denoising
     *
     * Both can be used together. Order of precedence:
     * - Smart denoising
     * - Fourier denoising
     *
     * @var ?BackgroundSpeechDenoisingPlan $backgroundSpeechDenoisingPlan
     */
    #[JsonProperty('backgroundSpeechDenoisingPlan')]
    public ?BackgroundSpeechDenoisingPlan $backgroundSpeechDenoisingPlan;

    /**
     * @var ?array<string> $credentialIds These are the credentials that will be used for the workflow calls. By default, all the credentials are available for use in the call but you can provide a subset using this.
     */
    #[JsonProperty('credentialIds'), ArrayType(['string'])]
    public ?array $credentialIds;

    /**
     * @var ?KeypadInputPlan $keypadInputPlan This is the plan for keypad input handling during workflow calls.
     */
    #[JsonProperty('keypadInputPlan')]
    public ?KeypadInputPlan $keypadInputPlan;

    /**
     * This is the message that the assistant will say if the call is forwarded to voicemail.
     *
     * If unspecified, it will hang up.
     *
     * @var ?string $voicemailMessage
     */
    #[JsonProperty('voicemailMessage')]
    public ?string $voicemailMessage;

    /**
     * @param array{
     *   nodes: array<WorkflowUserEditableNodesItem>,
     *   name: string,
     *   edges: array<Edge>,
     *   model?: ?WorkflowUserEditableModel,
     *   transcriber?: ?WorkflowUserEditableTranscriber,
     *   voice?: ?WorkflowUserEditableVoice,
     *   observabilityPlan?: ?LangfuseObservabilityPlan,
     *   backgroundSound?: (
     *    value-of<WorkflowUserEditableBackgroundSoundZero>
     *   |string
     * )|null,
     *   hooks?: ?array<(
     *    CallHookCallEnding
     *   |CallHookAssistantSpeechInterrupted
     *   |CallHookCustomerSpeechInterrupted
     *   |CallHookCustomerSpeechTimeout
     * )>,
     *   credentials?: ?array<WorkflowUserEditableCredentialsItem>,
     *   voicemailDetection?: ?WorkflowUserEditableVoicemailDetection,
     *   maxDurationSeconds?: ?float,
     *   globalPrompt?: ?string,
     *   server?: ?Server,
     *   compliancePlan?: ?CompliancePlan,
     *   analysisPlan?: ?AnalysisPlan,
     *   artifactPlan?: ?ArtifactPlan,
     *   startSpeakingPlan?: ?StartSpeakingPlan,
     *   stopSpeakingPlan?: ?StopSpeakingPlan,
     *   monitorPlan?: ?MonitorPlan,
     *   backgroundSpeechDenoisingPlan?: ?BackgroundSpeechDenoisingPlan,
     *   credentialIds?: ?array<string>,
     *   keypadInputPlan?: ?KeypadInputPlan,
     *   voicemailMessage?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->nodes = $values['nodes'];
        $this->model = $values['model'] ?? null;
        $this->transcriber = $values['transcriber'] ?? null;
        $this->voice = $values['voice'] ?? null;
        $this->observabilityPlan = $values['observabilityPlan'] ?? null;
        $this->backgroundSound = $values['backgroundSound'] ?? null;
        $this->hooks = $values['hooks'] ?? null;
        $this->credentials = $values['credentials'] ?? null;
        $this->voicemailDetection = $values['voicemailDetection'] ?? null;
        $this->maxDurationSeconds = $values['maxDurationSeconds'] ?? null;
        $this->name = $values['name'];
        $this->edges = $values['edges'];
        $this->globalPrompt = $values['globalPrompt'] ?? null;
        $this->server = $values['server'] ?? null;
        $this->compliancePlan = $values['compliancePlan'] ?? null;
        $this->analysisPlan = $values['analysisPlan'] ?? null;
        $this->artifactPlan = $values['artifactPlan'] ?? null;
        $this->startSpeakingPlan = $values['startSpeakingPlan'] ?? null;
        $this->stopSpeakingPlan = $values['stopSpeakingPlan'] ?? null;
        $this->monitorPlan = $values['monitorPlan'] ?? null;
        $this->backgroundSpeechDenoisingPlan = $values['backgroundSpeechDenoisingPlan'] ?? null;
        $this->credentialIds = $values['credentialIds'] ?? null;
        $this->keypadInputPlan = $values['keypadInputPlan'] ?? null;
        $this->voicemailMessage = $values['voicemailMessage'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
