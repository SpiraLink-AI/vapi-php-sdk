<?php declare(strict_types=1);

namespace Vapi\Calls\Requests;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class DeleteCallDto extends JsonSerializableType
{
    /**
     * These are the Call IDs to be bulk deleted.
     * If provided, the call ID if any in the request query will be ignored
     * When requesting a bulk delete, updates when a call is deleted will be sent as a webhook to the server URL configured in the Org settings.
     * It may take up to a few hours to complete the bulk delete, and will be asynchronous.
     *
     * @var ?array<string> $ids
     */
    #[JsonProperty('ids'), ArrayType(['string'])]
    public ?array $ids;

    /**
     * @param array{
     *   ids?: ?array<string>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->ids = $values['ids'] ?? null;
    }
}
