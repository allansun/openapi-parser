<?php


namespace OpenAPI\Schema\V2;


use OpenAPI\Schema\AbstractObject;

class SecurityRequirement extends AbstractObject
{
    protected array $fieldPatterns = [
        '/.*/' => true
    ];
}