<?php declare(strict_types=1);

namespace Vapi\Types;

enum SuccessEvaluationPlanRubric: string
{
    case NumericScale = 'NumericScale';
    case DescriptiveScale = 'DescriptiveScale';
    case Checklist = 'Checklist';
    case Matrix = 'Matrix';
    case PercentageScale = 'PercentageScale';
    case LikertScale = 'LikertScale';
    case AutomaticRubric = 'AutomaticRubric';
    case PassFail = 'PassFail';
}
