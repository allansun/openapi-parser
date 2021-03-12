<?php

namespace OpenAPI\Schema\V3;

use OpenAPI\Schema\AbstractObject;

class OpenAPI extends AbstractObject
{

    /**
     * REQUIRED. This string MUST be the semantic version number of the OpenAPI Specification version that the OpenAPI
     * document uses. The openapi field SHOULD be used by tooling specifications and clients to interpret the OpenAPI
     * document. This is not related to the API info.version string.
     *
     * @var string
     */
    public string $openapi;

    /**
     * REQUIRED. Provides metadata about the API. The metadata MAY be used by tooling as required.
     *
     * @var Info
     */
    public Info $info;

    /**
     * An array of Server Objects, which provide connectivity information to a target server. If the servers property
     * is not provided, or is an empty array, the default value would be a Server Object with a url value of /.
     *
     * @var Server[]
     */
    public array $servers = [];


    /**
     * REQUIRED. The available paths and operations for the API.
     *
     * @var Paths
     */
    public Paths $paths;

    /**
     * An element to hold various schemas for the specification.
     *
     * @var Components|null
     */
    public ?Components $components;

    /**
     * A declaration of which security mechanisms can be used across the API. The list of values includes alternative
     * security requirement objects that can be used. Only one of the security requirement objects need to be satisfied
     * to authorize a request. Individual operations can override this definition. To make security optional, an empty
     * security requirement ({}) can be included in the array.
     *
     * @var SecurityRequirement[]
     */
    public array $securiy = [];

    /**
     * A list of tags used by the specification with additional metadata. The order of the tags can be used to reflect
     * on their order by the parsing tools. Not all tags that are used by the Operation Object must be declared. The
     * tags that are not declared MAY be organized randomly or based on the tools’ logic. Each tag name in the list
     * MUST be unique.
     *
     * @var Tag[]
     */
    public array $tags = [];

    /**
     * Additional external documentation.
     *
     * @var ExternalDocumentation|null
     */
    public ?ExternalDocumentation $externalDocs = null;

    protected array $fieldPatterns = [
        '/^x-.*/' => true
    ];
}
