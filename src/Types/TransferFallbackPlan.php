<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\Union;

final class TransferFallbackPlan extends JsonSerializableType
{
    /**
     * @var (
     *    string
     *   |CustomMessage
     * ) $message This is the message the assistant will deliver to the customer if the transfer fails.
     */
    #[JsonProperty('message'), Union('string', CustomMessage::class)]
    public string|CustomMessage $message;

    /**
     * This controls what happens after delivering the failure message to the customer.
     * - true: End the call after delivering the failure message (default)
     * - false: Keep the assistant on the call to continue handling the customer's request
     *
     * @default true
     *
     * @var ?bool $endCallEnabled
     */
    #[JsonProperty('endCallEnabled')]
    public ?bool $endCallEnabled;

    /**
     * @param array{
     *   message: (
     *    string
     *   |CustomMessage
     * ),
     *   endCallEnabled?: ?bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->message = $values['message'];
        $this->endCallEnabled = $values['endCallEnabled'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
