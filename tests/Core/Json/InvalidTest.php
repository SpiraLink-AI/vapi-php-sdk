<?php declare(strict_types=1);

namespace Vapi\Tests\Core\Json;

use PHPUnit\Framework\TestCase;
use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class Invalid extends JsonSerializableType
{
    /**
     * @var int $integerProperty
     */
    #[JsonProperty('integer_property')]
    public int $integerProperty;

    /**
     * @param array{
     *   integerProperty: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->integerProperty = $values['integerProperty'];
    }
}

final class InvalidTest extends TestCase
{
    public function testInvalidJsonThrowsException(): void
    {
        $this->expectException(\TypeError::class);
        $json = json_encode(
            [
                'integer_property' => 'not_an_integer',
            ],
            JSON_THROW_ON_ERROR
        );
        Invalid::fromJson($json);
    }
}
