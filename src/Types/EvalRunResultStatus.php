<?php declare(strict_types=1);

namespace Vapi\Types;

enum EvalRunResultStatus: string
{
    case Pass = 'pass';
    case Fail = 'fail';
}
