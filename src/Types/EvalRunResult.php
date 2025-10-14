<?php declare(strict_types=1);

namespace Vapi\Types;

use DateTime;
use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;
use Vapi\Core\Types\Date;

final class EvalRunResult extends JsonSerializableType
{
    /**
     * This is the status of the eval run result.
     * The status is only 'pass' or 'fail' for an eval run result.
     * Currently, An eval is considered `pass` only if all the Assistant Judge messages are evaluated to pass.
     *
     * @var value-of<EvalRunResultStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * This is the messages of the eval run result.
     * It contains the user/system messages
     *
     * @var array<EvalRunResultMessagesItem> $messages
     */
    #[JsonProperty('messages'), ArrayType([EvalRunResultMessagesItem::class])]
    public array $messages;

    /**
     * @var DateTime $startedAt This is the start time of the eval run result.
     */
    #[JsonProperty('startedAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $startedAt;

    /**
     * @var DateTime $endedAt This is the end time of the eval run result.
     */
    #[JsonProperty('endedAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $endedAt;

    /**
     * @param array{
     *   status: value-of<EvalRunResultStatus>,
     *   messages: array<EvalRunResultMessagesItem>,
     *   startedAt: DateTime,
     *   endedAt: DateTime,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->status = $values['status'];
        $this->messages = $values['messages'];
        $this->startedAt = $values['startedAt'];
        $this->endedAt = $values['endedAt'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
