<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class CallHookCallEnding extends JsonSerializableType
{
    /**
     * @var 'call.ending' $on This is the event that triggers this hook
     */
    #[JsonProperty('on')]
    public string $on;

    /**
     * @var array<ToolCallHookAction> $do This is the set of actions to perform when the hook triggers
     */
    #[JsonProperty('do'), ArrayType([ToolCallHookAction::class])]
    public array $do;

    /**
     * @var ?array<CallHookFilter> $filters This is the set of filters that must match for the hook to trigger
     */
    #[JsonProperty('filters'), ArrayType([CallHookFilter::class])]
    public ?array $filters;

    /**
     * @param array{
     *   on: 'call.ending',
     *   do: array<ToolCallHookAction>,
     *   filters?: ?array<CallHookFilter>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->on = $values['on'];
        $this->do = $values['do'];
        $this->filters = $values['filters'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
