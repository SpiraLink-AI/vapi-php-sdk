<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class GeminiMultimodalLivePrebuiltVoiceConfig extends JsonSerializableType
{
    /**
     * @var value-of<GeminiMultimodalLivePrebuiltVoiceConfigVoiceName> $voiceName
     */
    #[JsonProperty('voiceName')]
    public string $voiceName;

    /**
     * @param array{
     *   voiceName: value-of<GeminiMultimodalLivePrebuiltVoiceConfigVoiceName>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->voiceName = $values['voiceName'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
