<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class GeminiMultimodalLiveSpeechConfig extends JsonSerializableType
{
    /**
     * @var GeminiMultimodalLiveVoiceConfig $voiceConfig
     */
    #[JsonProperty('voiceConfig')]
    public GeminiMultimodalLiveVoiceConfig $voiceConfig;

    /**
     * @param array{
     *   voiceConfig: GeminiMultimodalLiveVoiceConfig,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->voiceConfig = $values['voiceConfig'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
