<?php declare(strict_types=1);

namespace Vapi\Types;

enum AnalyticsOperationOperation: string
{
    case Sum = 'sum';
    case Avg = 'avg';
    case Count = 'count';
    case Min = 'min';
    case Max = 'max';
    case History = 'history';
}
