<?php declare(strict_types=1);

namespace Vapi\Types;

enum TrieveKnowledgeBaseSearchPlanSearchType: string
{
    case Fulltext = 'fulltext';
    case Semantic = 'semantic';
    case Hybrid = 'hybrid';
    case Bm25 = 'bm25';
}
