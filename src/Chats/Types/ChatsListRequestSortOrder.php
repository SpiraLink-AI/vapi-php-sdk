<?php declare(strict_types=1);

namespace Vapi\Chats\Types;

enum ChatsListRequestSortOrder: string
{
    case Asc = 'ASC';
    case Desc = 'DESC';
}
