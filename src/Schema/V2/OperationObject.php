<?php


namespace OpenAPI\Schema\V2;


use OpenAPI\Schema\AbstractObject;

class OperationObject extends AbstractObject
{
    /**
     * @var string[]
     */
    public $tags;

    /**
     * @var string
     */
    public $summary;

    /**
     * @var string
     */
    public $description;

    /**
     * @var ExternalDocumentationObject
     */
    public $externalDocs;

    /**
     * @var string
     */
    public $operationId;

    /**
     * @var string[]
     */
    public $consumes;

    /**
     * @var string[]
     */
    public $produces;

    /**
     * @var ParameterObject[]|ReferenceObject[]
     */
    public $parameters;

    /**
     * @var ResponsesObject
     */
    public $responses;

    /**
     * @var string[]
     */
    public $schemes;

    /**
     * @var boolean
     */
    public $deprecated;

    /**
     * @var SecurityRequirementObject[]
     */
    public $security;
}