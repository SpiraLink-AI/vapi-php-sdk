<?php declare(strict_types=1);

namespace Vapi\Types;

enum GladiaTranscriberModel: string
{
    case Fast = 'fast';
    case Accurate = 'accurate';
    case Solaria1 = 'solaria-1';
}
