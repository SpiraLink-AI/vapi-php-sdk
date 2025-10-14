<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class AssistantMessageJudgePlanAi extends JsonSerializableType
{
    /**
     * This is the model to use for the LLM-as-a-judge.
     * If not provided, will default to the assistant's model.
     *
     * The instructions on how to evaluate the model output with this LLM-Judge must be passed as a system message in the messages array of the model.
     *
     * The Mock conversation can be passed to the LLM-Judge to evaluate using the prompt {{messages}} and will be evaluated as a LiquidJS Variable. To access and judge only the last message, use {{messages[-1]}}
     *
     * The LLM-Judge must respond with "pass" or "fail" and only those two responses are allowed.
     *
     * @var AssistantMessageJudgePlanAiModel $model
     */
    #[JsonProperty('model')]
    public AssistantMessageJudgePlanAiModel $model;

    /**
     * @param array{
     *   model: AssistantMessageJudgePlanAiModel,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->model = $values['model'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
