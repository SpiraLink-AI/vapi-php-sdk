<?php declare(strict_types=1);

namespace Vapi\Types;

use DateTime;
use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;
use Vapi\Core\Types\ArrayType;
use Vapi\Core\Types\Date;

final class File extends JsonSerializableType
{
    /**
     * @var ?'file' $object
     */
    #[JsonProperty('object')]
    public ?string $object;

    /**
     * @var ?value-of<FileStatus> $status
     */
    #[JsonProperty('status')]
    public ?string $status;

    /**
     * @var ?string $name This is the name of the file. This is just for your own reference.
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?string $originalName
     */
    #[JsonProperty('originalName')]
    public ?string $originalName;

    /**
     * @var ?float $bytes
     */
    #[JsonProperty('bytes')]
    public ?float $bytes;

    /**
     * @var ?string $purpose
     */
    #[JsonProperty('purpose')]
    public ?string $purpose;

    /**
     * @var ?string $mimetype
     */
    #[JsonProperty('mimetype')]
    public ?string $mimetype;

    /**
     * @var ?string $key
     */
    #[JsonProperty('key')]
    public ?string $key;

    /**
     * @var ?string $path
     */
    #[JsonProperty('path')]
    public ?string $path;

    /**
     * @var ?string $bucket
     */
    #[JsonProperty('bucket')]
    public ?string $bucket;

    /**
     * @var ?string $url
     */
    #[JsonProperty('url')]
    public ?string $url;

    /**
     * @var ?string $parsedTextUrl
     */
    #[JsonProperty('parsedTextUrl')]
    public ?string $parsedTextUrl;

    /**
     * @var ?float $parsedTextBytes
     */
    #[JsonProperty('parsedTextBytes')]
    public ?float $parsedTextBytes;

    /**
     * @var ?array<string, mixed> $metadata
     */
    #[JsonProperty('metadata'), ArrayType(['string' => 'mixed'])]
    public ?array $metadata;

    /**
     * @var string $id This is the unique identifier for the file.
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $orgId This is the unique identifier for the org that this file belongs to.
     */
    #[JsonProperty('orgId')]
    public string $orgId;

    /**
     * @var DateTime $createdAt This is the ISO 8601 date-time string of when the file was created.
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $createdAt;

    /**
     * @var DateTime $updatedAt This is the ISO 8601 date-time string of when the file was last updated.
     */
    #[JsonProperty('updatedAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $updatedAt;

    /**
     * @param array{
     *   id: string,
     *   orgId: string,
     *   createdAt: DateTime,
     *   updatedAt: DateTime,
     *   object?: ?'file',
     *   status?: ?value-of<FileStatus>,
     *   name?: ?string,
     *   originalName?: ?string,
     *   bytes?: ?float,
     *   purpose?: ?string,
     *   mimetype?: ?string,
     *   key?: ?string,
     *   path?: ?string,
     *   bucket?: ?string,
     *   url?: ?string,
     *   parsedTextUrl?: ?string,
     *   parsedTextBytes?: ?float,
     *   metadata?: ?array<string, mixed>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->object = $values['object'] ?? null;
        $this->status = $values['status'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->originalName = $values['originalName'] ?? null;
        $this->bytes = array_key_exists('bytes', $values) && $values['bytes'] ? (float) $values['bytes'] : null;
        $this->purpose = $values['purpose'] ?? null;
        $this->mimetype = $values['mimetype'] ?? null;
        $this->key = $values['key'] ?? null;
        $this->path = $values['path'] ?? null;
        $this->bucket = $values['bucket'] ?? null;
        $this->url = $values['url'] ?? null;
        $this->parsedTextUrl = $values['parsedTextUrl'] ?? null;
        $this->parsedTextBytes = array_key_exists('parsedTextBytes', $values) && $values['parsedTextBytes'] ? (float) $values['parsedTextBytes'] : null;
        $this->metadata = $values['metadata'] ?? null;
        $this->id = $values['id'];
        $this->orgId = $values['orgId'];
        $this->createdAt = $values['createdAt'];
        $this->updatedAt = $values['updatedAt'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
