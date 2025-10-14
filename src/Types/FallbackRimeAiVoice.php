<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class FallbackRimeAiVoice extends JsonSerializableType
{
    /**
     * @var ?bool $cachingEnabled This is the flag to toggle voice caching for the assistant.
     */
    #[JsonProperty('cachingEnabled')]
    public ?bool $cachingEnabled;

    /**
     * @var (
     *    'abbie'
     *   |'allison'
     *   |'ally'
     *   |'alona'
     *   |'amber'
     *   |'ana'
     *   |'antoine'
     *   |'armon'
     *   |'brenda'
     *   |'brittany'
     *   |'carol'
     *   |'colin'
     *   |'courtney'
     *   |'elena'
     *   |'elliot'
     *   |'eva'
     *   |'geoff'
     *   |'gerald'
     *   |'hank'
     *   |'helen'
     *   |'hera'
     *   |'jen'
     *   |'joe'
     *   |'joy'
     *   |'juan'
     *   |'kendra'
     *   |'kendrick'
     *   |'kenneth'
     *   |'kevin'
     *   |'kris'
     *   |'linda'
     *   |'madison'
     *   |'marge'
     *   |'marina'
     *   |'marissa'
     *   |'marta'
     *   |'maya'
     *   |'nicholas'
     *   |'nyles'
     *   |'phil'
     *   |'reba'
     *   |'rex'
     *   |'rick'
     *   |'ritu'
     *   |'rob'
     *   |'rodney'
     *   |'rohan'
     *   |'rosco'
     *   |'samantha'
     *   |'sandy'
     *   |'selena'
     *   |'seth'
     *   |'sharon'
     *   |'stan'
     *   |'tamra'
     *   |'tanya'
     *   |'tibur'
     *   |'tj'
     *   |'tyler'
     *   |'viv'
     *   |'yadira'
     *   |'marsh'
     *   |'bayou'
     *   |'creek'
     *   |'brook'
     *   |'flower'
     *   |'spore'
     *   |'glacier'
     *   |'gulch'
     *   |'alpine'
     *   |'cove'
     *   |'lagoon'
     *   |'tundra'
     *   |'steppe'
     *   |'mesa'
     *   |'grove'
     *   |'rainforest'
     *   |'moraine'
     *   |'wildflower'
     *   |'peak'
     *   |'boulder'
     *   |'gypsum'
     *   |'zest'
     *   |'luna'
     *   |'celeste'
     *   |'orion'
     *   |'ursa'
     *   |'astra'
     *   |'esther'
     *   |'estelle'
     *   |'andromeda'
     *   |string
     * ) $voiceId This is the provider-specific ID that will be used.
     */
    #[JsonProperty('voiceId')]
    public string $voiceId;

    /**
     * @var ?value-of<FallbackRimeAiVoiceModel> $model This is the model that will be used. Defaults to 'arcana' when not specified.
     */
    #[JsonProperty('model')]
    public ?string $model;

    /**
     * @var ?float $speed This is the speed multiplier that will be used.
     */
    #[JsonProperty('speed')]
    public ?float $speed;

    /**
     * @var ?bool $pauseBetweenBrackets This is a flag that controls whether to add slight pauses using angle brackets. Example: "Hi. <200> I'd love to have a conversation with you." adds a 200ms pause between the first and second sentences.
     */
    #[JsonProperty('pauseBetweenBrackets')]
    public ?bool $pauseBetweenBrackets;

    /**
     * @var ?bool $phonemizeBetweenBrackets This is a flag that controls whether text inside brackets should be phonemized (converted to phonetic pronunciation) - Example: "{h'El.o} World" will pronounce "Hello" as expected.
     */
    #[JsonProperty('phonemizeBetweenBrackets')]
    public ?bool $phonemizeBetweenBrackets;

    /**
     * @var ?bool $reduceLatency This is a flag that controls whether to optimize for reduced latency in streaming. https://docs.rime.ai/api-reference/endpoint/websockets#param-reduce-latency
     */
    #[JsonProperty('reduceLatency')]
    public ?bool $reduceLatency;

    /**
     * @var ?string $inlineSpeedAlpha This is a string that allows inline speed control using alpha notation. https://docs.rime.ai/api-reference/endpoint/websockets#param-inline-speed-alpha
     */
    #[JsonProperty('inlineSpeedAlpha')]
    public ?string $inlineSpeedAlpha;

    /**
     * @var ?ChunkPlan $chunkPlan This is the plan for chunking the model output before it is sent to the voice provider.
     */
    #[JsonProperty('chunkPlan')]
    public ?ChunkPlan $chunkPlan;

    /**
     * @param array{
     *   voiceId: (
     *    'abbie'
     *   |'allison'
     *   |'ally'
     *   |'alona'
     *   |'amber'
     *   |'ana'
     *   |'antoine'
     *   |'armon'
     *   |'brenda'
     *   |'brittany'
     *   |'carol'
     *   |'colin'
     *   |'courtney'
     *   |'elena'
     *   |'elliot'
     *   |'eva'
     *   |'geoff'
     *   |'gerald'
     *   |'hank'
     *   |'helen'
     *   |'hera'
     *   |'jen'
     *   |'joe'
     *   |'joy'
     *   |'juan'
     *   |'kendra'
     *   |'kendrick'
     *   |'kenneth'
     *   |'kevin'
     *   |'kris'
     *   |'linda'
     *   |'madison'
     *   |'marge'
     *   |'marina'
     *   |'marissa'
     *   |'marta'
     *   |'maya'
     *   |'nicholas'
     *   |'nyles'
     *   |'phil'
     *   |'reba'
     *   |'rex'
     *   |'rick'
     *   |'ritu'
     *   |'rob'
     *   |'rodney'
     *   |'rohan'
     *   |'rosco'
     *   |'samantha'
     *   |'sandy'
     *   |'selena'
     *   |'seth'
     *   |'sharon'
     *   |'stan'
     *   |'tamra'
     *   |'tanya'
     *   |'tibur'
     *   |'tj'
     *   |'tyler'
     *   |'viv'
     *   |'yadira'
     *   |'marsh'
     *   |'bayou'
     *   |'creek'
     *   |'brook'
     *   |'flower'
     *   |'spore'
     *   |'glacier'
     *   |'gulch'
     *   |'alpine'
     *   |'cove'
     *   |'lagoon'
     *   |'tundra'
     *   |'steppe'
     *   |'mesa'
     *   |'grove'
     *   |'rainforest'
     *   |'moraine'
     *   |'wildflower'
     *   |'peak'
     *   |'boulder'
     *   |'gypsum'
     *   |'zest'
     *   |'luna'
     *   |'celeste'
     *   |'orion'
     *   |'ursa'
     *   |'astra'
     *   |'esther'
     *   |'estelle'
     *   |'andromeda'
     *   |string
     * ),
     *   cachingEnabled?: ?bool,
     *   model?: ?value-of<FallbackRimeAiVoiceModel>,
     *   speed?: ?float,
     *   pauseBetweenBrackets?: ?bool,
     *   phonemizeBetweenBrackets?: ?bool,
     *   reduceLatency?: ?bool,
     *   inlineSpeedAlpha?: ?string,
     *   chunkPlan?: ?ChunkPlan,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->cachingEnabled = $values['cachingEnabled'] ?? null;
        $this->voiceId = $values['voiceId'];
        $this->model = $values['model'] ?? null;
        $this->speed = $values['speed'] ?? null;
        $this->pauseBetweenBrackets = $values['pauseBetweenBrackets'] ?? null;
        $this->phonemizeBetweenBrackets = $values['phonemizeBetweenBrackets'] ?? null;
        $this->reduceLatency = $values['reduceLatency'] ?? null;
        $this->inlineSpeedAlpha = $values['inlineSpeedAlpha'] ?? null;
        $this->chunkPlan = $values['chunkPlan'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
