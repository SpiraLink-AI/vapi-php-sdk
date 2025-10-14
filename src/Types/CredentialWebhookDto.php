<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class CredentialWebhookDto extends JsonSerializableType
{
    /**
     * @var value-of<CredentialWebhookDtoType> $type
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var value-of<CredentialWebhookDtoOperation> $operation
     */
    #[JsonProperty('operation')]
    public string $operation;

    /**
     * @var string $from
     */
    #[JsonProperty('from')]
    public string $from;

    /**
     * @var string $connectionId
     */
    #[JsonProperty('connectionId')]
    public string $connectionId;

    /**
     * @var value-of<CredentialWebhookDtoAuthMode> $authMode
     */
    #[JsonProperty('authMode')]
    public string $authMode;

    /**
     * @var string $providerConfigKey
     */
    #[JsonProperty('providerConfigKey')]
    public string $providerConfigKey;

    /**
     * @var string $provider
     */
    #[JsonProperty('provider')]
    public string $provider;

    /**
     * @var string $environment
     */
    #[JsonProperty('environment')]
    public string $environment;

    /**
     * @var bool $success
     */
    #[JsonProperty('success')]
    public bool $success;

    /**
     * @var CredentialEndUser $endUser
     */
    #[JsonProperty('endUser')]
    public CredentialEndUser $endUser;

    /**
     * @var ?CredentialSessionError $error
     */
    #[JsonProperty('error')]
    public ?CredentialSessionError $error;

    /**
     * @param array{
     *   type: value-of<CredentialWebhookDtoType>,
     *   operation: value-of<CredentialWebhookDtoOperation>,
     *   from: string,
     *   connectionId: string,
     *   authMode: value-of<CredentialWebhookDtoAuthMode>,
     *   providerConfigKey: string,
     *   provider: string,
     *   environment: string,
     *   success: bool,
     *   endUser: CredentialEndUser,
     *   error?: ?CredentialSessionError,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->type = $values['type'];
        $this->operation = $values['operation'];
        $this->from = $values['from'];
        $this->connectionId = $values['connectionId'];
        $this->authMode = $values['authMode'];
        $this->providerConfigKey = $values['providerConfigKey'];
        $this->provider = $values['provider'];
        $this->environment = $values['environment'];
        $this->success = $values['success'];
        $this->endUser = $values['endUser'];
        $this->error = $values['error'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
