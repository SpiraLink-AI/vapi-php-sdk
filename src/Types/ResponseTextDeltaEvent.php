<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class ResponseTextDeltaEvent extends JsonSerializableType
{
    /**
     * @var float $contentIndex Index of the content part
     */
    #[JsonProperty('content_index')]
    public float $contentIndex;

    /**
     * @var string $delta Text delta being added
     */
    #[JsonProperty('delta')]
    public string $delta;

    /**
     * @var string $itemId ID of the output item
     */
    #[JsonProperty('item_id')]
    public string $itemId;

    /**
     * @var float $outputIndex Index of the output item
     */
    #[JsonProperty('output_index')]
    public float $outputIndex;

    /**
     * @var 'response.output_text.delta' $type Event type
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @param array{
     *   contentIndex: float,
     *   delta: string,
     *   itemId: string,
     *   outputIndex: float,
     *   type: 'response.output_text.delta',
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->contentIndex = $values['contentIndex'];
        $this->delta = $values['delta'];
        $this->itemId = $values['itemId'];
        $this->outputIndex = $values['outputIndex'];
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
