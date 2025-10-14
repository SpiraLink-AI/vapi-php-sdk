<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class TavusVoice extends JsonSerializableType
{
    /**
     * @var ?bool $cachingEnabled This is the flag to toggle voice caching for the assistant.
     */
    #[JsonProperty('cachingEnabled')]
    public ?bool $cachingEnabled;

    /**
     * @var (
     *    'r52da2535a'
     *   |string
     * ) $voiceId This is the provider-specific ID that will be used.
     */
    #[JsonProperty('voiceId')]
    public string $voiceId;

    /**
     * @var ?ChunkPlan $chunkPlan This is the plan for chunking the model output before it is sent to the voice provider.
     */
    #[JsonProperty('chunkPlan')]
    public ?ChunkPlan $chunkPlan;

    /**
     * @var ?string $personaId This is the unique identifier for the persona that the replica will use in the conversation.
     */
    #[JsonProperty('personaId')]
    public ?string $personaId;

    /**
     * @var ?string $callbackUrl This is the url that will receive webhooks with updates regarding the conversation state.
     */
    #[JsonProperty('callbackUrl')]
    public ?string $callbackUrl;

    /**
     * @var ?string $conversationName This is the name for the conversation.
     */
    #[JsonProperty('conversationName')]
    public ?string $conversationName;

    /**
     * @var ?string $conversationalContext This is the context that will be appended to any context provided in the persona, if one is provided.
     */
    #[JsonProperty('conversationalContext')]
    public ?string $conversationalContext;

    /**
     * @var ?string $customGreeting This is the custom greeting that the replica will give once a participant joines the conversation.
     */
    #[JsonProperty('customGreeting')]
    public ?string $customGreeting;

    /**
     * @var ?TavusConversationProperties $properties These are optional properties used to customize the conversation.
     */
    #[JsonProperty('properties')]
    public ?TavusConversationProperties $properties;

    /**
     * @var ?FallbackPlan $fallbackPlan This is the plan for voice provider fallbacks in the event that the primary voice provider fails.
     */
    #[JsonProperty('fallbackPlan')]
    public ?FallbackPlan $fallbackPlan;

    /**
     * @param array{
     *   voiceId: (
     *    'r52da2535a'
     *   |string
     * ),
     *   cachingEnabled?: ?bool,
     *   chunkPlan?: ?ChunkPlan,
     *   personaId?: ?string,
     *   callbackUrl?: ?string,
     *   conversationName?: ?string,
     *   conversationalContext?: ?string,
     *   customGreeting?: ?string,
     *   properties?: ?TavusConversationProperties,
     *   fallbackPlan?: ?FallbackPlan,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->cachingEnabled = $values['cachingEnabled'] ?? null;
        $this->voiceId = $values['voiceId'];
        $this->chunkPlan = $values['chunkPlan'] ?? null;
        $this->personaId = $values['personaId'] ?? null;
        $this->callbackUrl = $values['callbackUrl'] ?? null;
        $this->conversationName = $values['conversationName'] ?? null;
        $this->conversationalContext = $values['conversationalContext'] ?? null;
        $this->customGreeting = $values['customGreeting'] ?? null;
        $this->properties = $values['properties'] ?? null;
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
