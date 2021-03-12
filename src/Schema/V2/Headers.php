<?php


namespace OpenAPI\Schema\V2;


use OpenAPI\Schema\AbstractObject;

class Headers extends AbstractObject
{
    protected array $fieldPatterns = [
        '/^x-.*/' => true,
        '/.*/'  => Header::class,
    ];

}