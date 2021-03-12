<?php

namespace OpenAPI\Schema\V3;

use OpenAPI\Schema\AbstractObject;

class Responses extends AbstractObject
{
    /**
     * The documentation of responses other than the ones declared for specific HTTP response codes. Use this field to
     * cover undeclared responses. A Reference Object can link to a response that the OpenAPI Object’s
     * components/responses section defines.
     *
     * @var Response|Reference|null
     */
    public $default = null;

    protected array $fieldPatterns = [
        '/^[1-5][0-9][0-9]$/' => [Response::class, Reference::class],
        '/^x-.*/'             => true
    ];
}
