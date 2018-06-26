<?php


namespace OpenAPI\Schema\V2;


use OpenAPI\Schema\AbstractObject;

class PathItemObject extends AbstractObject
{
    /**
     * @var string
     */
    public $_ref;

    /**
     * @var OperationObject
     */
    public $get;

    /**
     * @var OperationObject
     */
    public $put;

    /**
     * @var OperationObject
     */
    public $post;

    /**
     * @var OperationObject
     */
    public $delete;

    /**
     * @var OperationObject
     */
    public $options;

    /**
     * @var OperationObject
     */
    public $head;

    /**
     * @var OperationObject
     */
    public $patch;

    /**
     * @var ParameterObject[]|ReferenceObject[]
     */
    public $parameters;
}