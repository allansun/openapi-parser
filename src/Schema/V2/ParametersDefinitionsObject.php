<?php


namespace OpenAPI\Schema\V2;


use OpenAPI\Schema\AbstractObject;

class ParametersDefinitionsObject extends AbstractObject
{
    protected $fieldPatterns = [
        '/.*/'  => ParameterObject::class,
    ];

}