<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class PhoneNumberHookCallEnding extends JsonSerializableType
{
    /**
     * @var ?array<PhoneNumberCallEndingHookFilter> $filters Optional filters to decide when to trigger - restricted to assistant-request related ended reasons
     */
    #[JsonProperty('filters'), ArrayType([PhoneNumberCallEndingHookFilter::class])]
    public ?array $filters;

    /**
     * @var ?PhoneNumberHookCallEndingDo $do This is the action to perform when the hook triggers
     */
    #[JsonProperty('do')]
    public ?PhoneNumberHookCallEndingDo $do;

    /**
     * @param array{
     *   filters?: ?array<PhoneNumberCallEndingHookFilter>,
     *   do?: ?PhoneNumberHookCallEndingDo,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->filters = $values['filters'] ?? null;
        $this->do = $values['do'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
