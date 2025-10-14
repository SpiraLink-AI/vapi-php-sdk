<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class CreateSesameVoiceDto extends JsonSerializableType
{
    /**
     * @var ?string $voiceName The name of the voice.
     */
    #[JsonProperty('voiceName')]
    public ?string $voiceName;

    /**
     * @var ?string $transcription The transcript of the utterance.
     */
    #[JsonProperty('transcription')]
    public ?string $transcription;

    /**
     * @param array{
     *   voiceName?: ?string,
     *   transcription?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->voiceName = $values['voiceName'] ?? null;
        $this->transcription = $values['transcription'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
