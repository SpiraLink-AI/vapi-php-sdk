<?php declare(strict_types=1);

namespace Vapi\Types;

enum GetEvalRunPaginatedDtoSortOrder: string
{
    case Asc = 'ASC';
    case Desc = 'DESC';
}
