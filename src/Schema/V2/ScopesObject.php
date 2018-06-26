<?php


namespace OpenAPI\Schema\V2;


use OpenAPI\Schema\AbstractObject;

class ScopesObject extends AbstractObject
{
    protected $fieldPatterns = [
        '/.*/' => true
    ];
}