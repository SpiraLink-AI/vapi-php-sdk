<?php declare(strict_types=1);

namespace Vapi\Core\Client;

enum HttpMethod
{
    case GET;
    case POST;
    case PUT;
    case PATCH;
    case DELETE;
}
