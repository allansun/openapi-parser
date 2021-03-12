<?php


namespace OpenAPI\Schema\V2;


use OpenAPI\Schema\AbstractObject;

class License extends AbstractObject
{
    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $url;
}