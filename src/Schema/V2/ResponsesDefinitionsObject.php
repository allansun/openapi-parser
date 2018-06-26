<?php


namespace OpenAPI\Schema\V2;


use OpenAPI\Schema\AbstractObject;

class ResponsesDefinitionsObject extends AbstractObject
{
    protected $fieldPatterns = [
        '/.*/'  => ResponseObject::class,
    ];

}