<?php declare(strict_types=1);

namespace Vapi\Core\Json;

use JsonException;

final readonly class JsonEncoder
{
    /**
     * Encodes a PHP value into JSON string.
     *
     * @param mixed $value The PHP value to encode.
     * @return string The encoded string.
     * @throws JsonException
     */
    public static function encode(mixed $value): string
    {
        return json_encode($value, JSON_THROW_ON_ERROR);
    }
}
