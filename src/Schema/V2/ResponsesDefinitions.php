<?php


namespace OpenAPI\Schema\V2;


use OpenAPI\Schema\AbstractObject;

class ResponsesDefinitions extends AbstractObject
{
    protected array $fieldPatterns = [
        '/.*/'    => Response::class,
        '/^x-.*/' => true,
    ];

}