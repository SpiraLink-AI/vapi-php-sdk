<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class VoiceLibraryVoiceResponse extends JsonSerializableType
{
    /**
     * @var string $voiceId
     */
    #[JsonProperty('voiceId')]
    public string $voiceId;

    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?string $publicOwnerId
     */
    #[JsonProperty('publicOwnerId')]
    public ?string $publicOwnerId;

    /**
     * @var ?string $description
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @var ?string $gender
     */
    #[JsonProperty('gender')]
    public ?string $gender;

    /**
     * @var ?array<string, mixed> $age
     */
    #[JsonProperty('age'), ArrayType(['string' => 'mixed'])]
    public ?array $age;

    /**
     * @var ?string $accent
     */
    #[JsonProperty('accent')]
    public ?string $accent;

    /**
     * @param array{
     *   voiceId: string,
     *   name: string,
     *   publicOwnerId?: ?string,
     *   description?: ?string,
     *   gender?: ?string,
     *   age?: ?array<string, mixed>,
     *   accent?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->voiceId = $values['voiceId'];
        $this->name = $values['name'];
        $this->publicOwnerId = $values['publicOwnerId'] ?? null;
        $this->description = $values['description'] ?? null;
        $this->gender = $values['gender'] ?? null;
        $this->age = $values['age'] ?? null;
        $this->accent = $values['accent'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
