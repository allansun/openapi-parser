<?php


namespace OpenAPI\Schema\V2;


use OpenAPI\Schema\AbstractObject;

class ExternalDocumentation extends AbstractObject
{
    /**
     * @var string|null
     */
    public ?string $description = null;

    /**
     * @var string
     */
    public string $url;

}