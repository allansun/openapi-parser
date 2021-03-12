<?php


namespace OpenAPI\Schema\V2;


use OpenAPI\Schema\AbstractObject;

class Example extends AbstractObject
{
    protected array $fieldPatterns = [
        '/^x-.*/' => true,
        '/.*/' => true,
    ];
}