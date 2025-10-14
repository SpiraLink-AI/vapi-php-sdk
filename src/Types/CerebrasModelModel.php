<?php declare(strict_types=1);

namespace Vapi\Types;

enum CerebrasModelModel: string
{
    case Llama318B = 'llama3.1-8b';
    case Llama3370B = 'llama-3.3-70b';
}
