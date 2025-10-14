<?php declare(strict_types=1);

namespace Vapi\Types;

enum TransportCostProvider: string
{
    case Daily = 'daily';
    case VapiWebsocket = 'vapi.websocket';
    case Twilio = 'twilio';
    case Vonage = 'vonage';
    case Telnyx = 'telnyx';
    case VapiSip = 'vapi.sip';
}
