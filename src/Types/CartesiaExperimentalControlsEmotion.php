<?php declare(strict_types=1);

namespace Vapi\Types;

enum CartesiaExperimentalControlsEmotion: string
{
    case AngerLowest = 'anger:lowest';
    case AngerLow = 'anger:low';
    case AngerHigh = 'anger:high';
    case AngerHighest = 'anger:highest';
    case PositivityLowest = 'positivity:lowest';
    case PositivityLow = 'positivity:low';
    case PositivityHigh = 'positivity:high';
    case PositivityHighest = 'positivity:highest';
    case SurpriseLowest = 'surprise:lowest';
    case SurpriseLow = 'surprise:low';
    case SurpriseHigh = 'surprise:high';
    case SurpriseHighest = 'surprise:highest';
    case SadnessLowest = 'sadness:lowest';
    case SadnessLow = 'sadness:low';
    case SadnessHigh = 'sadness:high';
    case SadnessHighest = 'sadness:highest';
    case CuriosityLowest = 'curiosity:lowest';
    case CuriosityLow = 'curiosity:low';
    case CuriosityHigh = 'curiosity:high';
    case CuriosityHighest = 'curiosity:highest';
}
