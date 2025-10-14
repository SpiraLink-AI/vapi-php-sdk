<?php declare(strict_types=1);

namespace Vapi\Types;

enum CreateAzureCredentialDtoService: string
{
    case Speech = 'speech';
    case BlobStorage = 'blob_storage';
}
