<?php declare(strict_types=1);

namespace Vapi\Types;

enum EvalGroqModelModel: string
{
    case OpenaiGptOss20B = 'openai/gpt-oss-20b';
    case OpenaiGptOss120B = 'openai/gpt-oss-120b';
    case DeepseekR1DistillLlama70B = 'deepseek-r1-distill-llama-70b';
    case Llama3370BVersatile = 'llama-3.3-70b-versatile';
    case Llama31405BReasoning = 'llama-3.1-405b-reasoning';
    case Llama318BInstant = 'llama-3.1-8b-instant';
    case Llama38B8192 = 'llama3-8b-8192';
    case Llama370B8192 = 'llama3-70b-8192';
    case Gemma29BIt = 'gemma2-9b-it';
    case MoonshotaiKimiK2Instruct0905 = 'moonshotai/kimi-k2-instruct-0905';
    case MetaLlamaLlama4Maverick17B128EInstruct = 'meta-llama/llama-4-maverick-17b-128e-instruct';
    case MetaLlamaLlama4Scout17B16EInstruct = 'meta-llama/llama-4-scout-17b-16e-instruct';
    case MistralSaba24B = 'mistral-saba-24b';
    case CompoundBeta = 'compound-beta';
    case CompoundBetaMini = 'compound-beta-mini';
}
