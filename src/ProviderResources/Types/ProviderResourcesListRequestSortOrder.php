<?php declare(strict_types=1);

namespace Vapi\ProviderResources\Types;

enum ProviderResourcesListRequestSortOrder: string
{
    case Asc = 'ASC';
    case Desc = 'DESC';
}
