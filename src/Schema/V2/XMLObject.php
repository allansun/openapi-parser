<?php


namespace OpenAPI\Schema\V2;


use OpenAPI\Schema\AbstractObject;

class XMLObject extends AbstractObject
{

    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $namespace;
    /**
     * @var string
     */
    public $prefix;
    /**
     * @var boolean
     */
    public $attribute;
    /**
     * @var boolean
     */
    public $wrapped;

}