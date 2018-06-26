<?php


namespace OpenAPI\Schema\V2;


use OpenAPI\Schema\AbstractObject;

class SecurityRequirementObject extends AbstractObject
{
    protected $fieldPatterns = [
        '/.*/' => true
    ];
}