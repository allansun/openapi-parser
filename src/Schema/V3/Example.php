<?php

namespace OpenAPI\Schema\V3;

use OpenAPI\Schema\AbstractObject;

class Example extends AbstractObject
{
    /**
     * Short description for the example.
     *
     * @var string|null
     */
    public ?string $summary = null;

    /**
     * Long description for the example. CommonMark syntax MAY be used for rich text representation.
     *
     * @var string|null
     */
    public ?string $description = null;

    /**
     * Embedded literal example. The value field and externalValue field are mutually exclusive. To represent examples
     * of media types that cannot naturally represented in JSON or YAML, use a string value to contain the example,
     * escaping where necessary.
     *
     * @var null
     */
    public $value = null;

    /**
     * A URL that points to the literal example. This provides the capability to reference examples that cannot easily
     * be included in JSON or YAML documents. The value field and externalValue field are mutually exclusive.
     *
     * @var string|null
     */
    public ?string $externalValue = null;

    protected array $fieldPatterns = [
        '/^x-.*/' => true
    ];
}
