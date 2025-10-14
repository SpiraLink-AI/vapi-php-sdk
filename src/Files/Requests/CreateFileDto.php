<?php declare(strict_types=1);

namespace Vapi\Files\Requests;

use Vapi\Core\Json\JsonSerializableType;
use Vapi\Utils\File;

final class CreateFileDto extends JsonSerializableType
{
    /**
     * @var File $file
     */
    public File $file;

    /**
     * @param array{
     *   file: File,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->file = $values['file'];
    }
}
