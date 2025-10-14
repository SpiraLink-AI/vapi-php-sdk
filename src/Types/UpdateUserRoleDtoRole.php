<?php declare(strict_types=1);

namespace Vapi\Types;

enum UpdateUserRoleDtoRole: string
{
    case Admin = 'admin';
    case Editor = 'editor';
    case Viewer = 'viewer';
}
