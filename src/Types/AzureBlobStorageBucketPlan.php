<?php declare(strict_types=1);

namespace Vapi\Types;

use Vapi\Core\Json\JsonProperty;
use Vapi\Core\Json\JsonSerializableType;

final class AzureBlobStorageBucketPlan extends JsonSerializableType
{
    /**
     * @var string $connectionString This is the blob storage connection string for the Azure resource.
     */
    #[JsonProperty('connectionString')]
    public string $connectionString;

    /**
     * @var string $containerName This is the container name for the Azure blob storage.
     */
    #[JsonProperty('containerName')]
    public string $containerName;

    /**
     * This is the path where call artifacts will be stored.
     *
     * Usage:
     * - To store call artifacts in a specific folder, set this to the full path. Eg. "/folder-name1/folder-name2".
     * - To store call artifacts in the root of the bucket, leave this blank.
     *
     * @default "/"
     *
     * @var ?string $path
     */
    #[JsonProperty('path')]
    public ?string $path;

    /**
     * @param array{
     *   connectionString: string,
     *   containerName: string,
     *   path?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->connectionString = $values['connectionString'];
        $this->containerName = $values['containerName'];
        $this->path = $values['path'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
