<?php declare(strict_types=1);

namespace Vapi\Types;

use DateTime;
use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\Date;

final class GetEvalRunPaginatedDto extends JsonSerializableType
{
    /**
     * @var ?string $id
     */
    #[JsonProperty('id')]
    public ?string $id;

    /**
     * @var ?float $page This is the page number to return. Defaults to 1.
     */
    #[JsonProperty('page')]
    public ?float $page;

    /**
     * @var ?value-of<GetEvalRunPaginatedDtoSortOrder> $sortOrder This is the sort order for pagination. Defaults to 'DESC'.
     */
    #[JsonProperty('sortOrder')]
    public ?string $sortOrder;

    /**
     * @var ?float $limit This is the maximum number of items to return. Defaults to 100.
     */
    #[JsonProperty('limit')]
    public ?float $limit;

    /**
     * @var ?DateTime $createdAtGt This will return items where the createdAt is greater than the specified value.
     */
    #[JsonProperty('createdAtGt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $createdAtGt;

    /**
     * @var ?DateTime $createdAtLt This will return items where the createdAt is less than the specified value.
     */
    #[JsonProperty('createdAtLt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $createdAtLt;

    /**
     * @var ?DateTime $createdAtGe This will return items where the createdAt is greater than or equal to the specified value.
     */
    #[JsonProperty('createdAtGe'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $createdAtGe;

    /**
     * @var ?DateTime $createdAtLe This will return items where the createdAt is less than or equal to the specified value.
     */
    #[JsonProperty('createdAtLe'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $createdAtLe;

    /**
     * @var ?DateTime $updatedAtGt This will return items where the updatedAt is greater than the specified value.
     */
    #[JsonProperty('updatedAtGt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $updatedAtGt;

    /**
     * @var ?DateTime $updatedAtLt This will return items where the updatedAt is less than the specified value.
     */
    #[JsonProperty('updatedAtLt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $updatedAtLt;

    /**
     * @var ?DateTime $updatedAtGe This will return items where the updatedAt is greater than or equal to the specified value.
     */
    #[JsonProperty('updatedAtGe'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $updatedAtGe;

    /**
     * @var ?DateTime $updatedAtLe This will return items where the updatedAt is less than or equal to the specified value.
     */
    #[JsonProperty('updatedAtLe'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $updatedAtLe;

    /**
     * @param array{
     *   id?: ?string,
     *   page?: ?float,
     *   sortOrder?: ?value-of<GetEvalRunPaginatedDtoSortOrder>,
     *   limit?: ?float,
     *   createdAtGt?: ?DateTime,
     *   createdAtLt?: ?DateTime,
     *   createdAtGe?: ?DateTime,
     *   createdAtLe?: ?DateTime,
     *   updatedAtGt?: ?DateTime,
     *   updatedAtLt?: ?DateTime,
     *   updatedAtGe?: ?DateTime,
     *   updatedAtLe?: ?DateTime,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->id = $values['id'] ?? null;
        $this->page = $values['page'] ?? null;
        $this->sortOrder = $values['sortOrder'] ?? null;
        $this->limit = $values['limit'] ?? null;
        $this->createdAtGt = $values['createdAtGt'] ?? null;
        $this->createdAtLt = $values['createdAtLt'] ?? null;
        $this->createdAtGe = $values['createdAtGe'] ?? null;
        $this->createdAtLe = $values['createdAtLe'] ?? null;
        $this->updatedAtGt = $values['updatedAtGt'] ?? null;
        $this->updatedAtLt = $values['updatedAtLt'] ?? null;
        $this->updatedAtGe = $values['updatedAtGe'] ?? null;
        $this->updatedAtLe = $values['updatedAtLe'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
