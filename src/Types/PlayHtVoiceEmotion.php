<?php declare(strict_types=1);

namespace Vapi\Types;

enum PlayHtVoiceEmotion: string
{
    case FemaleHappy = 'female_happy';
    case FemaleSad = 'female_sad';
    case FemaleAngry = 'female_angry';
    case FemaleFearful = 'female_fearful';
    case FemaleDisgust = 'female_disgust';
    case FemaleSurprised = 'female_surprised';
    case MaleHappy = 'male_happy';
    case MaleSad = 'male_sad';
    case MaleAngry = 'male_angry';
    case MaleFearful = 'male_fearful';
    case MaleDisgust = 'male_disgust';
    case MaleSurprised = 'male_surprised';
}
