<?php declare(strict_types=1);

namespace Vapi\Types;

use DateTime;
use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;
use Vapi\Core\Types\Date;
use Vapi\Core\Types\Union;

final class Session extends JsonSerializableType
{
    /**
     * @var string $id This is the unique identifier for the session.
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $orgId This is the unique identifier for the organization that owns this session.
     */
    #[JsonProperty('orgId')]
    public string $orgId;

    /**
     * @var DateTime $createdAt This is the ISO 8601 timestamp indicating when the session was created.
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $createdAt;

    /**
     * @var DateTime $updatedAt This is the ISO 8601 timestamp indicating when the session was last updated.
     */
    #[JsonProperty('updatedAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $updatedAt;

    /**
     * @var ?string $name This is a user-defined name for the session. Maximum length is 40 characters.
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?value-of<SessionStatus> $status This is the current status of the session. Can be either 'active' or 'completed'.
     */
    #[JsonProperty('status')]
    public ?string $status;

    /**
     * @var ?float $expirationSeconds Session expiration time in seconds. Defaults to 24 hours (86400 seconds) if not set.
     */
    #[JsonProperty('expirationSeconds')]
    public ?float $expirationSeconds;

    /**
     * @var ?string $assistantId This is the ID of the assistant associated with this session. Use this when referencing an existing assistant.
     */
    #[JsonProperty('assistantId')]
    public ?string $assistantId;

    /**
     * This is the assistant configuration for this session. Use this when creating a new assistant configuration.
     * If assistantId is provided, this will be ignored.
     *
     * @var ?CreateAssistantDto $assistant
     */
    #[JsonProperty('assistant')]
    public ?CreateAssistantDto $assistant;

    /**
     * @var ?string $squadId This is the squad ID associated with this session. Use this when referencing an existing squad.
     */
    #[JsonProperty('squadId')]
    public ?string $squadId;

    /**
     * This is the squad configuration for this session. Use this when creating a new squad configuration.
     * If squadId is provided, this will be ignored.
     *
     * @var ?CreateSquadDto $squad
     */
    #[JsonProperty('squad')]
    public ?CreateSquadDto $squad;

    /**
     * @var ?array<(
     *    SystemMessage
     *   |UserMessage
     *   |AssistantMessage
     *   |ToolMessage
     *   |DeveloperMessage
     * )> $messages This is an array of chat messages in the session.
     */
    #[JsonProperty('messages'), ArrayType([new Union(SystemMessage::class, UserMessage::class, AssistantMessage::class, ToolMessage::class, DeveloperMessage::class)])]
    public ?array $messages;

    /**
     * @var ?CreateCustomerDto $customer This is the customer information associated with this session.
     */
    #[JsonProperty('customer')]
    public ?CreateCustomerDto $customer;

    /**
     * @var ?string $phoneNumberId This is the ID of the phone number associated with this session.
     */
    #[JsonProperty('phoneNumberId')]
    public ?string $phoneNumberId;

    /**
     * @var ?ImportTwilioPhoneNumberDto $phoneNumber This is the phone number configuration for this session.
     */
    #[JsonProperty('phoneNumber')]
    public ?ImportTwilioPhoneNumberDto $phoneNumber;

    /**
     * These are the artifacts that were extracted from the session messages.
     * They are only available after the session has completed.
     * The artifact plan from the assistant or active assistant of squad is used to generate the artifact.
     * Currently the only supported fields of assistant artifact plan are:
     * - structuredOutputIds
     *
     * @var ?Artifact $artifact
     */
    #[JsonProperty('artifact')]
    public ?Artifact $artifact;

    /**
     * @param array{
     *   id: string,
     *   orgId: string,
     *   createdAt: DateTime,
     *   updatedAt: DateTime,
     *   name?: ?string,
     *   status?: ?value-of<SessionStatus>,
     *   expirationSeconds?: ?float,
     *   assistantId?: ?string,
     *   assistant?: ?CreateAssistantDto,
     *   squadId?: ?string,
     *   squad?: ?CreateSquadDto,
     *   messages?: ?array<(
     *    SystemMessage
     *   |UserMessage
     *   |AssistantMessage
     *   |ToolMessage
     *   |DeveloperMessage
     * )>,
     *   customer?: ?CreateCustomerDto,
     *   phoneNumberId?: ?string,
     *   phoneNumber?: ?ImportTwilioPhoneNumberDto,
     *   artifact?: ?Artifact,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->orgId = $values['orgId'];
        $this->createdAt = $values['createdAt'];
        $this->updatedAt = $values['updatedAt'];
        $this->name = $values['name'] ?? null;
        $this->status = $values['status'] ?? null;
        $this->expirationSeconds = $values['expirationSeconds'] ?? null;
        $this->assistantId = $values['assistantId'] ?? null;
        $this->assistant = $values['assistant'] ?? null;
        $this->squadId = $values['squadId'] ?? null;
        $this->squad = $values['squad'] ?? null;
        $this->messages = $values['messages'] ?? null;
        $this->customer = $values['customer'] ?? null;
        $this->phoneNumberId = $values['phoneNumberId'] ?? null;
        $this->phoneNumber = $values['phoneNumber'] ?? null;
        $this->artifact = $values['artifact'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
