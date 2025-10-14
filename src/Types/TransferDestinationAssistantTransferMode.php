<?php declare(strict_types=1);

namespace Vapi\Types;

enum TransferDestinationAssistantTransferMode: string
{
    case RollingHistory = 'rolling-history';
    case SwapSystemMessageInHistory = 'swap-system-message-in-history';
    case SwapSystemMessageInHistoryAndRemoveTransferToolMessages = 'swap-system-message-in-history-and-remove-transfer-tool-messages';
    case DeleteHistory = 'delete-history';
}
