<?php declare(strict_types=1);

namespace Vapi\Tools\Types;

use Exception;
use Vapi\Core\Json\JsonDecoder;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Types\UpdateApiRequestToolDto;
use Vapi\Types\UpdateBashToolDto;
use Vapi\Types\UpdateComputerToolDto;
use Vapi\Types\UpdateDtmfToolDto;
use Vapi\Types\UpdateEndCallToolDto;
use Vapi\Types\UpdateFunctionToolDto;
use Vapi\Types\UpdateGoHighLevelCalendarAvailabilityToolDto;
use Vapi\Types\UpdateGoHighLevelCalendarEventCreateToolDto;
use Vapi\Types\UpdateGoHighLevelContactCreateToolDto;
use Vapi\Types\UpdateGoHighLevelContactGetToolDto;
use Vapi\Types\UpdateGoogleCalendarCheckAvailabilityToolDto;
use Vapi\Types\UpdateGoogleCalendarCreateEventToolDto;
use Vapi\Types\UpdateGoogleSheetsRowAppendToolDto;
use Vapi\Types\UpdateHandoffToolDto;
use Vapi\Types\UpdateMcpToolDto;
use Vapi\Types\UpdateQueryToolDto;
use Vapi\Types\UpdateSlackSendMessageToolDto;
use Vapi\Types\UpdateSmsToolDto;
use Vapi\Types\UpdateTextEditorToolDto;
use Vapi\Types\UpdateTransferCallToolDto;

