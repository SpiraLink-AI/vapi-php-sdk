<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class CallBatchError extends JsonSerializableType
{
    /**
     * @var CreateCustomerDto $customer
     */
    #[JsonProperty('customer')]
    public CreateCustomerDto $customer;

    /**
     * @var string $error
     */
    #[JsonProperty('error')]
    public string $error;

    /**
     * @param array{
     *   customer: CreateCustomerDto,
     *   error: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->customer = $values['customer'];
        $this->error = $values['error'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
