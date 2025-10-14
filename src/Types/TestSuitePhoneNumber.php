<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class TestSuitePhoneNumber extends JsonSerializableType
{
    /**
     * @var 'test-suite' $provider This is the provider of the phone number.
     */
    #[JsonProperty('provider')]
    public string $provider;

    /**
     * @var string $number This is the phone number that is being tested.
     */
    #[JsonProperty('number')]
    public string $number;

    /**
     * @param array{
     *   provider: 'test-suite',
     *   number: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->provider = $values['provider'];
        $this->number = $values['number'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
