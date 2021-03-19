<?php

namespace OpenAPI\Schema\V3;

use OpenAPI\Schema\AbstractObject;

class MediaType extends AbstractObject
{

    /**
     * The schema defining the content of the request, response, or parameter.
     *
     * @var Schema|Reference
     */
    public $schema = null;

    /**
     * Example of the media type. The example object SHOULD be in the correct format as specified by the media type.
     * The example field is mutually exclusive of the examples field. Furthermore, if referencing a schema which
     * contains an example, the example value SHALL override the example provided by the schema.
     *
     * @var mixed
     */
    public $example = null;

    /**
     * Examples of the media type. Each example object SHOULD match the media type and specified schema if present. The
     * examples field is mutually exclusive of the example field. Furthermore, if referencing a schema which contains
     * an example, the examples value SHALL override the example provided by the schema.
     *
     * @var Example[]|Reference[]|null
     */
    public ?array $examples = [];

    /**
     * A map between a property name and its encoding information. The key, being the property name, MUST exist in the
     * schema as a property. The encoding object SHALL only apply to requestBody objects when the media type is
     * multipart or application/x-www-form-urlencoded.
     *
     * @var Encoding[]|null
     */
    public ?array $encoding = [];

    protected array $fieldPatterns = [
        '/.*/' => true
    ];
}
