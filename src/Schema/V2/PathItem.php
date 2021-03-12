<?php


namespace OpenAPI\Schema\V2;


use OpenAPI\Schema\AbstractObject;

class PathItem extends AbstractObject
{
    /**
     * @var string
     */
    public string $_ref;

    /**
     * @var Operation|null
     */
    public ?Operation $get = null;

    /**
     * @var Operation|null
     */
    public ?Operation $put = null;

    /**
     * @var Operation|null
     */
    public ?Operation $post = null;

    /**
     * @var Operation|null
     */
    public ?Operation $delete = null;

    /**
     * @var Operation|null
     */
    public ?Operation $options = null;

    /**
     * @var Operation|null
     */
    public ?Operation $head = null;

    /**
     * @var Operation|null
     */
    public ?Operation $patch = null;

    /**
     * @var Parameter[]|Reference[]
     */
    public ?array $parameters = null;
}