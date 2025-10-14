<?php declare(strict_types=1);

namespace Vapi\Types;

enum TransferPlanMode: string
{
    case BlindTransfer = 'blind-transfer';
    case BlindTransferAddSummaryToSipHeader = 'blind-transfer-add-summary-to-sip-header';
    case WarmTransferSayMessage = 'warm-transfer-say-message';
    case WarmTransferSaySummary = 'warm-transfer-say-summary';
    case WarmTransferTwiml = 'warm-transfer-twiml';
    case WarmTransferWaitForOperatorToSpeakFirstAndThenSayMessage = 'warm-transfer-wait-for-operator-to-speak-first-and-then-say-message';
    case WarmTransferWaitForOperatorToSpeakFirstAndThenSaySummary = 'warm-transfer-wait-for-operator-to-speak-first-and-then-say-summary';
    case WarmTransferExperimental = 'warm-transfer-experimental';
}
