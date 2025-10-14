<?php declare(strict_types=1);

namespace Vapi\Types;

enum SupabaseBucketPlanRegion: string
{
    case UsWest1 = 'us-west-1';
    case UsEast1 = 'us-east-1';
    case UsEast2 = 'us-east-2';
    case CaCentral1 = 'ca-central-1';
    case EuWest1 = 'eu-west-1';
    case EuWest2 = 'eu-west-2';
    case EuWest3 = 'eu-west-3';
    case EuCentral1 = 'eu-central-1';
    case EuCentral2 = 'eu-central-2';
    case EuNorth1 = 'eu-north-1';
    case ApSouth1 = 'ap-south-1';
    case ApSoutheast1 = 'ap-southeast-1';
    case ApNortheast1 = 'ap-northeast-1';
    case ApNortheast2 = 'ap-northeast-2';
    case ApSoutheast2 = 'ap-southeast-2';
    case SaEast1 = 'sa-east-1';
}
