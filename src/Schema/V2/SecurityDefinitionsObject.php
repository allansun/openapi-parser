<?php


namespace OpenAPI\Schema\V2;


use OpenAPI\Schema\AbstractObject;

class SecurityDefinitionsObject extends AbstractObject
{
    protected $fieldPatterns = [
        '/.*/'  => SecuritySchemeObject::class,
    ];

}