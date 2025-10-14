<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class LivekitSmartEndpointingPlan extends JsonSerializableType
{
    /**
     * @var value-of<LivekitSmartEndpointingPlanProvider> $provider This is the provider for the smart endpointing plan.
     */
    #[JsonProperty('provider')]
    public string $provider;

    /**
     * This expression describes how long the bot will wait to start speaking based on the likelihood that the user has reached an endpoint.
     *
     * This is a millisecond valued function. It maps probabilities (real numbers on [0,1]) to milliseconds that the bot should wait before speaking ([0, \infty]). Any negative values that are returned are set to zero (the bot can't start talking in the past).
     *
     * A probability of zero represents very high confidence that the caller has stopped speaking, and would like the bot to speak to them. A probability of one represents very high confidence that the caller is still speaking.
     *
     * Under the hood, this is parsed into a mathjs expression. Whatever you use to write your expression needs to be valid with respect to mathjs
     *
     * @default "20 + 500 * sqrt(x) + 2500 * x^3"
     *
     * @var ?string $waitFunction
     */
    #[JsonProperty('waitFunction')]
    public ?string $waitFunction;

    /**
     * @param array{
     *   provider: value-of<LivekitSmartEndpointingPlanProvider>,
     *   waitFunction?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->provider = $values['provider'];
        $this->waitFunction = $values['waitFunction'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
