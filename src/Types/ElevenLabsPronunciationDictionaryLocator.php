<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class ElevenLabsPronunciationDictionaryLocator extends JsonSerializableType
{
    /**
     * @var string $pronunciationDictionaryId This is the ID of the pronunciation dictionary to use.
     */
    #[JsonProperty('pronunciationDictionaryId')]
    public string $pronunciationDictionaryId;

    /**
     * @var string $versionId This is the version ID of the pronunciation dictionary to use.
     */
    #[JsonProperty('versionId')]
    public string $versionId;

    /**
     * @param array{
     *   pronunciationDictionaryId: string,
     *   versionId: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->pronunciationDictionaryId = $values['pronunciationDictionaryId'];
        $this->versionId = $values['versionId'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
