<?php declare(strict_types=1);

namespace Vapi\Files\Requests;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class UpdateFileDto extends JsonSerializableType
{
    /**
     * @var ?string $name This is the name of the file. This is just for your own reference.
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @param array{
     *   name?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->name = $values['name'] ?? null;
    }
}
