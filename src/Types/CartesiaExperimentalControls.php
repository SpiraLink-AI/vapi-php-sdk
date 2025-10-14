<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\Union;

final class CartesiaExperimentalControls extends JsonSerializableType
{
    /**
     * @var (
     *    'slowest'
     *   |'slow'
     *   |'normal'
     *   |'fast'
     *   |'fastest'
     *   |float
     * )|null $speed
     */
    #[JsonProperty('speed'), Union('string', 'float', 'null')]
    public string|float|null $speed;

    /**
     * @var ?value-of<CartesiaExperimentalControlsEmotion> $emotion
     */
    #[JsonProperty('emotion')]
    public ?string $emotion;

    /**
     * @param array{
     *   speed?: (
     *    'slowest'
     *   |'slow'
     *   |'normal'
     *   |'fast'
     *   |'fastest'
     *   |float
     * )|null,
     *   emotion?: ?value-of<CartesiaExperimentalControlsEmotion>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->speed = $values['speed'] ?? null;
        $this->emotion = $values['emotion'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
