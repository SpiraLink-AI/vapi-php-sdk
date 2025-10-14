<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;

final class ResponseOutputText extends JsonSerializableType
{
    /**
     * @var array<array<string, mixed>> $annotations Annotations in the text output
     */
    #[JsonProperty('annotations'), ArrayType([['string' => 'mixed']])]
    public array $annotations;

    /**
     * @var string $text The text output from the model
     */
    #[JsonProperty('text')]
    public string $text;

    /**
     * @var 'output_text' $type The type of the output text
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @param array{
     *   annotations: array<array<string, mixed>>,
     *   text: string,
     *   type: 'output_text',
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->annotations = $values['annotations'];
        $this->text = $values['text'];
        $this->type = $values['type'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
