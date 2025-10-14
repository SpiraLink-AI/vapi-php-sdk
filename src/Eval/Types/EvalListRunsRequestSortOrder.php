<?php declare(strict_types=1);

namespace Vapi\Eval\Types;

enum EvalListRunsRequestSortOrder: string
{
    case Asc = 'ASC';
    case Desc = 'DESC';
}
