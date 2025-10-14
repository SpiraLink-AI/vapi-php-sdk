<?php declare(strict_types=1);

namespace Vapi\Types;

enum AnalysisCostAnalysisType: string
{
    case Summary = 'summary';
    case StructuredData = 'structuredData';
    case SuccessEvaluation = 'successEvaluation';
    case StructuredOutput = 'structuredOutput';
}
