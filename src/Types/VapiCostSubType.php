<?php declare(strict_types=1);

namespace Vapi\Types;

enum VapiCostSubType: string
{
    case Normal = 'normal';
    case Overage = 'overage';
}
