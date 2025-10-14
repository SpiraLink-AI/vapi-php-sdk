<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class ClientMessageWorkflowNodeStarted extends JsonSerializableType
{
    /**
     * @var ?ClientMessageWorkflowNodeStartedPhoneNumber $phoneNumber This is the phone number that the message is associated with.
     */
    #[JsonProperty('phoneNumber')]
    public ?ClientMessageWorkflowNodeStartedPhoneNumber $phoneNumber;

    /**
     * @var 'workflow.node.started' $type This is the type of the message. "workflow.node.started" is sent when the active node changes.
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var ?float $timestamp This is the timestamp of the message.
     */
    #[JsonProperty('timestamp')]
    public ?float $timestamp;

    /**
     * @var ?Call $call This is the call that the message is associated with.
     */
    #[JsonProperty('call')]
    public ?Call $call;

    /**
     * @var ?CreateCustomerDto $customer This is the customer that the message is associated with.
     */
    #[JsonProperty('customer')]
    public ?CreateCustomerDto $customer;

    /**
     * @var ?CreateAssistantDto $assistant This is the assistant that the message is associated with.
     */
    #[JsonProperty('assistant')]
    public ?CreateAssistantDto $assistant;

    /**
     * @var array<string, mixed> $node This is the active node.
     */
    #[JsonProperty('node'), ArrayType(['string' => 'mixed'])]
    public array $node;

    /**
     * @param array{
     *   type: 'workflow.node.started',
     *   node: array<string, mixed>,
     *   phoneNumber?: ?ClientMessageWorkflowNodeStartedPhoneNumber,
     *   timestamp?: ?float,
     *   call?: ?Call,
     *   customer?: ?CreateCustomerDto,
     *   assistant?: ?CreateAssistantDto,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->phoneNumber = $values['phoneNumber'] ?? null;
        $this->type = $values['type'];
        $this->timestamp = $values['timestamp'] ?? null;
        $this->call = $values['call'] ?? null;
        $this->customer = $values['customer'] ?? null;
        $this->assistant = $values['assistant'] ?? null;
        $this->node = $values['node'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
