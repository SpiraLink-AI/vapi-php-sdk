<?php declare(strict_types=1);

namespace Vapi\Tools\Types;

use Exception;
use Vapi\Core\Json\JsonDecoder;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Types\ApiRequestTool;
use Vapi\Types\BashTool;
use Vapi\Types\ComputerTool;
use Vapi\Types\DtmfTool;
use Vapi\Types\EndCallTool;
use Vapi\Types\FunctionTool;
use Vapi\Types\GoHighLevelCalendarAvailabilityTool;
use Vapi\Types\GoHighLevelCalendarEventCreateTool;
use Vapi\Types\GoHighLevelContactCreateTool;
use Vapi\Types\GoHighLevelContactGetTool;
use Vapi\Types\GoogleCalendarCheckAvailabilityTool;
use Vapi\Types\GoogleCalendarCreateEventTool;
use Vapi\Types\GoogleSheetsRowAppendTool;
use Vapi\Types\HandoffTool;
use Vapi\Types\McpTool;
use Vapi\Types\QueryTool;
use Vapi\Types\SlackSendMessageTool;
use Vapi\Types\SmsTool;
use Vapi\Types\TextEditorTool;
use Vapi\Types\TransferCallTool;

final class ToolsUpdateResponse extends JsonSerializableType
{
    /**
     * @var (
     *    'apiRequest'
     *   |'dtmf'
     *   |'endCall'
     *   |'function'
     *   |'transferCall'
     *   |'handoff'
     *   |'bash'
     *   |'computer'
     *   |'textEditor'
     *   |'query'
     *   |'google.calendar.event.create'
     *   |'google.sheets.row.append'
     *   |'google.calendar.availability.check'
     *   |'slack.message.send'
     *   |'sms'
     *   |'mcp'
     *   |'gohighlevel.calendar.availability.check'
     *   |'gohighlevel.calendar.event.create'
     *   |'gohighlevel.contact.create'
     *   |'gohighlevel.contact.get'
     *   |'_unknown'
     * ) $type
     */
    public readonly string $type;

    /**
     * @var (
     *    ApiRequestTool
     *   |DtmfTool
     *   |EndCallTool
     *   |FunctionTool
     *   |TransferCallTool
     *   |HandoffTool
     *   |BashTool
     *   |ComputerTool
     *   |TextEditorTool
     *   |QueryTool
     *   |GoogleCalendarCreateEventTool
     *   |GoogleSheetsRowAppendTool
     *   |GoogleCalendarCheckAvailabilityTool
     *   |SlackSendMessageTool
     *   |SmsTool
     *   |McpTool
     *   |GoHighLevelCalendarAvailabilityTool
     *   |GoHighLevelCalendarEventCreateTool
     *   |GoHighLevelContactCreateTool
     *   |GoHighLevelContactGetTool
     *   |mixed
     * ) $value
     */
    public readonly mixed $value;

    /**
     * @param array{
     *   type: (
     *    'apiRequest'
     *   |'dtmf'
     *   |'endCall'
     *   |'function'
     *   |'transferCall'
     *   |'handoff'
     *   |'bash'
     *   |'computer'
     *   |'textEditor'
     *   |'query'
     *   |'google.calendar.event.create'
     *   |'google.sheets.row.append'
     *   |'google.calendar.availability.check'
     *   |'slack.message.send'
     *   |'sms'
     *   |'mcp'
     *   |'gohighlevel.calendar.availability.check'
     *   |'gohighlevel.calendar.event.create'
     *   |'gohighlevel.contact.create'
     *   |'gohighlevel.contact.get'
     *   |'_unknown'
     * ),
     *   value: (
     *    ApiRequestTool
     *   |DtmfTool
     *   |EndCallTool
     *   |FunctionTool
     *   |TransferCallTool
     *   |HandoffTool
     *   |BashTool
     *   |ComputerTool
     *   |TextEditorTool
     *   |QueryTool
     *   |GoogleCalendarCreateEventTool
     *   |GoogleSheetsRowAppendTool
     *   |GoogleCalendarCheckAvailabilityTool
     *   |SlackSendMessageTool
     *   |SmsTool
     *   |McpTool
     *   |GoHighLevelCalendarAvailabilityTool
     *   |GoHighLevelCalendarEventCreateTool
     *   |GoHighLevelContactCreateTool
     *   |GoHighLevelContactGetTool
     *   |mixed
     * ),
     * } $values
     */
    private function __construct(
        array $values,
    ) {
        $this->type = $values['type'];
        $this->value = $values['value'];
    }

