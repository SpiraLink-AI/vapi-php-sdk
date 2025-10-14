<?php declare(strict_types=1);

namespace Vapi\Types;

enum FormatPlanFormattersEnabledItem: string
{
    case Markdown = 'markdown';
    case Asterisk = 'asterisk';
    case Quote = 'quote';
    case Dash = 'dash';
    case Newline = 'newline';
    case Colon = 'colon';
    case Acronym = 'acronym';
    case DollarAmount = 'dollarAmount';
    case Email = 'email';
    case Date = 'date';
    case Time = 'time';
    case Distance = 'distance';
    case Unit = 'unit';
    case Percentage = 'percentage';
    case PhoneNumber = 'phoneNumber';
    case Number = 'number';
    case StripAsterisk = 'stripAsterisk';
}
