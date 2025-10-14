<?php declare(strict_types=1);

namespace Vapi\Types;

enum CredentialWebhookDtoOperation: string
{
    case Creation = 'creation';
    case Override = 'override';
    case Refresh = 'refresh';
}
