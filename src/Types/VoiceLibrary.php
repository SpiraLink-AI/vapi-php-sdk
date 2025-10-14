<?php declare(strict_types=1);

namespace Vapi\Types;

use DateTime;
use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;
use Vapi\Core\Types\Date;

final class VoiceLibrary extends JsonSerializableType
{
    /**
     * @var ?array<string, mixed> $provider This is the voice provider that will be used.
     */
    #[JsonProperty('provider'), ArrayType(['string' => 'mixed'])]
    public ?array $provider;

    /**
     * @var ?string $providerId The ID of the voice provided by the provider.
     */
    #[JsonProperty('providerId')]
    public ?string $providerId;

    /**
     * @var ?string $slug The unique slug of the voice.
     */
    #[JsonProperty('slug')]
    public ?string $slug;

    /**
     * @var ?string $name The name of the voice.
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?string $language The language of the voice.
     */
    #[JsonProperty('language')]
    public ?string $language;

    /**
     * @var ?string $languageCode The language code of the voice.
     */
    #[JsonProperty('languageCode')]
    public ?string $languageCode;

    /**
     * @var ?string $model The model of the voice.
     */
    #[JsonProperty('model')]
    public ?string $model;

    /**
     * @var ?string $supportedModels The supported models of the voice.
     */
    #[JsonProperty('supportedModels')]
    public ?string $supportedModels;

    /**
     * @var ?value-of<VoiceLibraryGender> $gender The gender of the voice.
     */
    #[JsonProperty('gender')]
    public ?string $gender;

    /**
     * @var ?string $accent The accent of the voice.
     */
    #[JsonProperty('accent')]
    public ?string $accent;

    /**
     * @var ?string $previewUrl The preview URL of the voice.
     */
    #[JsonProperty('previewUrl')]
    public ?string $previewUrl;

    /**
     * @var ?string $description The description of the voice.
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @var ?string $credentialId The credential ID of the voice.
     */
    #[JsonProperty('credentialId')]
    public ?string $credentialId;

    /**
     * @var string $id The unique identifier for the voice library.
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $orgId The unique identifier for the organization that this voice library belongs to.
     */
    #[JsonProperty('orgId')]
    public string $orgId;

    /**
     * @var bool $isPublic The Public voice is shared accross all the organizations.
     */
    #[JsonProperty('isPublic')]
    public bool $isPublic;

    /**
     * @var bool $isDeleted The deletion status of the voice.
     */
    #[JsonProperty('isDeleted')]
    public bool $isDeleted;

    /**
     * @var DateTime $createdAt The ISO 8601 date-time string of when the voice library was created.
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $createdAt;

    /**
     * @var DateTime $updatedAt The ISO 8601 date-time string of when the voice library was last updated.
     */
    #[JsonProperty('updatedAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $updatedAt;

    /**
     * @param array{
     *   id: string,
     *   orgId: string,
     *   isPublic: bool,
     *   isDeleted: bool,
     *   createdAt: DateTime,
     *   updatedAt: DateTime,
     *   provider?: ?array<string, mixed>,
     *   providerId?: ?string,
     *   slug?: ?string,
     *   name?: ?string,
     *   language?: ?string,
     *   languageCode?: ?string,
     *   model?: ?string,
     *   supportedModels?: ?string,
     *   gender?: ?value-of<VoiceLibraryGender>,
     *   accent?: ?string,
     *   previewUrl?: ?string,
     *   description?: ?string,
     *   credentialId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->provider = $values['provider'] ?? null;
        $this->providerId = $values['providerId'] ?? null;
        $this->slug = $values['slug'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->language = $values['language'] ?? null;
        $this->languageCode = $values['languageCode'] ?? null;
        $this->model = $values['model'] ?? null;
        $this->supportedModels = $values['supportedModels'] ?? null;
        $this->gender = $values['gender'] ?? null;
        $this->accent = $values['accent'] ?? null;
        $this->previewUrl = $values['previewUrl'] ?? null;
        $this->description = $values['description'] ?? null;
        $this->credentialId = $values['credentialId'] ?? null;
        $this->id = $values['id'];
        $this->orgId = $values['orgId'];
        $this->isPublic = $values['isPublic'];
        $this->isDeleted = $values['isDeleted'];
        $this->createdAt = $values['createdAt'];
        $this->updatedAt = $values['updatedAt'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
