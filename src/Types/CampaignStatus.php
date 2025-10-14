<?php declare(strict_types=1);

namespace Vapi\Types;

enum CampaignStatus: string
{
    case Scheduled = 'scheduled';
    case InProgress = 'in-progress';
    case Ended = 'ended';
}
