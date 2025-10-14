<?php declare(strict_types=1);

namespace Vapi\Calls\Types;

enum CallsListPaginatedRequestSortOrder: string
{
    case Asc = 'ASC';
    case Desc = 'DESC';
}
