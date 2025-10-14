<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class ResponseTextDoneEvent extends JsonSerializableType
{
    /**
     * @var float $contentIndex Index of the content part
     */
    #[JsonProperty('content_index')]
    public float $contentIndex;

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
     * @var string $text Complete text content
     */
    #[JsonProperty('text')]
    public string $text;

    /**
     * @var 'response.output_text.done' $type Event type
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @param array{
     *   contentIndex: float,
     *   itemId: string,
     *   outputIndex: float,
     *   text: string,
     *   type: 'response.output_text.done',
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->contentIndex = $values['contentIndex'];
        $this->itemId = $values['itemId'];
        $this->outputIndex = $values['outputIndex'];
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
