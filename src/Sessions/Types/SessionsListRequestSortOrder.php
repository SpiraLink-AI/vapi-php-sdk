<?php declare(strict_types=1);

namespace Vapi\Sessions\Types;

enum SessionsListRequestSortOrder: string
{
    case Asc = 'ASC';
    case Desc = 'DESC';
}
