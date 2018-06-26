<?php

namespace OpenAPI\Schema\V2;

use OpenAPI\Schema\AbstractObject;

class SwaggerObject extends AbstractObject
{

    /**
     * @var string
     */
    public $swagger = "2.0";

    /**
     * @var InfoObject
     */
    public $info;

    /**
     * @var string
     */
    public $host;

    /**
     * @var string
     */
    public $basePath;

    /**
     * @var string[]
     */
    public $schemes;

    /**
     * @var string[]
     */
    public $consumes;

    /**
     * @var string[]
     */
    public $produces;

    /**
     * @var PathsObject
     */
    public $paths;

    /**
     * @var DefinitionsObject
     */
    public $definitions;

    /**
     * @var ParametersDefinitionsObject
     */
    public $parameters;

    /**
     * @var ResponsesDefinitionsObject
     */
    public $responses;

    /**
     * @var SecurityDefinitionsObject
     */
    public $securityDefinitions;

    /**
     * @var SecurityRequirementObject
     */
    public $security;

    /**
     * @var TagObject[]
     */
    public $tags;

    /**
     * @var ExternalDocumentationObject
     */
    public $externalDocs;
}