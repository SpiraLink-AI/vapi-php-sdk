<?php declare(strict_types=1);

namespace Vapi\Types;

enum GroupConditionOperator: string
{
    case And_ = 'AND';
    case Or_ = 'OR';
}
