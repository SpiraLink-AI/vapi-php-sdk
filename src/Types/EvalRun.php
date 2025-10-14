<?php declare(strict_types=1);

namespace Vapi\Types;

use DateTime;
use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;
use Vapi\Core\Types\Date;

final class EvalRun extends JsonSerializableType
{
    /**
     * This is the status of the eval run. When an eval run is created, the status is 'running'.
     * When the eval run is completed, the status is 'ended'.
     *
     * @var value-of<EvalRunStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * This is the reason for the eval run to end.
     * When the eval run is completed normally i.e end of mock conversation, the status is 'mockConversation.done'.
     * When the eval fails due to an error like Chat error or incorrect configuration, the status is 'error'.
     * When the eval runs for too long, due to model issues or tool call issues, the status is 'timeout'.
     * When the eval run is cancelled by the user, the status is 'cancelled'.
     * When the eval run is cancelled by Vapi for any reason, the status is 'aborted'.
     *
     * @var value-of<EvalRunEndedReason> $endedReason
     */
    #[JsonProperty('endedReason')]
    public string $endedReason;

    /**
     * @var ?CreateEvalDto $eval This is the transient eval that will be run
     */
    #[JsonProperty('eval')]
    public ?CreateEvalDto $eval;

    /**
     * @var EvalRunTarget $target This is the target that will be run against the eval
     */
    #[JsonProperty('target')]
    public EvalRunTarget $target;

    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $orgId
     */
    #[JsonProperty('orgId')]
    public string $orgId;

    /**
     * @var DateTime $createdAt
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $createdAt;

    /**
     * @var DateTime $startedAt
     */
    #[JsonProperty('startedAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $startedAt;

    /**
     * @var DateTime $endedAt
     */
    #[JsonProperty('endedAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $endedAt;

    /**
     * @var ?string $endedMessage This is the ended message when the eval run ended for any reason apart from mockConversation.done
     */
    #[JsonProperty('endedMessage')]
    public ?string $endedMessage;

    /**
     * This is the results of the eval or suite run.
     * The array will have a single item for an eval run, and multiple items each corresponding to the an eval in a suite run in the same order as the evals in the suite.
     *
     * @var array<EvalRunResult> $results
     */
    #[JsonProperty('results'), ArrayType([EvalRunResult::class])]
    public array $results;

    /**
     * This is the type of the run.
     * Currently it is fixed to `eval`.
     *
     * @var 'eval' $type
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var ?string $evalId This is the id of the eval that will be run.
     */
    #[JsonProperty('evalId')]
    public ?string $evalId;

    /**
     * @param array{
     *   status: value-of<EvalRunStatus>,
     *   endedReason: value-of<EvalRunEndedReason>,
     *   target: EvalRunTarget,
     *   id: string,
     *   orgId: string,
     *   createdAt: DateTime,
     *   startedAt: DateTime,
     *   endedAt: DateTime,
     *   results: array<EvalRunResult>,
     *   type: 'eval',
     *   eval?: ?CreateEvalDto,
     *   endedMessage?: ?string,
     *   evalId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->status = $values['status'];
        $this->endedReason = $values['endedReason'];
        $this->eval = $values['eval'] ?? null;
        $this->target = $values['target'];
        $this->id = $values['id'];
        $this->orgId = $values['orgId'];
        $this->createdAt = $values['createdAt'];
        $this->startedAt = $values['startedAt'];
        $this->endedAt = $values['endedAt'];
        $this->endedMessage = $values['endedMessage'] ?? null;
        $this->results = $values['results'];
        $this->type = $values['type'];
        $this->evalId = $values['evalId'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
