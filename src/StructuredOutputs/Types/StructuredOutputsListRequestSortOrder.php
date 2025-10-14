<?php declare(strict_types=1);

namespace Vapi\StructuredOutputs\Types;

enum StructuredOutputsListRequestSortOrder: string
{
    case Asc = 'ASC';
    case Desc = 'DESC';
}
