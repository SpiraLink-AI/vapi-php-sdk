<?php declare(strict_types=1);

namespace Vapi\Types;

enum TestSuiteRunScorerAiResult: string
{
    case Pass = 'pass';
    case Fail = 'fail';
}
