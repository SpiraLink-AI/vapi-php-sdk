<?php declare(strict_types=1);

namespace Vapi\Calls\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class CallsListPaginatedRequestStructuredOutputsValue extends JsonSerializableType
{
    /**
     * @var ?string $eq Equal to
     */
    #[JsonProperty('eq')]
    public ?string $eq;

    /**
     * @var ?string $neq Not equal to
     */
    #[JsonProperty('neq')]
    public ?string $neq;

    /**
     * @var ?string $gt Greater than
     */
    #[JsonProperty('gt')]
    public ?string $gt;

    /**
     * @var ?string $gte Greater than or equal to
     */
    #[JsonProperty('gte')]
    public ?string $gte;

    /**
     * @var ?string $lt Less than
     */
    #[JsonProperty('lt')]
    public ?string $lt;

    /**
     * @var ?string $lte Less than or equal to
     */
    #[JsonProperty('lte')]
    public ?string $lte;

    /**
     * @var ?string $contains Contains
     */
    #[JsonProperty('contains')]
    public ?string $contains;

    /**
     * @var ?string $notContains Not contains
     */
    #[JsonProperty('notContains')]
    public ?string $notContains;

    /**
     * @param array{
     *   eq?: ?string,
     *   neq?: ?string,
     *   gt?: ?string,
     *   gte?: ?string,
     *   lt?: ?string,
     *   lte?: ?string,
     *   contains?: ?string,
     *   notContains?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->eq = $values['eq'] ?? null;
        $this->neq = $values['neq'] ?? null;
        $this->gt = $values['gt'] ?? null;
        $this->gte = $values['gte'] ?? null;
        $this->lt = $values['lt'] ?? null;
        $this->lte = $values['lte'] ?? null;
        $this->contains = $values['contains'] ?? null;
        $this->notContains = $values['notContains'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
