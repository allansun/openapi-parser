<?php


namespace OpenAPI\Schema\V2;


use OpenAPI\Schema\AbstractObject;

class XMLObject extends AbstractObject
{

    /**
     * @var string|null
     */
    public ?string $name = null;
    /**
     * @var string|null
     */
    public ?string $namespace = null;
    /**
     * @var string|null
     */
    public ?string $prefix = null;
    /**
     * @var boolean
     */
    public ?bool $attribute = false;
    /**
     * @var boolean
     */
    public ?bool $wrapped = false;

}