<?php


namespace OpenAPI\Schema\V2;


use OpenAPI\Schema\AbstractObject;

class Definitions extends AbstractObject
{

    protected array $fieldPatterns = [
        '/.*/' => Schema::class,
    ];

}