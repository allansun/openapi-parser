<?php


namespace OpenAPI\Schema\V2;


use OpenAPI\Schema\AbstractObject;

class Tag extends AbstractObject
{
    /**
     * @var string
     */
    public string $name;

    /**
     * @var string|null
     */
    public ?string $description = null;
    
    /**
     * @var ExternalDocumentation|null
     */
    public ?ExternalDocumentation $externalDocs = null;

}