    /**
     * @param ApiRequestTool $apiRequest
     * @return ToolsUpdateResponse
     */
    public static function apiRequest(ApiRequestTool $apiRequest): ToolsUpdateResponse
    {
        return new ToolsUpdateResponse([
            'type' => 'apiRequest',
            'value' => $apiRequest,
        ]);
    }

    /**
     * @param DtmfTool $dtmf
     * @return ToolsUpdateResponse
     */
    public static function dtmf(DtmfTool $dtmf): ToolsUpdateResponse
    {
        return new ToolsUpdateResponse([
            'type' => 'dtmf',
            'value' => $dtmf,
        ]);
    }

    /**
     * @param EndCallTool $endCall
     * @return ToolsUpdateResponse
     */
    public static function endCall(EndCallTool $endCall): ToolsUpdateResponse
    {
        return new ToolsUpdateResponse([
            'type' => 'endCall',
            'value' => $endCall,
        ]);
    }

    /**
     * @param FunctionTool $function
     * @return ToolsUpdateResponse
     */
    public static function function(FunctionTool $function): ToolsUpdateResponse
    {
        return new ToolsUpdateResponse([
            'type' => 'function',
            'value' => $function,
        ]);
    }

    /**
     * @param TransferCallTool $transferCall
     * @return ToolsUpdateResponse
     */
    public static function transferCall(TransferCallTool $transferCall): ToolsUpdateResponse
    {
        return new ToolsUpdateResponse([
            'type' => 'transferCall',
            'value' => $transferCall,
        ]);
    }

    /**
     * @param HandoffTool $handoff
     * @return ToolsUpdateResponse
     */
    public static function handoff(HandoffTool $handoff): ToolsUpdateResponse
    {
        return new ToolsUpdateResponse([
            'type' => 'handoff',
            'value' => $handoff,
        ]);
    }

    /**
     * @param BashTool $bash
     * @return ToolsUpdateResponse
     */
    public static function bash(BashTool $bash): ToolsUpdateResponse
    {
        return new ToolsUpdateResponse([
            'type' => 'bash',
            'value' => $bash,
        ]);
    }

    /**
     * @param ComputerTool $computer
     * @return ToolsUpdateResponse
     */
    public static function computer(ComputerTool $computer): ToolsUpdateResponse
    {
        return new ToolsUpdateResponse([
            'type' => 'computer',
            'value' => $computer,
        ]);
    }

    /**
     * @param TextEditorTool $textEditor
     * @return ToolsUpdateResponse
     */
    public static function textEditor(TextEditorTool $textEditor): ToolsUpdateResponse
    {
        return new ToolsUpdateResponse([
            'type' => 'textEditor',
            'value' => $textEditor,
        ]);
    }

    /**
     * @param QueryTool $query
     * @return ToolsUpdateResponse
     */
    public static function query(QueryTool $query): ToolsUpdateResponse
    {
        return new ToolsUpdateResponse([
            'type' => 'query',
            'value' => $query,
        ]);
    }

    /**
     * @param GoogleCalendarCreateEventTool $googleCalendarEventCreate
     * @return ToolsUpdateResponse
     */
    public static function googleCalendarEventCreate(GoogleCalendarCreateEventTool $googleCalendarEventCreate): ToolsUpdateResponse
    {
        return new ToolsUpdateResponse([
            'type' => 'google.calendar.event.create',
            'value' => $googleCalendarEventCreate,
        ]);
    }

    /**
     * @param GoogleSheetsRowAppendTool $googleSheetsRowAppend
     * @return ToolsUpdateResponse
     */
    public static function googleSheetsRowAppend(GoogleSheetsRowAppendTool $googleSheetsRowAppend): ToolsUpdateResponse
    {
        return new ToolsUpdateResponse([
            'type' => 'google.sheets.row.append',
            'value' => $googleSheetsRowAppend,
        ]);
    }

