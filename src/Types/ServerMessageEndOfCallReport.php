<?php declare(strict_types=1);

namespace Vapi\Types;

use DateTime;
use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;
use Vapi\Core\Types\Date;

final class ServerMessageEndOfCallReport extends JsonSerializableType
{
    /**
     * @var ?ServerMessageEndOfCallReportPhoneNumber $phoneNumber This is the phone number that the message is associated with.
     */
    #[JsonProperty('phoneNumber')]
    public ?ServerMessageEndOfCallReportPhoneNumber $phoneNumber;

    /**
     * @var 'end-of-call-report' $type This is the type of the message. "end-of-call-report" is sent when the call ends and post-processing is complete.
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var value-of<ServerMessageEndOfCallReportEndedReason> $endedReason This is the reason the call ended. This can also be found at `call.endedReason` on GET /call/:id.
     */
    #[JsonProperty('endedReason')]
    public string $endedReason;

    /**
     * @var ?float $cost This is the cost of the call in USD. This can also be found at `call.cost` on GET /call/:id.
     */
    #[JsonProperty('cost')]
    public ?float $cost;

    /**
     * @var ?array<ServerMessageEndOfCallReportCostsItem> $costs These are the costs of individual components of the call in USD. This can also be found at `call.costs` on GET /call/:id.
     */
    #[JsonProperty('costs'), ArrayType([ServerMessageEndOfCallReportCostsItem::class])]
    public ?array $costs;

    /**
     * @var ?float $timestamp This is the timestamp of the message.
     */
    #[JsonProperty('timestamp')]
    public ?float $timestamp;

    /**
     * @var Artifact $artifact These are the artifacts from the call. This can also be found at `call.artifact` on GET /call/:id.
     */
    #[JsonProperty('artifact')]
    public Artifact $artifact;

    /**
     * @var ?CreateAssistantDto $assistant This is the assistant that the message is associated with.
     */
    #[JsonProperty('assistant')]
    public ?CreateAssistantDto $assistant;

    /**
     * @var ?CreateCustomerDto $customer This is the customer that the message is associated with.
     */
    #[JsonProperty('customer')]
    public ?CreateCustomerDto $customer;

    /**
     * @var ?Call $call This is the call that the message is associated with.
     */
    #[JsonProperty('call')]
    public ?Call $call;

    /**
     * @var ?Chat $chat This is the chat object.
     */
    #[JsonProperty('chat')]
    public ?Chat $chat;

    /**
     * @var Analysis $analysis This is the analysis of the call. This can also be found at `call.analysis` on GET /call/:id.
     */
    #[JsonProperty('analysis')]
    public Analysis $analysis;

    /**
     * @var ?DateTime $startedAt This is the ISO 8601 date-time string of when the call started. This can also be found at `call.startedAt` on GET /call/:id.
     */
    #[JsonProperty('startedAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $startedAt;

    /**
     * @var ?DateTime $endedAt This is the ISO 8601 date-time string of when the call ended. This can also be found at `call.endedAt` on GET /call/:id.
     */
    #[JsonProperty('endedAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $endedAt;

    /**
     * @var ?Compliance $compliance This is the compliance result of the call. This can also be found at `call.compliance` on GET /call/:id.
     */
    #[JsonProperty('compliance')]
    public ?Compliance $compliance;

    /**
     * @param array{
     *   type: 'end-of-call-report',
     *   endedReason: value-of<ServerMessageEndOfCallReportEndedReason>,
     *   artifact: Artifact,
     *   analysis: Analysis,
     *   phoneNumber?: ?ServerMessageEndOfCallReportPhoneNumber,
     *   cost?: ?float,
     *   costs?: ?array<ServerMessageEndOfCallReportCostsItem>,
     *   timestamp?: ?float,
     *   assistant?: ?CreateAssistantDto,
     *   customer?: ?CreateCustomerDto,
     *   call?: ?Call,
     *   chat?: ?Chat,
     *   startedAt?: ?DateTime,
     *   endedAt?: ?DateTime,
     *   compliance?: ?Compliance,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->phoneNumber = $values['phoneNumber'] ?? null;
        $this->type = $values['type'];
        $this->endedReason = $values['endedReason'];
        $this->cost = $values['cost'] ?? null;
        $this->costs = $values['costs'] ?? null;
        $this->timestamp = $values['timestamp'] ?? null;
        $this->artifact = $values['artifact'];
        $this->assistant = $values['assistant'] ?? null;
        $this->customer = $values['customer'] ?? null;
        $this->call = $values['call'] ?? null;
        $this->chat = $values['chat'] ?? null;
        $this->analysis = $values['analysis'];
        $this->startedAt = $values['startedAt'] ?? null;
        $this->endedAt = $values['endedAt'] ?? null;
        $this->compliance = $values['compliance'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
