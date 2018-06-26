<?php


namespace OpenAPI\Schema\V2;


use OpenAPI\Schema\AbstractObject;

class HeadersObject extends AbstractObject
{
    protected $fieldPatterns = [
        '/^x-.*/' => true,
        '/.*/'  => HeaderObject::class,
    ];

}