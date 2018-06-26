<?php


namespace OpenAPI\Schema\V2;


use OpenAPI\Schema\AbstractObject;

class ExampleObject extends AbstractObject
{
    protected $fieldPatterns = [
        '/^x-.*/' => true,
        '/.*/' => true,
    ];
}