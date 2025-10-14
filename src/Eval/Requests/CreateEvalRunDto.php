<?php declare(strict_types=1);

namespace Vapi\Eval\Requests;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Eval\Types\CreateEvalRunDtoTarget;
use Vapi\Types\CreateEvalDto;

final class CreateEvalRunDto extends JsonSerializableType
{
    /**
     * @var ?CreateEvalDto $eval This is the transient eval that will be run
     */
    #[JsonProperty('eval')]
    public ?CreateEvalDto $eval;

    /**
     * @var CreateEvalRunDtoTarget $target This is the target that will be run against the eval
     */
    #[JsonProperty('target')]
    public CreateEvalRunDtoTarget $target;

    /**
     * This is the type of the run.
     * Currently it is fixed to `eval`.
     *
     * @var 'eval' $type
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var ?string $evalId This is the id of the eval that will be run.
     */
    #[JsonProperty('evalId')]
    public ?string $evalId;

    /**
     * @param array{
     *   target: CreateEvalRunDtoTarget,
     *   type: 'eval',
     *   eval?: ?CreateEvalDto,
     *   evalId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->eval = $values['eval'] ?? null;
        $this->target = $values['target'];
        $this->type = $values['type'];
        $this->evalId = $values['evalId'] ?? null;
    }
}
