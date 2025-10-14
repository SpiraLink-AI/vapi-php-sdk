<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class ToolTemplateSetup extends JsonSerializableType
{
    /**
     * @var string $title
     */
    #[JsonProperty('title')]
    public string $title;

    /**
     * @var ?string $description
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @var ?string $videoUrl
     */
    #[JsonProperty('videoUrl')]
    public ?string $videoUrl;

    /**
     * @var ?string $docsUrl
     */
    #[JsonProperty('docsUrl')]
    public ?string $docsUrl;

    /**
     * @param array{
     *   title: string,
     *   description?: ?string,
     *   videoUrl?: ?string,
     *   docsUrl?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->title = $values['title'];
        $this->description = $values['description'] ?? null;
        $this->videoUrl = $values['videoUrl'] ?? null;
        $this->docsUrl = $values['docsUrl'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
