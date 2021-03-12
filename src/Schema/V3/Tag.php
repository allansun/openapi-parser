<?php

namespace OpenAPI\Schema\V3;

use OpenAPI\Schema\AbstractObject;

class Tag extends AbstractObject
{
    /**
     * REQUIRED. The name of the tag.
     *
     * @var string
     */
    public string $name;

    /**
     * A short description for the tag. CommonMark syntax MAY be used for rich text representation.
     *
     * @var string|null
     */
    public ?string $description = null;

    /**
     * Additional external documentation for this tag.
     *
     * @var ExternalDocumentation|null
     */
    public ?ExternalDocumentation $externalDocs = null;

    protected array $fieldPatterns = [
        '/^x-.*/' => true
    ];
}
