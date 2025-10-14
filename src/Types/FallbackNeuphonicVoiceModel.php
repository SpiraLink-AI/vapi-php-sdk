<?php declare(strict_types=1);

namespace Vapi\Types;

enum FallbackNeuphonicVoiceModel: string
{
    case NeuHq = 'neu_hq';
    case NeuFast = 'neu_fast';
}
