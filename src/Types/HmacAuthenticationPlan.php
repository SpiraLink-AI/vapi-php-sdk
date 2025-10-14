<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class HmacAuthenticationPlan extends JsonSerializableType
{
    /**
     * @var string $secretKey This is the HMAC secret key used to sign requests.
     */
    #[JsonProperty('secretKey')]
    public string $secretKey;

    /**
     * @var value-of<HmacAuthenticationPlanAlgorithm> $algorithm This is the HMAC algorithm to use for signing.
     */
    #[JsonProperty('algorithm')]
    public string $algorithm;

    /**
     * @var ?string $signatureHeader This is the header name where the signature will be sent. Defaults to 'x-signature'.
     */
    #[JsonProperty('signatureHeader')]
    public ?string $signatureHeader;

    /**
     * @var ?string $timestampHeader This is the header name where the timestamp will be sent. Defaults to 'x-timestamp'.
     */
    #[JsonProperty('timestampHeader')]
    public ?string $timestampHeader;

    /**
     * @var ?string $signaturePrefix This is the prefix for the signature. For example, 'sha256=' for GitHub-style signatures.
     */
    #[JsonProperty('signaturePrefix')]
    public ?string $signaturePrefix;

    /**
     * @var ?bool $includeTimestamp Whether to include a timestamp in the signature payload. Defaults to true.
     */
    #[JsonProperty('includeTimestamp')]
    public ?bool $includeTimestamp;

    /**
     * @var ?string $payloadFormat Custom payload format. Use {body} for request body, {timestamp} for timestamp, {method} for HTTP method, {url} for URL, {svix-id} for unique message ID. Defaults to '{timestamp}.{body}'.
     */
    #[JsonProperty('payloadFormat')]
    public ?string $payloadFormat;

    /**
     * @var ?string $messageIdHeader This is the header name where the unique message ID will be sent. Used for Svix-style webhooks.
     */
    #[JsonProperty('messageIdHeader')]
    public ?string $messageIdHeader;

    /**
     * @var ?value-of<HmacAuthenticationPlanSignatureEncoding> $signatureEncoding The encoding format for the signature. Defaults to 'hex'.
     */
    #[JsonProperty('signatureEncoding')]
    public ?string $signatureEncoding;

    /**
     * @var ?bool $secretIsBase64 Whether the secret key is base64-encoded and should be decoded before use. Defaults to false.
     */
    #[JsonProperty('secretIsBase64')]
    public ?bool $secretIsBase64;

    /**
     * @param array{
     *   secretKey: string,
     *   algorithm: value-of<HmacAuthenticationPlanAlgorithm>,
     *   signatureHeader?: ?string,
     *   timestampHeader?: ?string,
     *   signaturePrefix?: ?string,
     *   includeTimestamp?: ?bool,
     *   payloadFormat?: ?string,
     *   messageIdHeader?: ?string,
     *   signatureEncoding?: ?value-of<HmacAuthenticationPlanSignatureEncoding>,
     *   secretIsBase64?: ?bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->secretKey = $values['secretKey'];
        $this->algorithm = $values['algorithm'];
        $this->signatureHeader = $values['signatureHeader'] ?? null;
        $this->timestampHeader = $values['timestampHeader'] ?? null;
        $this->signaturePrefix = $values['signaturePrefix'] ?? null;
        $this->includeTimestamp = $values['includeTimestamp'] ?? null;
        $this->payloadFormat = $values['payloadFormat'] ?? null;
        $this->messageIdHeader = $values['messageIdHeader'] ?? null;
        $this->signatureEncoding = $values['signatureEncoding'] ?? null;
        $this->secretIsBase64 = $values['secretIsBase64'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