    /**
     * @param GoogleCalendarCheckAvailabilityTool $googleCalendarAvailabilityCheck
     * @return ToolsUpdateResponse
     */
    public static function googleCalendarAvailabilityCheck(GoogleCalendarCheckAvailabilityTool $googleCalendarAvailabilityCheck): ToolsUpdateResponse
    {
        return new ToolsUpdateResponse([
            'type' => 'google.calendar.availability.check',
            'value' => $googleCalendarAvailabilityCheck,
        ]);
    }

    /**
     * @param SlackSendMessageTool $slackMessageSend
     * @return ToolsUpdateResponse
     */
    public static function slackMessageSend(SlackSendMessageTool $slackMessageSend): ToolsUpdateResponse
    {
        return new ToolsUpdateResponse([
            'type' => 'slack.message.send',
            'value' => $slackMessageSend,
        ]);
    }

    /**
     * @param SmsTool $sms
     * @return ToolsUpdateResponse
     */
    public static function sms(SmsTool $sms): ToolsUpdateResponse
    {
        return new ToolsUpdateResponse([
            'type' => 'sms',
            'value' => $sms,
        ]);
    }

    /**
     * @param McpTool $mcp
     * @return ToolsUpdateResponse
     */
    public static function mcp(McpTool $mcp): ToolsUpdateResponse
    {
        return new ToolsUpdateResponse([
            'type' => 'mcp',
            'value' => $mcp,
        ]);
    }

    /**
     * @param GoHighLevelCalendarAvailabilityTool $gohighlevelCalendarAvailabilityCheck
     * @return ToolsUpdateResponse
     */
    public static function gohighlevelCalendarAvailabilityCheck(GoHighLevelCalendarAvailabilityTool $gohighlevelCalendarAvailabilityCheck): ToolsUpdateResponse
    {
        return new ToolsUpdateResponse([
            'type' => 'gohighlevel.calendar.availability.check',
            'value' => $gohighlevelCalendarAvailabilityCheck,
        ]);
    }

    /**
     * @param GoHighLevelCalendarEventCreateTool $gohighlevelCalendarEventCreate
     * @return ToolsUpdateResponse
     */
    public static function gohighlevelCalendarEventCreate(GoHighLevelCalendarEventCreateTool $gohighlevelCalendarEventCreate): ToolsUpdateResponse
    {
        return new ToolsUpdateResponse([
            'type' => 'gohighlevel.calendar.event.create',
            'value' => $gohighlevelCalendarEventCreate,
        ]);
    }

    /**
     * @param GoHighLevelContactCreateTool $gohighlevelContactCreate
     * @return ToolsUpdateResponse
     */
    public static function gohighlevelContactCreate(GoHighLevelContactCreateTool $gohighlevelContactCreate): ToolsUpdateResponse
    {
        return new ToolsUpdateResponse([
            'type' => 'gohighlevel.contact.create',
            'value' => $gohighlevelContactCreate,
        ]);
    }

    /**
     * @param GoHighLevelContactGetTool $gohighlevelContactGet
     * @return ToolsUpdateResponse
     */
    public static function gohighlevelContactGet(GoHighLevelContactGetTool $gohighlevelContactGet): ToolsUpdateResponse
    {
        return new ToolsUpdateResponse([
            'type' => 'gohighlevel.contact.get',
            'value' => $gohighlevelContactGet,
        ]);
    }

    /**
     * @return bool
     */
    public function isApiRequest(): bool
    {
        return $this->value instanceof ApiRequestTool && $this->type === 'apiRequest';
    }

