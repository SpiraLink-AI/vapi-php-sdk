<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class SyncVoiceLibraryDto extends JsonSerializableType
{
    /**
     * @var ?array<value-of<SyncVoiceLibraryDtoProvidersItem>> $providers List of providers you want to sync.
     */
    #[JsonProperty('providers'), ArrayType(['string'])]
    public ?array $providers;

    /**
     * @param array{
     *   providers?: ?array<value-of<SyncVoiceLibraryDtoProvidersItem>>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->providers = $values['providers'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
