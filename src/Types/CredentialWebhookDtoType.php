<?php declare(strict_types=1);

namespace Vapi\Types;

enum CredentialWebhookDtoType: string
{
    case Auth = 'auth';
    case Sync = 'sync';
    case Forward = 'forward';
}
