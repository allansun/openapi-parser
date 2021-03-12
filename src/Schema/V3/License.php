<?php

namespace OpenAPI\Schema\V3;

use OpenAPI\Schema\AbstractObject;

class License extends AbstractObject
{

    /**
     * REQUIRED. The license name used for the API.
     *
     * @var string
     */
    public string $name;

    /**
     * A URL to the license used for the API. MUST be in the format of a URL.
     *
     * @var string|null
     */
    public ?string $url = null;

    protected array $fieldPatterns = [
        '/^x-.*/' => true
    ];
}