final class ToolsUpdateRequest extends JsonSerializableType
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
     *    UpdateApiRequestToolDto
     *   |UpdateDtmfToolDto
     *   |UpdateEndCallToolDto
     *   |UpdateFunctionToolDto
     *   |UpdateTransferCallToolDto
     *   |UpdateHandoffToolDto
     *   |UpdateBashToolDto
     *   |UpdateComputerToolDto
     *   |UpdateTextEditorToolDto
     *   |UpdateQueryToolDto
     *   |UpdateGoogleCalendarCreateEventToolDto
     *   |UpdateGoogleSheetsRowAppendToolDto
     *   |UpdateGoogleCalendarCheckAvailabilityToolDto
     *   |UpdateSlackSendMessageToolDto
     *   |UpdateSmsToolDto
     *   |UpdateMcpToolDto
     *   |UpdateGoHighLevelCalendarAvailabilityToolDto
     *   |UpdateGoHighLevelCalendarEventCreateToolDto
     *   |UpdateGoHighLevelContactCreateToolDto
     *   |UpdateGoHighLevelContactGetToolDto
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
     *    UpdateApiRequestToolDto
     *   |UpdateDtmfToolDto
     *   |UpdateEndCallToolDto
     *   |UpdateFunctionToolDto
     *   |UpdateTransferCallToolDto
     *   |UpdateHandoffToolDto
     *   |UpdateBashToolDto
     *   |UpdateComputerToolDto
     *   |UpdateTextEditorToolDto
     *   |UpdateQueryToolDto
     *   |UpdateGoogleCalendarCreateEventToolDto
     *   |UpdateGoogleSheetsRowAppendToolDto
     *   |UpdateGoogleCalendarCheckAvailabilityToolDto
     *   |UpdateSlackSendMessageToolDto
     *   |UpdateSmsToolDto
     *   |UpdateMcpToolDto
     *   |UpdateGoHighLevelCalendarAvailabilityToolDto
     *   |UpdateGoHighLevelCalendarEventCreateToolDto
     *   |UpdateGoHighLevelContactCreateToolDto
     *   |UpdateGoHighLevelContactGetToolDto
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
     * @param UpdateApiRequestToolDto $apiRequest
     * @return ToolsUpdateRequest
     */
    public static function apiRequest(UpdateApiRequestToolDto $apiRequest): ToolsUpdateRequest
    {
        return new ToolsUpdateRequest([
            'type' => 'apiRequest',
            'value' => $apiRequest,
        ]);
    }

    /**
     * @param UpdateDtmfToolDto $dtmf
     * @return ToolsUpdateRequest
     */
    public static function dtmf(UpdateDtmfToolDto $dtmf): ToolsUpdateRequest
    {
        return new ToolsUpdateRequest([
            'type' => 'dtmf',
            'value' => $dtmf,
        ]);
    }

    /**
     * @param UpdateEndCallToolDto $endCall
     * @return ToolsUpdateRequest
     */
    public static function endCall(UpdateEndCallToolDto $endCall): ToolsUpdateRequest
    {
        return new ToolsUpdateRequest([
            'type' => 'endCall',
            'value' => $endCall,
        ]);
    }

    /**
     * @param UpdateFunctionToolDto $function
     * @return ToolsUpdateRequest
     */
    public static function function(UpdateFunctionToolDto $function): ToolsUpdateRequest
    {
        return new ToolsUpdateRequest([
            'type' => 'function',
            'value' => $function,
        ]);
    }

    /**
     * @param UpdateTransferCallToolDto $transferCall
     * @return ToolsUpdateRequest
     */
    public static function transferCall(UpdateTransferCallToolDto $transferCall): ToolsUpdateRequest
    {
        return new ToolsUpdateRequest([
            'type' => 'transferCall',
            'value' => $transferCall,
        ]);
    }

    /**
     * @param UpdateHandoffToolDto $handoff
     * @return ToolsUpdateRequest
     */
    public static function handoff(UpdateHandoffToolDto $handoff): ToolsUpdateRequest
    {
        return new ToolsUpdateRequest([
            'type' => 'handoff',
            'value' => $handoff,
        ]);
    }

    /**
     * @param UpdateBashToolDto $bash
     * @return ToolsUpdateRequest
     */
    public static function bash(UpdateBashToolDto $bash): ToolsUpdateRequest
    {
        return new ToolsUpdateRequest([
            'type' => 'bash',
            'value' => $bash,
        ]);
    }

    /**
     * @param UpdateComputerToolDto $computer
     * @return ToolsUpdateRequest
     */
    public static function computer(UpdateComputerToolDto $computer): ToolsUpdateRequest
    {
        return new ToolsUpdateRequest([
            'type' => 'computer',
            'value' => $computer,
        ]);
    }

    /**
     * @param UpdateTextEditorToolDto $textEditor
     * @return ToolsUpdateRequest
     */
    public static function textEditor(UpdateTextEditorToolDto $textEditor): ToolsUpdateRequest
    {
        return new ToolsUpdateRequest([
            'type' => 'textEditor',
            'value' => $textEditor,
        ]);
    }

    /**
     * @param UpdateQueryToolDto $query
     * @return ToolsUpdateRequest
     */
    public static function query(UpdateQueryToolDto $query): ToolsUpdateRequest
    {
        return new ToolsUpdateRequest([
            'type' => 'query',
            'value' => $query,
        ]);
    }

    /**
     * @param UpdateGoogleCalendarCreateEventToolDto $googleCalendarEventCreate
     * @return ToolsUpdateRequest
     */
    public static function googleCalendarEventCreate(UpdateGoogleCalendarCreateEventToolDto $googleCalendarEventCreate): ToolsUpdateRequest
    {
        return new ToolsUpdateRequest([
            'type' => 'google.calendar.event.create',
            'value' => $googleCalendarEventCreate,
        ]);
    }

    /**
     * @param UpdateGoogleSheetsRowAppendToolDto $googleSheetsRowAppend
     * @return ToolsUpdateRequest
     */
    public static function googleSheetsRowAppend(UpdateGoogleSheetsRowAppendToolDto $googleSheetsRowAppend): ToolsUpdateRequest
    {
        return new ToolsUpdateRequest([
            'type' => 'google.sheets.row.append',
            'value' => $googleSheetsRowAppend,
        ]);
    }

    /**
     * @param UpdateGoogleCalendarCheckAvailabilityToolDto $googleCalendarAvailabilityCheck
     * @return ToolsUpdateRequest
     */
    public static function googleCalendarAvailabilityCheck(UpdateGoogleCalendarCheckAvailabilityToolDto $googleCalendarAvailabilityCheck): ToolsUpdateRequest
    {
        return new ToolsUpdateRequest([
            'type' => 'google.calendar.availability.check',
            'value' => $googleCalendarAvailabilityCheck,
        ]);
    }

    /**
     * @param UpdateSlackSendMessageToolDto $slackMessageSend
     * @return ToolsUpdateRequest
     */
    public static function slackMessageSend(UpdateSlackSendMessageToolDto $slackMessageSend): ToolsUpdateRequest
    {
        return new ToolsUpdateRequest([
            'type' => 'slack.message.send',
            'value' => $slackMessageSend,
        ]);
    }

    /**
     * @param UpdateSmsToolDto $sms
     * @return ToolsUpdateRequest
     */
    public static function sms(UpdateSmsToolDto $sms): ToolsUpdateRequest
    {
        return new ToolsUpdateRequest([
            'type' => 'sms',
            'value' => $sms,
        ]);
    }

    /**
     * @param UpdateMcpToolDto $mcp
     * @return ToolsUpdateRequest
     */
    public static function mcp(UpdateMcpToolDto $mcp): ToolsUpdateRequest
    {
        return new ToolsUpdateRequest([
            'type' => 'mcp',
            'value' => $mcp,
        ]);
    }

    /**
     * @param UpdateGoHighLevelCalendarAvailabilityToolDto $gohighlevelCalendarAvailabilityCheck
     * @return ToolsUpdateRequest
     */
    public static function gohighlevelCalendarAvailabilityCheck(UpdateGoHighLevelCalendarAvailabilityToolDto $gohighlevelCalendarAvailabilityCheck): ToolsUpdateRequest
    {
        return new ToolsUpdateRequest([
            'type' => 'gohighlevel.calendar.availability.check',
            'value' => $gohighlevelCalendarAvailabilityCheck,
        ]);
    }

    /**
     * @param UpdateGoHighLevelCalendarEventCreateToolDto $gohighlevelCalendarEventCreate
     * @return ToolsUpdateRequest
     */
    public static function gohighlevelCalendarEventCreate(UpdateGoHighLevelCalendarEventCreateToolDto $gohighlevelCalendarEventCreate): ToolsUpdateRequest
    {
        return new ToolsUpdateRequest([
            'type' => 'gohighlevel.calendar.event.create',
            'value' => $gohighlevelCalendarEventCreate,
        ]);
    }

    /**
     * @param UpdateGoHighLevelContactCreateToolDto $gohighlevelContactCreate
     * @return ToolsUpdateRequest
     */
    public static function gohighlevelContactCreate(UpdateGoHighLevelContactCreateToolDto $gohighlevelContactCreate): ToolsUpdateRequest
    {
        return new ToolsUpdateRequest([
            'type' => 'gohighlevel.contact.create',
            'value' => $gohighlevelContactCreate,
        ]);
    }

    /**
     * @param UpdateGoHighLevelContactGetToolDto $gohighlevelContactGet
     * @return ToolsUpdateRequest
     */
    public static function gohighlevelContactGet(UpdateGoHighLevelContactGetToolDto $gohighlevelContactGet): ToolsUpdateRequest
    {
        return new ToolsUpdateRequest([
            'type' => 'gohighlevel.contact.get',
            'value' => $gohighlevelContactGet,
        ]);
    }

    /**
     * @return bool
     */
    public function isApiRequest(): bool
    {
        return $this->value instanceof UpdateApiRequestToolDto && $this->type === 'apiRequest';
    }

    /**
     * @return UpdateApiRequestToolDto
     */
    public function asApiRequest(): UpdateApiRequestToolDto
    {
        if (! ($this->value instanceof UpdateApiRequestToolDto && $this->type === 'apiRequest')) {
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
        return $this->value instanceof UpdateDtmfToolDto && $this->type === 'dtmf';
    }

    /**
     * @return UpdateDtmfToolDto
     */
    public function asDtmf(): UpdateDtmfToolDto
    {
        if (! ($this->value instanceof UpdateDtmfToolDto && $this->type === 'dtmf')) {
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
        return $this->value instanceof UpdateEndCallToolDto && $this->type === 'endCall';
    }

    /**
     * @return UpdateEndCallToolDto
     */
    public function asEndCall(): UpdateEndCallToolDto
    {
        if (! ($this->value instanceof UpdateEndCallToolDto && $this->type === 'endCall')) {
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
        return $this->value instanceof UpdateFunctionToolDto && $this->type === 'function';
    }

    /**
     * @return UpdateFunctionToolDto
     */
    public function asFunction_(): UpdateFunctionToolDto
    {
        if (! ($this->value instanceof UpdateFunctionToolDto && $this->type === 'function')) {
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
        return $this->value instanceof UpdateTransferCallToolDto && $this->type === 'transferCall';
    }

    /**
     * @return UpdateTransferCallToolDto
     */
    public function asTransferCall(): UpdateTransferCallToolDto
    {
        if (! ($this->value instanceof UpdateTransferCallToolDto && $this->type === 'transferCall')) {
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
        return $this->value instanceof UpdateHandoffToolDto && $this->type === 'handoff';
    }

    /**
     * @return UpdateHandoffToolDto
     */
    public function asHandoff(): UpdateHandoffToolDto
    {
        if (! ($this->value instanceof UpdateHandoffToolDto && $this->type === 'handoff')) {
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
        return $this->value instanceof UpdateBashToolDto && $this->type === 'bash';
    }

    /**
     * @return UpdateBashToolDto
     */
    public function asBash(): UpdateBashToolDto
    {
        if (! ($this->value instanceof UpdateBashToolDto && $this->type === 'bash')) {
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
        return $this->value instanceof UpdateComputerToolDto && $this->type === 'computer';
    }

    /**
     * @return UpdateComputerToolDto
     */
    public function asComputer(): UpdateComputerToolDto
    {
        if (! ($this->value instanceof UpdateComputerToolDto && $this->type === 'computer')) {
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
        return $this->value instanceof UpdateTextEditorToolDto && $this->type === 'textEditor';
    }

    /**
     * @return UpdateTextEditorToolDto
     */
    public function asTextEditor(): UpdateTextEditorToolDto
    {
        if (! ($this->value instanceof UpdateTextEditorToolDto && $this->type === 'textEditor')) {
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
        return $this->value instanceof UpdateQueryToolDto && $this->type === 'query';
    }

    /**
     * @return UpdateQueryToolDto
     */
    public function asQuery(): UpdateQueryToolDto
    {
        if (! ($this->value instanceof UpdateQueryToolDto && $this->type === 'query')) {
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
        return $this->value instanceof UpdateGoogleCalendarCreateEventToolDto && $this->type === 'google.calendar.event.create';
    }

    /**
     * @return UpdateGoogleCalendarCreateEventToolDto
     */
    public function asGoogleCalendarEventCreate(): UpdateGoogleCalendarCreateEventToolDto
    {
        if (! ($this->value instanceof UpdateGoogleCalendarCreateEventToolDto && $this->type === 'google.calendar.event.create')) {
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
        return $this->value instanceof UpdateGoogleSheetsRowAppendToolDto && $this->type === 'google.sheets.row.append';
    }

    /**
     * @return UpdateGoogleSheetsRowAppendToolDto
     */
    public function asGoogleSheetsRowAppend(): UpdateGoogleSheetsRowAppendToolDto
    {
        if (! ($this->value instanceof UpdateGoogleSheetsRowAppendToolDto && $this->type === 'google.sheets.row.append')) {
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
        return $this->value instanceof UpdateGoogleCalendarCheckAvailabilityToolDto && $this->type === 'google.calendar.availability.check';
    }

    /**
     * @return UpdateGoogleCalendarCheckAvailabilityToolDto
     */
    public function asGoogleCalendarAvailabilityCheck(): UpdateGoogleCalendarCheckAvailabilityToolDto
    {
        if (! ($this->value instanceof UpdateGoogleCalendarCheckAvailabilityToolDto && $this->type === 'google.calendar.availability.check')) {
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
        return $this->value instanceof UpdateSlackSendMessageToolDto && $this->type === 'slack.message.send';
    }

    /**
     * @return UpdateSlackSendMessageToolDto
     */
    public function asSlackMessageSend(): UpdateSlackSendMessageToolDto
    {
        if (! ($this->value instanceof UpdateSlackSendMessageToolDto && $this->type === 'slack.message.send')) {
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
        return $this->value instanceof UpdateSmsToolDto && $this->type === 'sms';
    }

    /**
     * @return UpdateSmsToolDto
     */
    public function asSms(): UpdateSmsToolDto
    {
        if (! ($this->value instanceof UpdateSmsToolDto && $this->type === 'sms')) {
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
        return $this->value instanceof UpdateMcpToolDto && $this->type === 'mcp';
    }

    /**
     * @return UpdateMcpToolDto
     */
    public function asMcp(): UpdateMcpToolDto
    {
        if (! ($this->value instanceof UpdateMcpToolDto && $this->type === 'mcp')) {
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
        return $this->value instanceof UpdateGoHighLevelCalendarAvailabilityToolDto && $this->type === 'gohighlevel.calendar.availability.check';
    }

    /**
     * @return UpdateGoHighLevelCalendarAvailabilityToolDto
     */
    public function asGohighlevelCalendarAvailabilityCheck(): UpdateGoHighLevelCalendarAvailabilityToolDto
    {
        if (! ($this->value instanceof UpdateGoHighLevelCalendarAvailabilityToolDto && $this->type === 'gohighlevel.calendar.availability.check')) {
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
        return $this->value instanceof UpdateGoHighLevelCalendarEventCreateToolDto && $this->type === 'gohighlevel.calendar.event.create';
    }

    /**
     * @return UpdateGoHighLevelCalendarEventCreateToolDto
     */
    public function asGohighlevelCalendarEventCreate(): UpdateGoHighLevelCalendarEventCreateToolDto
    {
        if (! ($this->value instanceof UpdateGoHighLevelCalendarEventCreateToolDto && $this->type === 'gohighlevel.calendar.event.create')) {
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
        return $this->value instanceof UpdateGoHighLevelContactCreateToolDto && $this->type === 'gohighlevel.contact.create';
    }

    /**
     * @return UpdateGoHighLevelContactCreateToolDto
     */
    public function asGohighlevelContactCreate(): UpdateGoHighLevelContactCreateToolDto
    {
        if (! ($this->value instanceof UpdateGoHighLevelContactCreateToolDto && $this->type === 'gohighlevel.contact.create')) {
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
        return $this->value instanceof UpdateGoHighLevelContactGetToolDto && $this->type === 'gohighlevel.contact.get';
    }

    /**
     * @return UpdateGoHighLevelContactGetToolDto
     */
    public function asGohighlevelContactGet(): UpdateGoHighLevelContactGetToolDto
    {
        if (! ($this->value instanceof UpdateGoHighLevelContactGetToolDto && $this->type === 'gohighlevel.contact.get')) {
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
                $args['value'] = UpdateApiRequestToolDto::jsonDeserialize($data);
                break;
            case 'dtmf':
                $args['value'] = UpdateDtmfToolDto::jsonDeserialize($data);
                break;
            case 'endCall':
                $args['value'] = UpdateEndCallToolDto::jsonDeserialize($data);
                break;
            case 'function':
                $args['value'] = UpdateFunctionToolDto::jsonDeserialize($data);
                break;
            case 'transferCall':
                $args['value'] = UpdateTransferCallToolDto::jsonDeserialize($data);
                break;
            case 'handoff':
                $args['value'] = UpdateHandoffToolDto::jsonDeserialize($data);
                break;
            case 'bash':
                $args['value'] = UpdateBashToolDto::jsonDeserialize($data);
                break;
            case 'computer':
                $args['value'] = UpdateComputerToolDto::jsonDeserialize($data);
                break;
            case 'textEditor':
                $args['value'] = UpdateTextEditorToolDto::jsonDeserialize($data);
                break;
            case 'query':
                $args['value'] = UpdateQueryToolDto::jsonDeserialize($data);
                break;
            case 'google.calendar.event.create':
                $args['value'] = UpdateGoogleCalendarCreateEventToolDto::jsonDeserialize($data);
                break;
            case 'google.sheets.row.append':
                $args['value'] = UpdateGoogleSheetsRowAppendToolDto::jsonDeserialize($data);
                break;
            case 'google.calendar.availability.check':
                $args['value'] = UpdateGoogleCalendarCheckAvailabilityToolDto::jsonDeserialize($data);
                break;
            case 'slack.message.send':
                $args['value'] = UpdateSlackSendMessageToolDto::jsonDeserialize($data);
                break;
            case 'sms':
                $args['value'] = UpdateSmsToolDto::jsonDeserialize($data);
                break;
            case 'mcp':
                $args['value'] = UpdateMcpToolDto::jsonDeserialize($data);
                break;
            case 'gohighlevel.calendar.availability.check':
                $args['value'] = UpdateGoHighLevelCalendarAvailabilityToolDto::jsonDeserialize($data);
                break;
            case 'gohighlevel.calendar.event.create':
                $args['value'] = UpdateGoHighLevelCalendarEventCreateToolDto::jsonDeserialize($data);
                break;
            case 'gohighlevel.contact.create':
                $args['value'] = UpdateGoHighLevelContactCreateToolDto::jsonDeserialize($data);
                break;
            case 'gohighlevel.contact.get':
                $args['value'] = UpdateGoHighLevelContactGetToolDto::jsonDeserialize($data);
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
