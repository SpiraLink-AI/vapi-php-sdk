<?php declare(strict_types=1);

namespace Vapi\Types;

use Exception;
use Vapi\Core\Json\JsonDecoder;
use Vapi\Core\Json\JsonSerializableType;

/**
 * This is the authentication plan. Supports OAuth2 RFC 6749, HMAC signing, and Bearer authentication.
 */
final class CreateWebhookCredentialDtoAuthenticationPlan extends JsonSerializableType
{
    /**
     * @var (
     *    'oauth2'
     *   |'hmac'
     *   |'bearer'
     *   |'_unknown'
     * ) $type
     */
    public readonly string $type;

    /**
     * @var (
     *    OAuth2AuthenticationPlan
     *   |HmacAuthenticationPlan
     *   |BearerAuthenticationPlan
     *   |mixed
     * ) $value
     */
    public readonly mixed $value;

    /**
     * @param array{
     *   type: (
     *    'oauth2'
     *   |'hmac'
     *   |'bearer'
     *   |'_unknown'
     * ),
     *   value: (
     *    OAuth2AuthenticationPlan
     *   |HmacAuthenticationPlan
     *   |BearerAuthenticationPlan
     *   |mixed
     * ),
     * } $values
     */
    private function __construct(
        array $values,
    ) {
        $this->type = $values['type'];
        $this->value = $values['value'];
    }

    /**
     * @param OAuth2AuthenticationPlan $oauth2
     * @return CreateWebhookCredentialDtoAuthenticationPlan
     */
    public static function oauth2(OAuth2AuthenticationPlan $oauth2): CreateWebhookCredentialDtoAuthenticationPlan
    {
        return new CreateWebhookCredentialDtoAuthenticationPlan([
            'type' => 'oauth2',
            'value' => $oauth2,
        ]);
    }

    /**
     * @param HmacAuthenticationPlan $hmac
     * @return CreateWebhookCredentialDtoAuthenticationPlan
     */
    public static function hmac(HmacAuthenticationPlan $hmac): CreateWebhookCredentialDtoAuthenticationPlan
    {
        return new CreateWebhookCredentialDtoAuthenticationPlan([
            'type' => 'hmac',
            'value' => $hmac,
        ]);
    }

    /**
     * @param BearerAuthenticationPlan $bearer
     * @return CreateWebhookCredentialDtoAuthenticationPlan
     */
    public static function bearer(BearerAuthenticationPlan $bearer): CreateWebhookCredentialDtoAuthenticationPlan
    {
        return new CreateWebhookCredentialDtoAuthenticationPlan([
            'type' => 'bearer',
            'value' => $bearer,
        ]);
    }

    /**
     * @return bool
     */
    public function isOauth2(): bool
    {
        return $this->value instanceof OAuth2AuthenticationPlan && $this->type === 'oauth2';
    }

    /**
     * @return OAuth2AuthenticationPlan
     */
    public function asOauth2(): OAuth2AuthenticationPlan
    {
        if (! ($this->value instanceof OAuth2AuthenticationPlan && $this->type === 'oauth2')) {
            throw new Exception(
                "Expected oauth2; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isHmac(): bool
    {
        return $this->value instanceof HmacAuthenticationPlan && $this->type === 'hmac';
    }

    /**
     * @return HmacAuthenticationPlan
     */
    public function asHmac(): HmacAuthenticationPlan
    {
        if (! ($this->value instanceof HmacAuthenticationPlan && $this->type === 'hmac')) {
            throw new Exception(
                "Expected hmac; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isBearer(): bool
    {
        return $this->value instanceof BearerAuthenticationPlan && $this->type === 'bearer';
    }

    /**
     * @return BearerAuthenticationPlan
     */
    public function asBearer(): BearerAuthenticationPlan
    {
        if (! ($this->value instanceof BearerAuthenticationPlan && $this->type === 'bearer')) {
            throw new Exception(
                "Expected bearer; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }

    /**
     * @return array<mixed>
     */
    public function jsonSerialize(): array
    {
        $result = [];
        $result['type'] = $this->type;

        $base = parent::jsonSerialize();
        $result = array_merge($base, $result);

        switch ($this->type) {
            case 'oauth2':
                $value = $this->asOauth2()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'hmac':
                $value = $this->asHmac()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'bearer':
                $value = $this->asBearer()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case '_unknown':
            default:
                if (is_null($this->value)) {
                    break;
                }
                if ($this->value instanceof JsonSerializableType) {
                    $value = $this->value->jsonSerialize();
                    $result = array_merge($value, $result);
                } elseif (is_array($this->value)) {
                    $result = array_merge($this->value, $result);
                }
        }

        return $result;
    }

    /**
     * @param string $json
     */
    public static function fromJson(string $json): static
    {
        $decodedJson = JsonDecoder::decode($json);
        if (! is_array($decodedJson)) {
            throw new Exception("Unexpected non-array decoded type: " . gettype($decodedJson));
        }

        return self::jsonDeserialize($decodedJson);
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function jsonDeserialize(array $data): static
    {
        $args = [];
        if (! array_key_exists('type', $data)) {
            throw new Exception(
                "JSON data is missing property 'type'",
            );
        }
        $type = $data['type'];
        if (! (is_string($type))) {
            throw new Exception(
                "Expected property 'type' in JSON data to be string, instead received " . get_debug_type($data['type']),
            );
        }

        $args['type'] = $type;
        switch ($type) {
            case 'oauth2':
                $args['value'] = OAuth2AuthenticationPlan::jsonDeserialize($data);
                break;
            case 'hmac':
                $args['value'] = HmacAuthenticationPlan::jsonDeserialize($data);
                break;
            case 'bearer':
                $args['value'] = BearerAuthenticationPlan::jsonDeserialize($data);
                break;
            case '_unknown':
            default:
                $args['type'] = '_unknown';
                $args['value'] = $data;
        }

        // @phpstan-ignore-next-line
        return new static($args);
    }
}
