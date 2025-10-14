<?php declare(strict_types=1);

namespace Vapi\Campaigns\Types;

enum CampaignsListRequestSortOrder: string
{
    case Asc = 'ASC';
    case Desc = 'DESC';
}
