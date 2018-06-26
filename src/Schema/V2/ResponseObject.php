<?php


namespace OpenAPI\Schema\V2;


use OpenAPI\Schema\AbstractObject;

class ResponseObject extends AbstractObject
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var SchemaObject
     */
    public $schema;

    /**
     * @var HeadersObject
     */
    public $headers;

    /**
     * @var ExampleObject
     */
    public $examples;
}