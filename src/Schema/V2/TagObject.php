<?php


namespace OpenAPI\Schema\V2;


use OpenAPI\Schema\AbstractObject;

class TagObject extends AbstractObject
{
    /** @var string */
    public $name;
    /** @var string */
    public $description;
    /** @var ExternalDocumentationObject */
    public $externalDocs;

}