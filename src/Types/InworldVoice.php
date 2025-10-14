<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class InworldVoice extends JsonSerializableType
{
    /**
     * @var ?bool $cachingEnabled This is the flag to toggle voice caching for the assistant.
     */
    #[JsonProperty('cachingEnabled')]
    public ?bool $cachingEnabled;

    /**
     * Available voices by language:
     * • en: Alex, Ashley, Craig, Deborah, Dennis, Edward, Elizabeth, Hades, Julia, Pixie, Mark, Olivia, Priya, Ronald, Sarah, Shaun, Theodore, Timothy, Wendy, Dominus
     * • zh: Yichen, Xiaoyin, Xinyi, Jing
     * • nl: Erik, Katrien, Lennart, Lore
     * • fr: Alain, Hélène, Mathieu, Étienne
     * • de: Johanna, Josef
     * • it: Gianni, Orietta
     * • ja: Asuka, Satoshi
     * • ko: Hyunwoo, Minji, Seojun, Yoona
     * • pl: Szymon, Wojciech
     * • pt: Heitor, Maitê
     * • es: Diego, Lupita, Miguel, Rafael
     *
     * @var value-of<InworldVoiceVoiceId> $voiceId
     */
    #[JsonProperty('voiceId')]
    public string $voiceId;

    /**
     * @var ?'inworld-tts-1' $model This is the model that will be used.
     */
    #[JsonProperty('model')]
    public ?string $model;

    /**
     * @var ?value-of<InworldVoiceLanguageCode> $languageCode Language code for Inworld TTS synthesis
     */
    #[JsonProperty('languageCode')]
    public ?string $languageCode;

    /**
     * @var ?ChunkPlan $chunkPlan This is the plan for chunking the model output before it is sent to the voice provider.
     */
    #[JsonProperty('chunkPlan')]
    public ?ChunkPlan $chunkPlan;

    /**
     * @var ?FallbackPlan $fallbackPlan This is the plan for voice provider fallbacks in the event that the primary voice provider fails.
     */
    #[JsonProperty('fallbackPlan')]
    public ?FallbackPlan $fallbackPlan;

    /**
     * @param array{
     *   voiceId: value-of<InworldVoiceVoiceId>,
     *   cachingEnabled?: ?bool,
     *   model?: ?'inworld-tts-1',
     *   languageCode?: ?value-of<InworldVoiceLanguageCode>,
     *   chunkPlan?: ?ChunkPlan,
     *   fallbackPlan?: ?FallbackPlan,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->cachingEnabled = $values['cachingEnabled'] ?? null;
        $this->voiceId = $values['voiceId'];
        $this->model = $values['model'] ?? null;
        $this->languageCode = $values['languageCode'] ?? null;
        $this->chunkPlan = $values['chunkPlan'] ?? null;
        $this->fallbackPlan = $values['fallbackPlan'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
