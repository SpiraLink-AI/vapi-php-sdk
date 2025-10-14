<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class ElevenLabsPronunciationDictionary extends JsonSerializableType
{
    /**
     * @var string $pronunciationDictionaryId The ID of the pronunciation dictionary
     */
    #[JsonProperty('pronunciationDictionaryId')]
    public string $pronunciationDictionaryId;

    /**
     * @var string $dictionaryName The name of the pronunciation dictionary
     */
    #[JsonProperty('dictionaryName')]
    public string $dictionaryName;

    /**
     * @var string $createdBy The user ID of the creator
     */
    #[JsonProperty('createdBy')]
    public string $createdBy;

    /**
     * @var float $creationTimeUnix The creation time in Unix timestamp
     */
    #[JsonProperty('creationTimeUnix')]
    public float $creationTimeUnix;

    /**
     * @var string $versionId The version ID of the pronunciation dictionary
     */
    #[JsonProperty('versionId')]
    public string $versionId;

    /**
     * @var float $versionRulesNum The number of rules in this version
     */
    #[JsonProperty('versionRulesNum')]
    public float $versionRulesNum;

    /**
     * @var ?value-of<ElevenLabsPronunciationDictionaryPermissionOnResource> $permissionOnResource The permission level on this resource
     */
    #[JsonProperty('permissionOnResource')]
    public ?string $permissionOnResource;

    /**
     * @var ?string $description The description of the pronunciation dictionary
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @param array{
     *   pronunciationDictionaryId: string,
     *   dictionaryName: string,
     *   createdBy: string,
     *   creationTimeUnix: float,
     *   versionId: string,
     *   versionRulesNum: float,
     *   permissionOnResource?: ?value-of<ElevenLabsPronunciationDictionaryPermissionOnResource>,
     *   description?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->pronunciationDictionaryId = $values['pronunciationDictionaryId'];
        $this->dictionaryName = $values['dictionaryName'];
        $this->createdBy = $values['createdBy'];
        $this->creationTimeUnix = $values['creationTimeUnix'];
        $this->versionId = $values['versionId'];
        $this->versionRulesNum = $values['versionRulesNum'];
        $this->permissionOnResource = $values['permissionOnResource'] ?? null;
        $this->description = $values['description'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
