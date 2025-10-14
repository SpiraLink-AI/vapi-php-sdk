<?php declare(strict_types=1);

namespace Vapi\Types;

use Exception;
use Vapi\Core\Json\JsonDecoder;
use Vapi\Core\Json\JsonSerializableType;

final class GoogleModelToolsItem extends JsonSerializableType
{
    /**
     * @var (
     *    'apiRequest'
     *   |'bash'
     *   |'computer'
     *   |'dtmf'
     *   |'endCall'
     *   |'function'
     *   |'gohighlevel.calendar.availability.check'
     *   |'gohighlevel.calendar.event.create'
     *   |'gohighlevel.contact.create'
     *   |'gohighlevel.contact.get'
     *   |'google.calendar.availability.check'
     *   |'google.calendar.event.create'
     *   |'google.sheets.row.append'
     *   |'handoff'
     *   |'mcp'
     *   |'query'
     *   |'slack.message.send'
     *   |'sms'
     *   |'textEditor'
     *   |'transferCall'
     *   |'_unknown'
     * ) $type
     */
    public readonly string $type;

    /**
     * @var (
     *    CreateApiRequestToolDto
     *   |CreateBashToolDto
     *   |CreateComputerToolDto
     *   |CreateDtmfToolDto
     *   |CreateEndCallToolDto
     *   |CreateFunctionToolDto
     *   |CreateGoHighLevelCalendarAvailabilityToolDto
     *   |CreateGoHighLevelCalendarEventCreateToolDto
     *   |CreateGoHighLevelContactCreateToolDto
     *   |CreateGoHighLevelContactGetToolDto
     *   |CreateGoogleCalendarCheckAvailabilityToolDto
     *   |CreateGoogleCalendarCreateEventToolDto
     *   |CreateGoogleSheetsRowAppendToolDto
     *   |CreateHandoffToolDto
     *   |CreateMcpToolDto
     *   |CreateQueryToolDto
     *   |CreateSlackSendMessageToolDto
     *   |CreateSmsToolDto
     *   |CreateTextEditorToolDto
     *   |CreateTransferCallToolDto
     *   |mixed
     * ) $value
     */
    public readonly mixed $value;

    /**
     * @param array{
     *   type: (
     *    'apiRequest'
     *   |'bash'
     *   |'computer'
     *   |'dtmf'
     *   |'endCall'
     *   |'function'
     *   |'gohighlevel.calendar.availability.check'
     *   |'gohighlevel.calendar.event.create'
     *   |'gohighlevel.contact.create'
     *   |'gohighlevel.contact.get'
     *   |'google.calendar.availability.check'
     *   |'google.calendar.event.create'
     *   |'google.sheets.row.append'
     *   |'handoff'
     *   |'mcp'
     *   |'query'
     *   |'slack.message.send'
     *   |'sms'
     *   |'textEditor'
     *   |'transferCall'
     *   |'_unknown'
     * ),
     *   value: (
     *    CreateApiRequestToolDto
     *   |CreateBashToolDto
     *   |CreateComputerToolDto
     *   |CreateDtmfToolDto
     *   |CreateEndCallToolDto
     *   |CreateFunctionToolDto
     *   |CreateGoHighLevelCalendarAvailabilityToolDto
     *   |CreateGoHighLevelCalendarEventCreateToolDto
     *   |CreateGoHighLevelContactCreateToolDto
     *   |CreateGoHighLevelContactGetToolDto
     *   |CreateGoogleCalendarCheckAvailabilityToolDto
     *   |CreateGoogleCalendarCreateEventToolDto
     *   |CreateGoogleSheetsRowAppendToolDto
     *   |CreateHandoffToolDto
     *   |CreateMcpToolDto
     *   |CreateQueryToolDto
     *   |CreateSlackSendMessageToolDto
     *   |CreateSmsToolDto
     *   |CreateTextEditorToolDto
     *   |CreateTransferCallToolDto
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
     * @param CreateApiRequestToolDto $apiRequest
     * @return GoogleModelToolsItem
     */
    public static function apiRequest(CreateApiRequestToolDto $apiRequest): GoogleModelToolsItem
    {
        return new GoogleModelToolsItem([
            'type' => 'apiRequest',
            'value' => $apiRequest,
        ]);
    }

