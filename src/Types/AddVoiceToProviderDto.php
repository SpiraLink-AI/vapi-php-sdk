<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class AddVoiceToProviderDto extends JsonSerializableType
{
    /**
     * @var string $ownerId This is the owner_id of your shared voice which you want to add to your provider Account from Provider Voice Library
     */
    #[JsonProperty('ownerId')]
    public string $ownerId;

    /**
     * @var string $voiceId This is the voice_id of the shared voice which you want to add to your provider Account from Provider Voice Library
     */
    #[JsonProperty('voiceId')]
    public string $voiceId;

    /**
     * @var string $name This is the new name of the voice which you want to have once you have added voice to your provider Account from Provider Voice Library
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @param array{
     *   ownerId: string,
     *   voiceId: string,
     *   name: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->ownerId = $values['ownerId'];
        $this->voiceId = $values['voiceId'];
        $this->name = $values['name'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
