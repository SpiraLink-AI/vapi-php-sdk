<?php declare(strict_types=1);

namespace Vapi\Core\Client;

abstract readonly class BaseApiRequest
{
    /**
     * @param string $baseUrl The base URL for the request
     * @param string $path The path for the request
     * @param HttpMethod $method The HTTP method for the request
     * @param array<string, string> $headers Additional headers for the request (optional)
     * @param array<string, mixed> $query Query parameters for the request (optional)
     */
    public function __construct(
        public string $baseUrl,
        public string $path,
        public HttpMethod $method,
        public array $headers = [],
        public array $query = [],
    ) {}
}
