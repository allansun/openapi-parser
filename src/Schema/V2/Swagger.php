<?php

namespace OpenAPI\Schema\V2;

use OpenAPI\Schema\AbstractObject;

class Swagger extends AbstractObject
{

    /**
     * @var string
     */
    public string $swagger = "2.0";

    /**
     * @var Info
     */
    public Info $info;

    /**
     * @var string|null
     */
    public ?string $host = null;

    /**
     * @var string|null
     */
    public ?string $basePath = null;

    /**
     * @var string[]
     */
    public ?array $schemes = null;

    /**
     * @var string[]
     */
    public ?array $consumes = null;

    /**
     * @var string[]
     */
    public ?array $produces = null;

    /**
     * @var Paths
     */
    public Paths $paths;

    /**
     * @var Definitions|null
     */
    public ?Definitions $definitions = null;

    /**
     * @var ParametersDefinitions|null
     */
    public ?ParametersDefinitions $parameters = null;

    /**
     * @var ResponsesDefinitions|null
     */
    public ?ResponsesDefinitions $responses = null;

    /**
     * @var SecurityDefinitions|null
     */
    public ?SecurityDefinitions $securityDefinitions = null;

    /**
     * @var SecurityRequirement|null
     */
    public ?SecurityRequirement $security = null;

    /**
     * @var Tag[]
     */
    public ?array $tags = null;

    /**
     * @var ExternalDocumentation|null
     */
    public ?ExternalDocumentation $externalDocs = null;
}