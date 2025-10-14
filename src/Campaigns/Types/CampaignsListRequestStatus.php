<?php declare(strict_types=1);

namespace Vapi\Campaigns\Types;

enum CampaignsListRequestStatus: string
{
    case Scheduled = 'scheduled';
    case InProgress = 'in-progress';
    case Ended = 'ended';
}
