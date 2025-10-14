<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class LangfuseObservabilityPlan extends JsonSerializableType
{
    /**
     * @var 'langfuse' $provider
     */
    #[JsonProperty('provider')]
    public string $provider;

    /**
     * @var array<string> $tags This is an array of tags to be added to the Langfuse trace. Tags allow you to categorize and filter traces. https://langfuse.com/docs/tracing-features/tags
     */
    #[JsonProperty('tags'), ArrayType(['string'])]
    public array $tags;

    /**
     * This is a JSON object that will be added to the Langfuse trace. Traces can be enriched with metadata to better understand your users, application, and experiments. https://langfuse.com/docs/tracing-features/metadata
     * By default it includes the call metadata, assistant metadata, and assistant overrides.
     *
     * @var ?array<string, mixed> $metadata
     */
    #[JsonProperty('metadata'), ArrayType(['string' => 'mixed'])]
    public ?array $metadata;

    /**
     * @param array{
     *   provider: 'langfuse',
     *   tags: array<string>,
     *   metadata?: ?array<string, mixed>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->provider = $values['provider'];
        $this->tags = $values['tags'];
        $this->metadata = $values['metadata'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
