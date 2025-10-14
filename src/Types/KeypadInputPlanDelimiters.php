<?php declare(strict_types=1);

namespace Vapi\Types;

enum KeypadInputPlanDelimiters: string
{
    case Hash = 'HASH';
    case Asterisk = 'ASTERISK';
    case None = 'NONE';
}
