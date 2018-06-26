<?php


namespace OpenAPI\Schema\V2;


use OpenAPI\Schema\AbstractObject;

class DefinitionsObject extends AbstractObject
{

    protected $fieldPatterns = [
        '/.*/' => SchemaObject::class,
    ];

}