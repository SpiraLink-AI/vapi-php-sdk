<?php declare(strict_types=1);

namespace Vapi\Types;

enum FallbackGladiaTranscriberLanguageBehaviour: string
{
    case Manual = 'manual';
    case AutomaticSingleLanguage = 'automatic single language';
    case AutomaticMultipleLanguages = 'automatic multiple languages';
}
