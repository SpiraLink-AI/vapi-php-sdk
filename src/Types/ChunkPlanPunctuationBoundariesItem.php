<?php declare(strict_types=1);

namespace Vapi\Types;

enum ChunkPlanPunctuationBoundariesItem: string
{
    case FullStopCn = 'FULL_STOP_CN';
    case CommaCn = 'COMMA_CN';
    case FullStop = 'FULL_STOP';
    case Exclamation = 'EXCLAMATION';
    case Question = 'QUESTION';
    case Semicolon = 'SEMICOLON';
    case ParenthesisClose = 'PARENTHESIS_CLOSE';
    case CommaAr = 'COMMA_AR';
    case FullStopUr = 'FULL_STOP_UR';
    case FullStopBn = 'FULL_STOP_BN';
    case FullStopSanskrit = 'FULL_STOP_SANSKRIT';
    case Pipe = 'PIPE';
    case PipeDouble = 'PIPE_DOUBLE';
    case Comma = 'COMMA';
    case Colon = 'COLON';
}
