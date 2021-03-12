<?php

namespace OpenAPI\Schema\V3;

use OpenAPI\Schema\AbstractObject;

class Server extends AbstractObject
{
    /**
     * REQUIRED. A URL to the target host. This URL supports Server Variables and MAY be relative, to indicate that the
     * host location is relative to the location where the OpenAPI document is being served. Variable substitutions
     * will be made when a variable is named in {brackets}.
     *
     * @var string
     */
    public string $url;

    /**
     * An optional string describing the host designated by the URL. CommonMark syntax MAY be used for rich text
     * representation.
     *
     * @var string|null
     */
    public ?string $description;

    /**
     * A map between a variable name and its value. The value is used for substitution in the server’s URL template.
     * Map[string, ServerVariable]
     *
     * @var array
     */
    public array $variables = [];

    protected array $fieldPatterns = [
        '/^x-.*/' => true
    ];

}
