<?php

namespace OpenAPI\Schema\V3;

use OpenAPI\Schema\AbstractObject;

class ExternalDocumentation extends AbstractObject
{
    /**
     * A short description of the target documentation. CommonMark syntax MAY be used for rich text representation.
     *
     * @var string|null
     */
    public ?string $description = null;

    /**
     * REQUIRED. The URL for the target documentation. Value MUST be in the format of a URL.
     *
     * @var string
     */
    public string $url;

    protected array $fieldPatterns = [
        '/^x-.*/' => true
    ];
}
