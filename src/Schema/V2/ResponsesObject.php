<?php


namespace OpenAPI\Schema\V2;


use OpenAPI\Schema\AbstractObject;

class ResponsesObject extends AbstractObject
{
    protected $fieldPatterns = [
        '/^[1-5][0-9][0-9]$/' => [ResponseObject::class, ReferenceObject::class],
        '/^x-.*/' => true
    ];

    /**
     * @var ResponseObject|ReferenceObject
     */
    public $default;

}