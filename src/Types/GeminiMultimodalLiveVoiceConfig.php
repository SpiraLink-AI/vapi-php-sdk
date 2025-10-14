<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class GeminiMultimodalLiveVoiceConfig extends JsonSerializableType
{
    /**
     * @var GeminiMultimodalLivePrebuiltVoiceConfig $prebuiltVoiceConfig
     */
    #[JsonProperty('prebuiltVoiceConfig')]
    public GeminiMultimodalLivePrebuiltVoiceConfig $prebuiltVoiceConfig;

    /**
     * @param array{
     *   prebuiltVoiceConfig: GeminiMultimodalLivePrebuiltVoiceConfig,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->prebuiltVoiceConfig = $values['prebuiltVoiceConfig'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
