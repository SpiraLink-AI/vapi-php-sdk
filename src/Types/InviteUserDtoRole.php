<?php declare(strict_types=1);

namespace Vapi\Types;

enum InviteUserDtoRole: string
{
    case Admin = 'admin';
    case Editor = 'editor';
    case Viewer = 'viewer';
}
