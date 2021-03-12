<?php


namespace OpenAPI\Schema\V2;


use OpenAPI\Schema\AbstractObject;

class Scopes extends AbstractObject
{
    protected array $fieldPatterns = [
        '/.*/'    => true,
        '/^x-.*/' => true,
    ];
}