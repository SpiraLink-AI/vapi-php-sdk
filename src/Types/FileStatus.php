<?php declare(strict_types=1);

namespace Vapi\Types;

enum FileStatus: string
{
    case Processing = 'processing';
    case Done = 'done';
    case Failed = 'failed';
}