    /**
     * @param CreateBashToolDto $bash
     * @return GoogleModelToolsItem
     */
    public static function bash(CreateBashToolDto $bash): GoogleModelToolsItem
    {
        return new GoogleModelToolsItem([
            'type' => 'bash',
            'value' => $bash,
        ]);
    }

    /**
     * @param CreateComputerToolDto $computer
     * @return GoogleModelToolsItem
     */
    public static function computer(CreateComputerToolDto $computer): GoogleModelToolsItem
    {
        return new GoogleModelToolsItem([
            'type' => 'computer',
            'value' => $computer,
        ]);
    }

    /**
     * @param CreateDtmfToolDto $dtmf
     * @return GoogleModelToolsItem
     */
    public static function dtmf(CreateDtmfToolDto $dtmf): GoogleModelToolsItem
    {
        return new GoogleModelToolsItem([
            'type' => 'dtmf',
            'value' => $dtmf,
        ]);
    }

    /**
     * @param CreateEndCallToolDto $endCall
     * @return GoogleModelToolsItem
     */
    public static function endCall(CreateEndCallToolDto $endCall): GoogleModelToolsItem
    {
        return new GoogleModelToolsItem([
            'type' => 'endCall',
            'value' => $endCall,
        ]);
    }

    /**
     * @param CreateFunctionToolDto $function
     * @return GoogleModelToolsItem
     */
    public static function function(CreateFunctionToolDto $function): GoogleModelToolsItem
    {
        return new GoogleModelToolsItem([
            'type' => 'function',
            'value' => $function,
        ]);
    }

    /**
     * @param CreateGoHighLevelCalendarAvailabilityToolDto $gohighlevelCalendarAvailabilityCheck
     * @return GoogleModelToolsItem
     */
    public static function gohighlevelCalendarAvailabilityCheck(CreateGoHighLevelCalendarAvailabilityToolDto $gohighlevelCalendarAvailabilityCheck): GoogleModelToolsItem
    {
        return new GoogleModelToolsItem([
            'type' => 'gohighlevel.calendar.availability.check',
            'value' => $gohighlevelCalendarAvailabilityCheck,
        ]);
    }

    /**
     * @param CreateGoHighLevelCalendarEventCreateToolDto $gohighlevelCalendarEventCreate
     * @return GoogleModelToolsItem
     */
    public static function gohighlevelCalendarEventCreate(CreateGoHighLevelCalendarEventCreateToolDto $gohighlevelCalendarEventCreate): GoogleModelToolsItem
    {
        return new GoogleModelToolsItem([
            'type' => 'gohighlevel.calendar.event.create',
            'value' => $gohighlevelCalendarEventCreate,
        ]);
    }

    /**
     * @param CreateGoHighLevelContactCreateToolDto $gohighlevelContactCreate
     * @return GoogleModelToolsItem
     */
    public static function gohighlevelContactCreate(CreateGoHighLevelContactCreateToolDto $gohighlevelContactCreate): GoogleModelToolsItem
    {
        return new GoogleModelToolsItem([
            'type' => 'gohighlevel.contact.create',
            'value' => $gohighlevelContactCreate,
        ]);
    }

    /**
     * @param CreateGoHighLevelContactGetToolDto $gohighlevelContactGet
     * @return GoogleModelToolsItem
     */
    public static function gohighlevelContactGet(CreateGoHighLevelContactGetToolDto $gohighlevelContactGet): GoogleModelToolsItem
    {
        return new GoogleModelToolsItem([
            'type' => 'gohighlevel.contact.get',
            'value' => $gohighlevelContactGet,
        ]);
    }

