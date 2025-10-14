<?php declare(strict_types=1);

namespace Vapi\Types;

enum AnalyticsQueryGroupByItem: string
{
    case Type = 'type';
    case AssistantId = 'assistantId';
    case EndedReason = 'endedReason';
    case AnalysisSuccessEvaluation = 'analysis.successEvaluation';
    case Status = 'status';
}
