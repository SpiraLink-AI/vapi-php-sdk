<?php declare(strict_types=1);

namespace Vapi\Types;

enum TwilioVoicemailDetectionPlanVoicemailDetectionTypesItem: string
{
    case MachineStart = 'machine_start';
    case Human = 'human';
    case Fax = 'fax';
    case Unknown = 'unknown';
    case MachineEndBeep = 'machine_end_beep';
    case MachineEndSilence = 'machine_end_silence';
    case MachineEndOther = 'machine_end_other';
}
