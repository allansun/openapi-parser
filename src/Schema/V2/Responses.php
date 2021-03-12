<?php


namespace OpenAPI\Schema\V2;


use OpenAPI\Schema\AbstractObject;

class Responses extends AbstractObject
{
    protected array $fieldPatterns = [
        '/^[1-5][0-9][0-9]$/' => [Response::class, Reference::class],
        '/^x-.*/' => true
    ];

    /**
     * @var Response|Reference
     */
    public $default;

}