<?php


namespace OpenAPI\Schema\V2;


use OpenAPI\Schema\AbstractObject;

class PathsObject extends AbstractObject
{
    protected $fieldPatterns = [
        '/^x-.*/' => true,
        '/\/.*/'  => PathItemObject::class,
    ];
}