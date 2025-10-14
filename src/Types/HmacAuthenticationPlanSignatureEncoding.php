<?php declare(strict_types=1);

namespace Vapi\Types;

enum HmacAuthenticationPlanSignatureEncoding: string
{
    case Hex = 'hex';
    case Base64 = 'base64';
}
