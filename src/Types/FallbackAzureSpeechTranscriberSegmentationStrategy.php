<?php declare(strict_types=1);

namespace Vapi\Types;

enum FallbackAzureSpeechTranscriberSegmentationStrategy: string
{
    case Default_ = 'Default';
    case Time = 'Time';
    case Semantic = 'Semantic';
}
