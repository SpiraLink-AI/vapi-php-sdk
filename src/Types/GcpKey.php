<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class GcpKey extends JsonSerializableType
{
    /**
     * @var string $type This is the type of the key. Most likely, this is "service_account".
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var string $projectId This is the ID of the Google Cloud project associated with this key.
     */
    #[JsonProperty('projectId')]
    public string $projectId;

    /**
     * @var string $privateKeyId This is the unique identifier for the private key.
     */
    #[JsonProperty('privateKeyId')]
    public string $privateKeyId;

    /**
     * This is the private key in PEM format.
     *
     * Note: This is not returned in the API.
     *
     * @var string $privateKey
     */
    #[JsonProperty('privateKey')]
    public string $privateKey;

    /**
     * @var string $clientEmail This is the email address associated with the service account.
     */
    #[JsonProperty('clientEmail')]
    public string $clientEmail;

    /**
     * @var string $clientId This is the unique identifier for the client.
     */
    #[JsonProperty('clientId')]
    public string $clientId;

    /**
     * @var string $authUri This is the URI for the auth provider's authorization endpoint.
     */
    #[JsonProperty('authUri')]
    public string $authUri;

    /**
     * @var string $tokenUri This is the URI for the auth provider's token endpoint.
     */
    #[JsonProperty('tokenUri')]
    public string $tokenUri;

    /**
     * @var string $authProviderX509CertUrl This is the URL of the public x509 certificate for the auth provider.
     */
    #[JsonProperty('authProviderX509CertUrl')]
    public string $authProviderX509CertUrl;

    /**
     * @var string $clientX509CertUrl This is the URL of the public x509 certificate for the client.
     */
    #[JsonProperty('clientX509CertUrl')]
    public string $clientX509CertUrl;

    /**
     * @var string $universeDomain This is the domain associated with the universe this service account belongs to.
     */
    #[JsonProperty('universeDomain')]
    public string $universeDomain;

    /**
     * @param array{
     *   type: string,
     *   projectId: string,
     *   privateKeyId: string,
     *   privateKey: string,
     *   clientEmail: string,
     *   clientId: string,
     *   authUri: string,
     *   tokenUri: string,
     *   authProviderX509CertUrl: string,
     *   clientX509CertUrl: string,
     *   universeDomain: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->type = $values['type'];
        $this->projectId = $values['projectId'];
        $this->privateKeyId = $values['privateKeyId'];
        $this->privateKey = $values['privateKey'];
        $this->clientEmail = $values['clientEmail'];
        $this->clientId = $values['clientId'];
        $this->authUri = $values['authUri'];
        $this->tokenUri = $values['tokenUri'];
        $this->authProviderX509CertUrl = $values['authProviderX509CertUrl'];
        $this->clientX509CertUrl = $values['clientX509CertUrl'];
        $this->universeDomain = $values['universeDomain'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
