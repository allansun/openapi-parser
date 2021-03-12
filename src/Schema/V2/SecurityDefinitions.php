<?php


namespace OpenAPI\Schema\V2;


use OpenAPI\Schema\AbstractObject;

class SecurityDefinitions extends AbstractObject
{
    protected array $fieldPatterns = [
        '/.*/'    => SecurityScheme::class,
        '/^x-.*/' => true,
    ];

}