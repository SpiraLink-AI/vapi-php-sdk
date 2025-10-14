<?php declare(strict_types=1);

namespace Vapi\Types;

use Exception;
use Vapi\Core\Json\JsonDecoder;
use Vapi\Core\Json\JsonSerializableType;

final class TestSuiteTestsPaginatedResponseResultsItem extends JsonSerializableType
{
    /**
     * @var (
     *    'voice'
     *   |'chat'
     *   |'_unknown'
     * ) $type
     */
    public readonly string $type;

    /**
     * @var (
     *    TestSuiteTestVoice
     *   |TestSuiteTestChat
     *   |mixed
     * ) $value
     */
    public readonly mixed $value;

    /**
     * @param array{
     *   type: (
     *    'voice'
     *   |'chat'
     *   |'_unknown'
     * ),
     *   value: (
     *    TestSuiteTestVoice
     *   |TestSuiteTestChat
     *   |mixed
     * ),
     * } $values
     */
    private function __construct(
        array $values,
    ) {
        $this->type = $values['type'];
        $this->value = $values['value'];
    }

    /**
     * @param TestSuiteTestVoice $voice
     * @return TestSuiteTestsPaginatedResponseResultsItem
     */
    public static function voice(TestSuiteTestVoice $voice): TestSuiteTestsPaginatedResponseResultsItem
    {
        return new TestSuiteTestsPaginatedResponseResultsItem([
            'type' => 'voice',
            'value' => $voice,
        ]);
    }

    /**
     * @param TestSuiteTestChat $chat
     * @return TestSuiteTestsPaginatedResponseResultsItem
     */
    public static function chat(TestSuiteTestChat $chat): TestSuiteTestsPaginatedResponseResultsItem
    {
        return new TestSuiteTestsPaginatedResponseResultsItem([
            'type' => 'chat',
            'value' => $chat,
        ]);
    }

    /**
     * @return bool
     */
    public function isVoice(): bool
    {
        return $this->value instanceof TestSuiteTestVoice && $this->type === 'voice';
    }

    /**
     * @return TestSuiteTestVoice
     */
    public function asVoice(): TestSuiteTestVoice
    {
        if (! ($this->value instanceof TestSuiteTestVoice && $this->type === 'voice')) {
            throw new Exception(
                "Expected voice; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isChat(): bool
    {
        return $this->value instanceof TestSuiteTestChat && $this->type === 'chat';
    }

    /**
     * @return TestSuiteTestChat
     */
    public function asChat(): TestSuiteTestChat
    {
        if (! ($this->value instanceof TestSuiteTestChat && $this->type === 'chat')) {
            throw new Exception(
                "Expected chat; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }

    /**
     * @return array<mixed>
     */
    public function jsonSerialize(): array
    {
        $result = [];
        $result['type'] = $this->type;

        $base = parent::jsonSerialize();
        $result = array_merge($base, $result);

        switch ($this->type) {
            case 'voice':
                $value = $this->asVoice()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'chat':
                $value = $this->asChat()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case '_unknown':
            default:
                if (is_null($this->value)) {
                    break;
                }
                if ($this->value instanceof JsonSerializableType) {
                    $value = $this->value->jsonSerialize();
                    $result = array_merge($value, $result);
                } elseif (is_array($this->value)) {
                    $result = array_merge($this->value, $result);
                }
        }

        return $result;
    }

    /**
     * @param string $json
     */
    public static function fromJson(string $json): static
    {
        $decodedJson = JsonDecoder::decode($json);
        if (! is_array($decodedJson)) {
            throw new Exception("Unexpected non-array decoded type: " . gettype($decodedJson));
        }

        return self::jsonDeserialize($decodedJson);
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function jsonDeserialize(array $data): static
    {
        $args = [];
        if (! array_key_exists('type', $data)) {
            throw new Exception(
                "JSON data is missing property 'type'",
            );
        }
        $type = $data['type'];
        if (! (is_string($type))) {
            throw new Exception(
                "Expected property 'type' in JSON data to be string, instead received " . get_debug_type($data['type']),
            );
        }

        $args['type'] = $type;
        switch ($type) {
            case 'voice':
                $args['value'] = TestSuiteTestVoice::jsonDeserialize($data);
                break;
            case 'chat':
                $args['value'] = TestSuiteTestChat::jsonDeserialize($data);
                break;
            case '_unknown':
            default:
                $args['type'] = '_unknown';
                $args['value'] = $data;
        }

        // @phpstan-ignore-next-line
        return new static($args);
    }
}
