<?php declare(strict_types=1);

namespace Vapi\Types;

enum CampaignEndedReason: string
{
    case CampaignScheduledEndedByUser = 'campaign.scheduled.ended-by-user';
    case CampaignInProgressEndedByUser = 'campaign.in-progress.ended-by-user';
    case CampaignEndedSuccess = 'campaign.ended.success';
}
