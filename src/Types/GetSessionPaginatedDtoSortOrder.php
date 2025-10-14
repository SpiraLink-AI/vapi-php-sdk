<?php declare(strict_types=1);

namespace Vapi\Types;

enum GetSessionPaginatedDtoSortOrder: string
{
    case Asc = 'ASC';
    case Desc = 'DESC';
}