    /**
     * @param CreateGoogleCalendarCheckAvailabilityToolDto $googleCalendarAvailabilityCheck
     * @return GoogleModelToolsItem
     */
    public static function googleCalendarAvailabilityCheck(CreateGoogleCalendarCheckAvailabilityToolDto $googleCalendarAvailabilityCheck): GoogleModelToolsItem
    {
        return new GoogleModelToolsItem([
            'type' => 'google.calendar.availability.check',
            'value' => $googleCalendarAvailabilityCheck,
        ]);
    }

    /**
     * @param CreateGoogleCalendarCreateEventToolDto $googleCalendarEventCreate
     * @return GoogleModelToolsItem
     */
    public static function googleCalendarEventCreate(CreateGoogleCalendarCreateEventToolDto $googleCalendarEventCreate): GoogleModelToolsItem
    {
        return new GoogleModelToolsItem([
            'type' => 'google.calendar.event.create',
            'value' => $googleCalendarEventCreate,
        ]);
    }

    /**
     * @param CreateGoogleSheetsRowAppendToolDto $googleSheetsRowAppend
     * @return GoogleModelToolsItem
     */
    public static function googleSheetsRowAppend(CreateGoogleSheetsRowAppendToolDto $googleSheetsRowAppend): GoogleModelToolsItem
    {
        return new GoogleModelToolsItem([
            'type' => 'google.sheets.row.append',
            'value' => $googleSheetsRowAppend,
        ]);
    }

    /**
     * @param CreateHandoffToolDto $handoff
     * @return GoogleModelToolsItem
     */
    public static function handoff(CreateHandoffToolDto $handoff): GoogleModelToolsItem
    {
        return new GoogleModelToolsItem([
            'type' => 'handoff',
            'value' => $handoff,
        ]);
    }

    /**
     * @param CreateMcpToolDto $mcp
     * @return GoogleModelToolsItem
     */
    public static function mcp(CreateMcpToolDto $mcp): GoogleModelToolsItem
    {
        return new GoogleModelToolsItem([
            'type' => 'mcp',
            'value' => $mcp,
        ]);
    }

    /**
     * @param CreateQueryToolDto $query
     * @return GoogleModelToolsItem
     */
    public static function query(CreateQueryToolDto $query): GoogleModelToolsItem
    {
        return new GoogleModelToolsItem([
            'type' => 'query',
            'value' => $query,
        ]);
    }

    /**
     * @param CreateSlackSendMessageToolDto $slackMessageSend
     * @return GoogleModelToolsItem
     */
    public static function slackMessageSend(CreateSlackSendMessageToolDto $slackMessageSend): GoogleModelToolsItem
    {
        return new GoogleModelToolsItem([
            'type' => 'slack.message.send',
            'value' => $slackMessageSend,
        ]);
    }

    /**
     * @param CreateSmsToolDto $sms
     * @return GoogleModelToolsItem
     */
    public static function sms(CreateSmsToolDto $sms): GoogleModelToolsItem
    {
        return new GoogleModelToolsItem([
            'type' => 'sms',
            'value' => $sms,
        ]);
    }

    /**
     * @param CreateTextEditorToolDto $textEditor
     * @return GoogleModelToolsItem
     */
    public static function textEditor(CreateTextEditorToolDto $textEditor): GoogleModelToolsItem
    {
        return new GoogleModelToolsItem([
            'type' => 'textEditor',
            'value' => $textEditor,
        ]);
    }

    /**
     * @param CreateTransferCallToolDto $transferCall
     * @return GoogleModelToolsItem
     */
    public static function transferCall(CreateTransferCallToolDto $transferCall): GoogleModelToolsItem
    {
        return new GoogleModelToolsItem([
            'type' => 'transferCall',
            'value' => $transferCall,
        ]);
    }

    /**
     * @return bool
     */
    public function isApiRequest(): bool
    {
        return $this->value instanceof CreateApiRequestToolDto && $this->type === 'apiRequest';
    }

