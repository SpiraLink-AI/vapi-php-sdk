<?php declare(strict_types=1);

namespace Vapi\Types;

enum GetChatPaginatedDtoSortOrder: string
{
    case Asc = 'ASC';
    case Desc = 'DESC';
}
