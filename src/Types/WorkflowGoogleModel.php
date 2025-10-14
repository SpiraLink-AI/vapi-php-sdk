<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class WorkflowGoogleModel extends JsonSerializableType
{
    /**
     * @var value-of<WorkflowGoogleModelModel> $model This is the name of the model. Ex. cognitivecomputations/dolphin-mixtral-8x7b
     */
    #[JsonProperty('model')]
    public string $model;

    /**
     * @var ?float $temperature This is the temperature of the model.
     */
    #[JsonProperty('temperature')]
    public ?float $temperature;

    /**
     * @var ?float $maxTokens This is the max tokens of the model.
     */
    #[JsonProperty('maxTokens')]
    public ?float $maxTokens;

    /**
     * @param array{
     *   model: value-of<WorkflowGoogleModelModel>,
     *   temperature?: ?float,
     *   maxTokens?: ?float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->model = $values['model'];
        $this->temperature = $values['temperature'] ?? null;
        $this->maxTokens = $values['maxTokens'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
