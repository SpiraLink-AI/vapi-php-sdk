<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class CloneVoiceDto extends JsonSerializableType
{
    /**
     * @var string $name This is the name of the cloned voice in the provider account.
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?string $description This is the description of your cloned voice.
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @var ?string $labels Serialized labels dictionary for the voice.
     */
    #[JsonProperty('labels')]
    public ?string $labels;

    /**
     * @var array<string> $files These are the files you want to use to clone your voice. Only Audio files are supported.
     */
    #[JsonProperty('files'), ArrayType(['string'])]
    public array $files;

    /**
     * @param array{
     *   name: string,
     *   files: array<string>,
     *   description?: ?string,
     *   labels?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->description = $values['description'] ?? null;
        $this->labels = $values['labels'] ?? null;
        $this->files = $values['files'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
