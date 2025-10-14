<?php declare(strict_types=1);

namespace Vapi\Types;

enum TransportConfigurationTwilioRecordingChannels: string
{
    case Mono = 'mono';
    case Dual = 'dual';
}
