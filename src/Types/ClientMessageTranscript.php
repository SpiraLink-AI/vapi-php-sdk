<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class ClientMessageTranscript extends JsonSerializableType
{
    /**
     * @var ?ClientMessageTranscriptPhoneNumber $phoneNumber This is the phone number that the message is associated with.
     */
    #[JsonProperty('phoneNumber')]
    public ?ClientMessageTranscriptPhoneNumber $phoneNumber;

    /**
     * @var value-of<ClientMessageTranscriptType> $type This is the type of the message. "transcript" is sent as transcriber outputs partial or final transcript.
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
     * @var value-of<ClientMessageTranscriptRole> $role This is the role for which the transcript is for.
     */
    #[JsonProperty('role')]
    public string $role;

    /**
     * @var value-of<ClientMessageTranscriptTranscriptType> $transcriptType This is the type of the transcript.
     */
    #[JsonProperty('transcriptType')]
    public string $transcriptType;

    /**
     * @var string $transcript This is the transcript content.
     */
    #[JsonProperty('transcript')]
    public string $transcript;

    /**
     * @var ?bool $isFiltered Indicates if the transcript was filtered for security reasons.
     */
    #[JsonProperty('isFiltered')]
    public ?bool $isFiltered;

    /**
     * @var ?array<string> $detectedThreats List of detected security threats if the transcript was filtered.
     */
    #[JsonProperty('detectedThreats'), ArrayType(['string'])]
    public ?array $detectedThreats;

    /**
     * @var ?string $originalTranscript The original transcript before filtering (only included if content was filtered).
     */
    #[JsonProperty('originalTranscript')]
    public ?string $originalTranscript;

    /**
     * @param array{
     *   type: value-of<ClientMessageTranscriptType>,
     *   role: value-of<ClientMessageTranscriptRole>,
     *   transcriptType: value-of<ClientMessageTranscriptTranscriptType>,
     *   transcript: string,
     *   phoneNumber?: ?ClientMessageTranscriptPhoneNumber,
     *   timestamp?: ?float,
     *   call?: ?Call,
     *   customer?: ?CreateCustomerDto,
     *   assistant?: ?CreateAssistantDto,
     *   isFiltered?: ?bool,
     *   detectedThreats?: ?array<string>,
     *   originalTranscript?: ?string,
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
        $this->role = $values['role'];
        $this->transcriptType = $values['transcriptType'];
        $this->transcript = $values['transcript'];
        $this->isFiltered = $values['isFiltered'] ?? null;
        $this->detectedThreats = $values['detectedThreats'] ?? null;
        $this->originalTranscript = $values['originalTranscript'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
