<?php declare(strict_types=1);

namespace Vapi\Types;

enum HmacAuthenticationPlanAlgorithm: string
{
    case Sha256 = 'sha256';
    case Sha512 = 'sha512';
    case Sha1 = 'sha1';
}
