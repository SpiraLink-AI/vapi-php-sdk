<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class BackgroundSpeechDenoisingPlan extends JsonSerializableType
{
    /**
     * @var ?SmartDenoisingPlan $smartDenoisingPlan Whether smart denoising using Krisp is enabled.
     */
    #[JsonProperty('smartDenoisingPlan')]
    public ?SmartDenoisingPlan $smartDenoisingPlan;

    /**
     * Whether Fourier denoising is enabled. Note that this is experimental and may not work as expected.
     *
     * This can be combined with smart denoising, and will be run afterwards.
     *
     * @var ?FourierDenoisingPlan $fourierDenoisingPlan
     */
    #[JsonProperty('fourierDenoisingPlan')]
    public ?FourierDenoisingPlan $fourierDenoisingPlan;

    /**
     * @param array{
     *   smartDenoisingPlan?: ?SmartDenoisingPlan,
     *   fourierDenoisingPlan?: ?FourierDenoisingPlan,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->smartDenoisingPlan = $values['smartDenoisingPlan'] ?? null;
        $this->fourierDenoisingPlan = $values['fourierDenoisingPlan'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
