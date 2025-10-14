<?php declare(strict_types=1);

namespace Vapi\PhoneNumbers\Types;

enum PhoneNumbersListRequestSortOrder: string
{
    case Asc = 'ASC';
    case Desc = 'DESC';
}
