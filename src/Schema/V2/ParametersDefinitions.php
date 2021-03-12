<?php


namespace OpenAPI\Schema\V2;


use OpenAPI\Schema\AbstractObject;

class ParametersDefinitions extends AbstractObject
{
    protected array $fieldPatterns = [
        '/.*/'    => Parameter::class,
        '/^x-.*/' => true,
    ];

}