<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class TranscriptPlan extends JsonSerializableType
{
    /**
     * This determines whether the transcript is stored in `call.artifact.transcript`. Defaults to true.
     *
     * @default true
     *
     * @var ?bool $enabled
     */
    #[JsonProperty('enabled')]
    public ?bool $enabled;

    /**
     * This is the name of the assistant in the transcript. Defaults to 'AI'.
     *
     * Usage:
     * - If you want to change the name of the assistant in the transcript, set this. Example, here is what the transcript would look like with `assistantName` set to 'Buyer':
     * ```
     * User: Hello, how are you?
     * Buyer: I'm fine.
     * User: Do you want to buy a car?
     * Buyer: No.
     * ```
     *
     * @default 'AI'
     *
     * @var ?string $assistantName
     */
    #[JsonProperty('assistantName')]
    public ?string $assistantName;

    /**
     * This is the name of the user in the transcript. Defaults to 'User'.
     *
     * Usage:
     * - If you want to change the name of the user in the transcript, set this. Example, here is what the transcript would look like with `userName` set to 'Seller':
     * ```
     * Seller: Hello, how are you?
     * AI: I'm fine.
     * Seller: Do you want to buy a car?
     * AI: No.
     * ```
     *
     * @default 'User'
     *
     * @var ?string $userName
     */
    #[JsonProperty('userName')]
    public ?string $userName;

    /**
     * @param array{
     *   enabled?: ?bool,
     *   assistantName?: ?string,
     *   userName?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->enabled = $values['enabled'] ?? null;
        $this->assistantName = $values['assistantName'] ?? null;
        $this->userName = $values['userName'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
