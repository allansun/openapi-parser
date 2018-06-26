<?php


namespace OpenAPI\Schema\V2;


use OpenAPI\Schema\AbstractObject;

class ContactObject extends AbstractObject
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $url;

    /**
     * @var string
     */
    public $email;
}