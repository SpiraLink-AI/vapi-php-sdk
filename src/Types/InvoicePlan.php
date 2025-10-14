<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class InvoicePlan extends JsonSerializableType
{
    /**
     * @var ?string $companyName This is the name of the company.
     */
    #[JsonProperty('companyName')]
    public ?string $companyName;

    /**
     * @var ?string $companyAddress This is the address of the company.
     */
    #[JsonProperty('companyAddress')]
    public ?string $companyAddress;

    /**
     * @var ?string $companyTaxId This is the tax ID of the company.
     */
    #[JsonProperty('companyTaxId')]
    public ?string $companyTaxId;

    /**
     * @var ?string $companyEmail This is the preferred invoicing email of the company. If not specified, defaults to the subscription's email.
     */
    #[JsonProperty('companyEmail')]
    public ?string $companyEmail;

    /**
     * @param array{
     *   companyName?: ?string,
     *   companyAddress?: ?string,
     *   companyTaxId?: ?string,
     *   companyEmail?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->companyName = $values['companyName'] ?? null;
        $this->companyAddress = $values['companyAddress'] ?? null;
        $this->companyTaxId = $values['companyTaxId'] ?? null;
        $this->companyEmail = $values['companyEmail'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
