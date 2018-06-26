<?php


namespace OpenAPI\Schema\V2;


use OpenAPI\Schema\AbstractObject;

class ExternalDocumentationObject extends AbstractObject
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $url;

}