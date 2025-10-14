<?php declare(strict_types=1);

namespace Vapi\Types;

enum VapiSmartEndpointingPlanProvider: string
{
    case Vapi = 'vapi';
    case Livekit = 'livekit';
    case CustomEndpointingModel = 'custom-endpointing-model';
}
