<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class Mono extends JsonSerializableType
{
    /**
     * @var ?string $combinedUrl This is the combined recording url for the call. To enable, set `assistant.artifactPlan.recordingEnabled`.
     */
    #[JsonProperty('combinedUrl')]
    public ?string $combinedUrl;

    /**
     * @var ?string $assistantUrl This is the mono recording url for the assistant. To enable, set `assistant.artifactPlan.recordingEnabled`.
     */
    #[JsonProperty('assistantUrl')]
    public ?string $assistantUrl;

    /**
     * @var ?string $customerUrl This is the mono recording url for the customer. To enable, set `assistant.artifactPlan.recordingEnabled`.
     */
    #[JsonProperty('customerUrl')]
    public ?string $customerUrl;

    /**
     * @param array{
     *   combinedUrl?: ?string,
     *   assistantUrl?: ?string,
     *   customerUrl?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->combinedUrl = $values['combinedUrl'] ?? null;
        $this->assistantUrl = $values['assistantUrl'] ?? null;
        $this->customerUrl = $values['customerUrl'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
