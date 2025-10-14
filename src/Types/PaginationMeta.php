<?php declare(strict_types=1);

namespace Vapi\Types;

use DateTime;
use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\Date;

final class PaginationMeta extends JsonSerializableType
{
    /**
     * @var float $itemsPerPage
     */
    #[JsonProperty('itemsPerPage')]
    public float $itemsPerPage;

    /**
     * @var float $totalItems
     */
    #[JsonProperty('totalItems')]
    public float $totalItems;

    /**
     * @var float $currentPage
     */
    #[JsonProperty('currentPage')]
    public float $currentPage;

    /**
     * @var ?bool $itemsBeyondRetention
     */
    #[JsonProperty('itemsBeyondRetention')]
    public ?bool $itemsBeyondRetention;

    /**
     * @var ?DateTime $createdAtLe
     */
    #[JsonProperty('createdAtLe'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $createdAtLe;

    /**
     * @var ?DateTime $createdAtGe
     */
    #[JsonProperty('createdAtGe'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $createdAtGe;

    /**
     * @param array{
     *   itemsPerPage: float,
     *   totalItems: float,
     *   currentPage: float,
     *   itemsBeyondRetention?: ?bool,
     *   createdAtLe?: ?DateTime,
     *   createdAtGe?: ?DateTime,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->itemsPerPage = $values['itemsPerPage'];
        $this->totalItems = $values['totalItems'];
        $this->currentPage = $values['currentPage'];
        $this->itemsBeyondRetention = $values['itemsBeyondRetention'] ?? null;
        $this->createdAtLe = $values['createdAtLe'] ?? null;
        $this->createdAtGe = $values['createdAtGe'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