    /**
     * @return CreateApiRequestToolDto
     */
    public function asApiRequest(): CreateApiRequestToolDto
    {
        if (! ($this->value instanceof CreateApiRequestToolDto && $this->type === 'apiRequest')) {
            throw new Exception(
                "Expected apiRequest; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isBash(): bool
    {
        return $this->value instanceof CreateBashToolDto && $this->type === 'bash';
    }

    /**
     * @return CreateBashToolDto
     */
    public function asBash(): CreateBashToolDto
    {
        if (! ($this->value instanceof CreateBashToolDto && $this->type === 'bash')) {
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
        return $this->value instanceof CreateComputerToolDto && $this->type === 'computer';
    }

    /**
     * @return CreateComputerToolDto
     */
    public function asComputer(): CreateComputerToolDto
    {
        if (! ($this->value instanceof CreateComputerToolDto && $this->type === 'computer')) {
            throw new Exception(
                "Expected computer; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isDtmf(): bool
    {
        return $this->value instanceof CreateDtmfToolDto && $this->type === 'dtmf';
    }

    /**
     * @return CreateDtmfToolDto
     */
    public function asDtmf(): CreateDtmfToolDto
    {
        if (! ($this->value instanceof CreateDtmfToolDto && $this->type === 'dtmf')) {
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
        return $this->value instanceof CreateEndCallToolDto && $this->type === 'endCall';
    }

    /**
     * @return CreateEndCallToolDto
     */
    public function asEndCall(): CreateEndCallToolDto
    {
        if (! ($this->value instanceof CreateEndCallToolDto && $this->type === 'endCall')) {
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
        return $this->value instanceof CreateFunctionToolDto && $this->type === 'function';
    }

    /**
     * @return CreateFunctionToolDto
     */
    public function asFunction_(): CreateFunctionToolDto
    {
        if (! ($this->value instanceof CreateFunctionToolDto && $this->type === 'function')) {
            throw new Exception(
                "Expected function; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isGohighlevelCalendarAvailabilityCheck(): bool
    {
        return $this->value instanceof CreateGoHighLevelCalendarAvailabilityToolDto && $this->type === 'gohighlevel.calendar.availability.check';
    }

    /**
     * @return CreateGoHighLevelCalendarAvailabilityToolDto
     */
    public function asGohighlevelCalendarAvailabilityCheck(): CreateGoHighLevelCalendarAvailabilityToolDto
    {
        if (! ($this->value instanceof CreateGoHighLevelCalendarAvailabilityToolDto && $this->type === 'gohighlevel.calendar.availability.check')) {
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
        return $this->value instanceof CreateGoHighLevelCalendarEventCreateToolDto && $this->type === 'gohighlevel.calendar.event.create';
    }

    /**
     * @return CreateGoHighLevelCalendarEventCreateToolDto
     */
    public function asGohighlevelCalendarEventCreate(): CreateGoHighLevelCalendarEventCreateToolDto
    {
        if (! ($this->value instanceof CreateGoHighLevelCalendarEventCreateToolDto && $this->type === 'gohighlevel.calendar.event.create')) {
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
        return $this->value instanceof CreateGoHighLevelContactCreateToolDto && $this->type === 'gohighlevel.contact.create';
    }

    /**
     * @return CreateGoHighLevelContactCreateToolDto
     */
    public function asGohighlevelContactCreate(): CreateGoHighLevelContactCreateToolDto
    {
        if (! ($this->value instanceof CreateGoHighLevelContactCreateToolDto && $this->type === 'gohighlevel.contact.create')) {
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
        return $this->value instanceof CreateGoHighLevelContactGetToolDto && $this->type === 'gohighlevel.contact.get';
    }

    /**
     * @return CreateGoHighLevelContactGetToolDto
     */
    public function asGohighlevelContactGet(): CreateGoHighLevelContactGetToolDto
    {
        if (! ($this->value instanceof CreateGoHighLevelContactGetToolDto && $this->type === 'gohighlevel.contact.get')) {
            throw new Exception(
                "Expected gohighlevel.contact.get; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isGoogleCalendarAvailabilityCheck(): bool
    {
        return $this->value instanceof CreateGoogleCalendarCheckAvailabilityToolDto && $this->type === 'google.calendar.availability.check';
    }

    /**
     * @return CreateGoogleCalendarCheckAvailabilityToolDto
     */
    public function asGoogleCalendarAvailabilityCheck(): CreateGoogleCalendarCheckAvailabilityToolDto
    {
        if (! ($this->value instanceof CreateGoogleCalendarCheckAvailabilityToolDto && $this->type === 'google.calendar.availability.check')) {
            throw new Exception(
                "Expected google.calendar.availability.check; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isGoogleCalendarEventCreate(): bool
    {
        return $this->value instanceof CreateGoogleCalendarCreateEventToolDto && $this->type === 'google.calendar.event.create';
    }

    /**
     * @return CreateGoogleCalendarCreateEventToolDto
     */
    public function asGoogleCalendarEventCreate(): CreateGoogleCalendarCreateEventToolDto
    {
        if (! ($this->value instanceof CreateGoogleCalendarCreateEventToolDto && $this->type === 'google.calendar.event.create')) {
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
        return $this->value instanceof CreateGoogleSheetsRowAppendToolDto && $this->type === 'google.sheets.row.append';
    }

    /**
     * @return CreateGoogleSheetsRowAppendToolDto
     */
    public function asGoogleSheetsRowAppend(): CreateGoogleSheetsRowAppendToolDto
    {
        if (! ($this->value instanceof CreateGoogleSheetsRowAppendToolDto && $this->type === 'google.sheets.row.append')) {
            throw new Exception(
                "Expected google.sheets.row.append; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isHandoff(): bool
    {
        return $this->value instanceof CreateHandoffToolDto && $this->type === 'handoff';
    }

    /**
     * @return CreateHandoffToolDto
     */
    public function asHandoff(): CreateHandoffToolDto
    {
        if (! ($this->value instanceof CreateHandoffToolDto && $this->type === 'handoff')) {
            throw new Exception(
                "Expected handoff; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isMcp(): bool
    {
        return $this->value instanceof CreateMcpToolDto && $this->type === 'mcp';
    }

    /**
     * @return CreateMcpToolDto
     */
    public function asMcp(): CreateMcpToolDto
    {
        if (! ($this->value instanceof CreateMcpToolDto && $this->type === 'mcp')) {
            throw new Exception(
                "Expected mcp; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isQuery(): bool
    {
        return $this->value instanceof CreateQueryToolDto && $this->type === 'query';
    }

    /**
     * @return CreateQueryToolDto
     */
    public function asQuery(): CreateQueryToolDto
    {
        if (! ($this->value instanceof CreateQueryToolDto && $this->type === 'query')) {
            throw new Exception(
                "Expected query; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isSlackMessageSend(): bool
    {
        return $this->value instanceof CreateSlackSendMessageToolDto && $this->type === 'slack.message.send';
    }

    /**
     * @return CreateSlackSendMessageToolDto
     */
    public function asSlackMessageSend(): CreateSlackSendMessageToolDto
    {
        if (! ($this->value instanceof CreateSlackSendMessageToolDto && $this->type === 'slack.message.send')) {
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
        return $this->value instanceof CreateSmsToolDto && $this->type === 'sms';
    }

    /**
     * @return CreateSmsToolDto
     */
    public function asSms(): CreateSmsToolDto
    {
        if (! ($this->value instanceof CreateSmsToolDto && $this->type === 'sms')) {
            throw new Exception(
                "Expected sms; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isTextEditor(): bool
    {
        return $this->value instanceof CreateTextEditorToolDto && $this->type === 'textEditor';
    }

    /**
     * @return CreateTextEditorToolDto
     */
    public function asTextEditor(): CreateTextEditorToolDto
    {
        if (! ($this->value instanceof CreateTextEditorToolDto && $this->type === 'textEditor')) {
            throw new Exception(
                "Expected textEditor; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isTransferCall(): bool
    {
        return $this->value instanceof CreateTransferCallToolDto && $this->type === 'transferCall';
    }

    /**
     * @return CreateTransferCallToolDto
     */
    public function asTransferCall(): CreateTransferCallToolDto
    {
        if (! ($this->value instanceof CreateTransferCallToolDto && $this->type === 'transferCall')) {
            throw new Exception(
                "Expected transferCall; got " . $this->type . " with value of type " . get_debug_type($this->value),
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
            case 'bash':
                $value = $this->asBash()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'computer':
                $value = $this->asComputer()->jsonSerialize();
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
            case 'google.calendar.availability.check':
                $value = $this->asGoogleCalendarAvailabilityCheck()->jsonSerialize();
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
            case 'handoff':
                $value = $this->asHandoff()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'mcp':
                $value = $this->asMcp()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'query':
                $value = $this->asQuery()->jsonSerialize();
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
            case 'textEditor':
                $value = $this->asTextEditor()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'transferCall':
                $value = $this->asTransferCall()->jsonSerialize();
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
                $args['value'] = CreateApiRequestToolDto::jsonDeserialize($data);
                break;
            case 'bash':
                $args['value'] = CreateBashToolDto::jsonDeserialize($data);
                break;
            case 'computer':
                $args['value'] = CreateComputerToolDto::jsonDeserialize($data);
                break;
            case 'dtmf':
                $args['value'] = CreateDtmfToolDto::jsonDeserialize($data);
                break;
            case 'endCall':
                $args['value'] = CreateEndCallToolDto::jsonDeserialize($data);
                break;
            case 'function':
                $args['value'] = CreateFunctionToolDto::jsonDeserialize($data);
                break;
            case 'gohighlevel.calendar.availability.check':
                $args['value'] = CreateGoHighLevelCalendarAvailabilityToolDto::jsonDeserialize($data);
                break;
            case 'gohighlevel.calendar.event.create':
                $args['value'] = CreateGoHighLevelCalendarEventCreateToolDto::jsonDeserialize($data);
                break;
            case 'gohighlevel.contact.create':
                $args['value'] = CreateGoHighLevelContactCreateToolDto::jsonDeserialize($data);
                break;
            case 'gohighlevel.contact.get':
                $args['value'] = CreateGoHighLevelContactGetToolDto::jsonDeserialize($data);
                break;
            case 'google.calendar.availability.check':
                $args['value'] = CreateGoogleCalendarCheckAvailabilityToolDto::jsonDeserialize($data);
                break;
            case 'google.calendar.event.create':
                $args['value'] = CreateGoogleCalendarCreateEventToolDto::jsonDeserialize($data);
                break;
            case 'google.sheets.row.append':
                $args['value'] = CreateGoogleSheetsRowAppendToolDto::jsonDeserialize($data);
                break;
            case 'handoff':
                $args['value'] = CreateHandoffToolDto::jsonDeserialize($data);
                break;
            case 'mcp':
                $args['value'] = CreateMcpToolDto::jsonDeserialize($data);
                break;
            case 'query':
                $args['value'] = CreateQueryToolDto::jsonDeserialize($data);
                break;
            case 'slack.message.send':
                $args['value'] = CreateSlackSendMessageToolDto::jsonDeserialize($data);
                break;
            case 'sms':
                $args['value'] = CreateSmsToolDto::jsonDeserialize($data);
                break;
            case 'textEditor':
                $args['value'] = CreateTextEditorToolDto::jsonDeserialize($data);
                break;
            case 'transferCall':
                $args['value'] = CreateTransferCallToolDto::jsonDeserialize($data);
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
