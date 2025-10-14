<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class RceSecurityFilter extends JsonSerializableType
{
    /**
     * @var 'rce' $type The type of security threat to filter.
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @param array{
     *   type: 'rce',
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->type = $values['type'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