    /**
     * @return ApiRequestTool
     */
    public function asApiRequest(): ApiRequestTool
    {
        if (! ($this->value instanceof ApiRequestTool && $this->type === 'apiRequest')) {
            throw new Exception(
                "Expected apiRequest; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isDtmf(): bool
    {
        return $this->value instanceof DtmfTool && $this->type === 'dtmf';
    }

    /**
     * @return DtmfTool
     */
    public function asDtmf(): DtmfTool
    {
        if (! ($this->value instanceof DtmfTool && $this->type === 'dtmf')) {
            throw new Exception(
                "Expected dtmf; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isEndCall(): bool
    {
        return $this->value instanceof EndCallTool && $this->type === 'endCall';
    }

    /**
     * @return EndCallTool
     */
    public function asEndCall(): EndCallTool
    {
        if (! ($this->value instanceof EndCallTool && $this->type === 'endCall')) {
            throw new Exception(
                "Expected endCall; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isFunction_(): bool
    {
        return $this->value instanceof FunctionTool && $this->type === 'function';
    }

    /**
     * @return FunctionTool
     */
    public function asFunction_(): FunctionTool
    {
        if (! ($this->value instanceof FunctionTool && $this->type === 'function')) {
            throw new Exception(
                "Expected function; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isTransferCall(): bool
    {
        return $this->value instanceof TransferCallTool && $this->type === 'transferCall';
    }

    /**
     * @return TransferCallTool
     */
    public function asTransferCall(): TransferCallTool
    {
        if (! ($this->value instanceof TransferCallTool && $this->type === 'transferCall')) {
            throw new Exception(
                "Expected transferCall; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isHandoff(): bool
    {
        return $this->value instanceof HandoffTool && $this->type === 'handoff';
    }

    /**
     * @return HandoffTool
     */
    public function asHandoff(): HandoffTool
    {
        if (! ($this->value instanceof HandoffTool && $this->type === 'handoff')) {
            throw new Exception(
                "Expected handoff; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isBash(): bool
    {
        return $this->value instanceof BashTool && $this->type === 'bash';
    }

    /**
     * @return BashTool
     */
    public function asBash(): BashTool
    {
        if (! ($this->value instanceof BashTool && $this->type === 'bash')) {
            throw new Exception(
                "Expected bash; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isComputer(): bool
    {
        return $this->value instanceof ComputerTool && $this->type === 'computer';
    }

    /**
     * @return ComputerTool
     */
    public function asComputer(): ComputerTool
    {
        if (! ($this->value instanceof ComputerTool && $this->type === 'computer')) {
            throw new Exception(
                "Expected computer; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isTextEditor(): bool
    {
        return $this->value instanceof TextEditorTool && $this->type === 'textEditor';
    }

    /**
     * @return TextEditorTool
     */
    public function asTextEditor(): TextEditorTool
    {
        if (! ($this->value instanceof TextEditorTool && $this->type === 'textEditor')) {
            throw new Exception(
                "Expected textEditor; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isQuery(): bool
    {
        return $this->value instanceof QueryTool && $this->type === 'query';
    }

    /**
     * @return QueryTool
     */
    public function asQuery(): QueryTool
    {
        if (! ($this->value instanceof QueryTool && $this->type === 'query')) {
            throw new Exception(
                "Expected query; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isGoogleCalendarEventCreate(): bool
    {
        return $this->value instanceof GoogleCalendarCreateEventTool && $this->type === 'google.calendar.event.create';
    }

    /**
     * @return GoogleCalendarCreateEventTool
     */
    public function asGoogleCalendarEventCreate(): GoogleCalendarCreateEventTool
    {
        if (! ($this->value instanceof GoogleCalendarCreateEventTool && $this->type === 'google.calendar.event.create')) {
            throw new Exception(
                "Expected google.calendar.event.create; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isGoogleSheetsRowAppend(): bool
    {
        return $this->value instanceof GoogleSheetsRowAppendTool && $this->type === 'google.sheets.row.append';
    }

    /**
     * @return GoogleSheetsRowAppendTool
     */
    public function asGoogleSheetsRowAppend(): GoogleSheetsRowAppendTool
    {
        if (! ($this->value instanceof GoogleSheetsRowAppendTool && $this->type === 'google.sheets.row.append')) {
            throw new Exception(
                "Expected google.sheets.row.append; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isGoogleCalendarAvailabilityCheck(): bool
    {
        return $this->value instanceof GoogleCalendarCheckAvailabilityTool && $this->type === 'google.calendar.availability.check';
    }

    /**
     * @return GoogleCalendarCheckAvailabilityTool
     */
    public function asGoogleCalendarAvailabilityCheck(): GoogleCalendarCheckAvailabilityTool
    {
        if (! ($this->value instanceof GoogleCalendarCheckAvailabilityTool && $this->type === 'google.calendar.availability.check')) {
            throw new Exception(
                "Expected google.calendar.availability.check; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isSlackMessageSend(): bool
    {
        return $this->value instanceof SlackSendMessageTool && $this->type === 'slack.message.send';
    }

    /**
     * @return SlackSendMessageTool
     */
    public function asSlackMessageSend(): SlackSendMessageTool
    {
        if (! ($this->value instanceof SlackSendMessageTool && $this->type === 'slack.message.send')) {
            throw new Exception(
                "Expected slack.message.send; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isSms(): bool
    {
        return $this->value instanceof SmsTool && $this->type === 'sms';
    }

    /**
     * @return SmsTool
     */
    public function asSms(): SmsTool
    {
        if (! ($this->value instanceof SmsTool && $this->type === 'sms')) {
            throw new Exception(
                "Expected sms; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isMcp(): bool
    {
        return $this->value instanceof McpTool && $this->type === 'mcp';
    }

    /**
     * @return McpTool
     */
    public function asMcp(): McpTool
    {
        if (! ($this->value instanceof McpTool && $this->type === 'mcp')) {
            throw new Exception(
                "Expected mcp; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isGohighlevelCalendarAvailabilityCheck(): bool
    {
        return $this->value instanceof GoHighLevelCalendarAvailabilityTool && $this->type === 'gohighlevel.calendar.availability.check';
    }

    /**
     * @return GoHighLevelCalendarAvailabilityTool
     */
    public function asGohighlevelCalendarAvailabilityCheck(): GoHighLevelCalendarAvailabilityTool
    {
        if (! ($this->value instanceof GoHighLevelCalendarAvailabilityTool && $this->type === 'gohighlevel.calendar.availability.check')) {
            throw new Exception(
                "Expected gohighlevel.calendar.availability.check; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isGohighlevelCalendarEventCreate(): bool
    {
        return $this->value instanceof GoHighLevelCalendarEventCreateTool && $this->type === 'gohighlevel.calendar.event.create';
    }

    /**
     * @return GoHighLevelCalendarEventCreateTool
     */
    public function asGohighlevelCalendarEventCreate(): GoHighLevelCalendarEventCreateTool
    {
        if (! ($this->value instanceof GoHighLevelCalendarEventCreateTool && $this->type === 'gohighlevel.calendar.event.create')) {
            throw new Exception(
                "Expected gohighlevel.calendar.event.create; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isGohighlevelContactCreate(): bool
    {
        return $this->value instanceof GoHighLevelContactCreateTool && $this->type === 'gohighlevel.contact.create';
    }

    /**
     * @return GoHighLevelContactCreateTool
     */
    public function asGohighlevelContactCreate(): GoHighLevelContactCreateTool
    {
        if (! ($this->value instanceof GoHighLevelContactCreateTool && $this->type === 'gohighlevel.contact.create')) {
            throw new Exception(
                "Expected gohighlevel.contact.create; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isGohighlevelContactGet(): bool
    {
        return $this->value instanceof GoHighLevelContactGetTool && $this->type === 'gohighlevel.contact.get';
    }

    /**
     * @return GoHighLevelContactGetTool
     */
    public function asGohighlevelContactGet(): GoHighLevelContactGetTool
    {
        if (! ($this->value instanceof GoHighLevelContactGetTool && $this->type === 'gohighlevel.contact.get')) {
            throw new Exception(
                "Expected gohighlevel.contact.get; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }

    /**
     * @return array<mixed>
     */
    public function jsonSerialize(): array
    {
        $result = [];
        $result['type'] = $this->type;

        $base = parent::jsonSerialize();
        $result = array_merge($base, $result);

        switch ($this->type) {
            case 'apiRequest':
                $value = $this->asApiRequest()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'dtmf':
                $value = $this->asDtmf()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'endCall':
                $value = $this->asEndCall()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'function':
                $value = $this->asFunction_()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'transferCall':
                $value = $this->asTransferCall()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'handoff':
                $value = $this->asHandoff()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'bash':
                $value = $this->asBash()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'computer':
                $value = $this->asComputer()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'textEditor':
                $value = $this->asTextEditor()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'query':
                $value = $this->asQuery()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'google.calendar.event.create':
                $value = $this->asGoogleCalendarEventCreate()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'google.sheets.row.append':
                $value = $this->asGoogleSheetsRowAppend()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'google.calendar.availability.check':
                $value = $this->asGoogleCalendarAvailabilityCheck()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'slack.message.send':
                $value = $this->asSlackMessageSend()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'sms':
                $value = $this->asSms()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'mcp':
                $value = $this->asMcp()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'gohighlevel.calendar.availability.check':
                $value = $this->asGohighlevelCalendarAvailabilityCheck()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'gohighlevel.calendar.event.create':
                $value = $this->asGohighlevelCalendarEventCreate()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'gohighlevel.contact.create':
                $value = $this->asGohighlevelContactCreate()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'gohighlevel.contact.get':
                $value = $this->asGohighlevelContactGet()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case '_unknown':
            default:
                if (is_null($this->value)) {
                    break;
                }
                if ($this->value instanceof JsonSerializableType) {
                    $value = $this->value->jsonSerialize();
                    $result = array_merge($value, $result);
                } elseif (is_array($this->value)) {
                    $result = array_merge($this->value, $result);
                }
        }

        return $result;
    }

    /**
     * @param string $json
     */
    public static function fromJson(string $json): static
    {
        $decodedJson = JsonDecoder::decode($json);
        if (! is_array($decodedJson)) {
            throw new Exception("Unexpected non-array decoded type: " . gettype($decodedJson));
        }

        return self::jsonDeserialize($decodedJson);
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function jsonDeserialize(array $data): static
    {
        $args = [];
        if (! array_key_exists('type', $data)) {
            throw new Exception(
                "JSON data is missing property 'type'",
            );
        }
        $type = $data['type'];
        if (! (is_string($type))) {
            throw new Exception(
                "Expected property 'type' in JSON data to be string, instead received " . get_debug_type($data['type']),
            );
        }

        $args['type'] = $type;
        switch ($type) {
            case 'apiRequest':
                $args['value'] = ApiRequestTool::jsonDeserialize($data);
                break;
            case 'dtmf':
                $args['value'] = DtmfTool::jsonDeserialize($data);
                break;
            case 'endCall':
                $args['value'] = EndCallTool::jsonDeserialize($data);
                break;
            case 'function':
                $args['value'] = FunctionTool::jsonDeserialize($data);
                break;
            case 'transferCall':
                $args['value'] = TransferCallTool::jsonDeserialize($data);
                break;
            case 'handoff':
                $args['value'] = HandoffTool::jsonDeserialize($data);
                break;
            case 'bash':
                $args['value'] = BashTool::jsonDeserialize($data);
                break;
            case 'computer':
                $args['value'] = ComputerTool::jsonDeserialize($data);
                break;
            case 'textEditor':
                $args['value'] = TextEditorTool::jsonDeserialize($data);
                break;
            case 'query':
                $args['value'] = QueryTool::jsonDeserialize($data);
                break;
            case 'google.calendar.event.create':
                $args['value'] = GoogleCalendarCreateEventTool::jsonDeserialize($data);
                break;
            case 'google.sheets.row.append':
                $args['value'] = GoogleSheetsRowAppendTool::jsonDeserialize($data);
                break;
            case 'google.calendar.availability.check':
                $args['value'] = GoogleCalendarCheckAvailabilityTool::jsonDeserialize($data);
                break;
            case 'slack.message.send':
                $args['value'] = SlackSendMessageTool::jsonDeserialize($data);
                break;
            case 'sms':
                $args['value'] = SmsTool::jsonDeserialize($data);
                break;
            case 'mcp':
                $args['value'] = McpTool::jsonDeserialize($data);
                break;
            case 'gohighlevel.calendar.availability.check':
                $args['value'] = GoHighLevelCalendarAvailabilityTool::jsonDeserialize($data);
                break;
            case 'gohighlevel.calendar.event.create':
                $args['value'] = GoHighLevelCalendarEventCreateTool::jsonDeserialize($data);
                break;
            case 'gohighlevel.contact.create':
                $args['value'] = GoHighLevelContactCreateTool::jsonDeserialize($data);
                break;
            case 'gohighlevel.contact.get':
                $args['value'] = GoHighLevelContactGetTool::jsonDeserialize($data);
                break;
            case '_unknown':
            default:
                $args['type'] = '_unknown';
                $args['value'] = $data;
        }

        // @phpstan-ignore-next-line
        return new static($args);
    }
}
