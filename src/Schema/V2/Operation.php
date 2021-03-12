<?php


namespace OpenAPI\Schema\V2;


use OpenAPI\Schema\AbstractObject;

class Operation extends AbstractObject
{
    /**
     * @var string[]
     */
    public ?array $tags = null;

    /**
     * @var string|null
     */
    public ?string $summary = null;

    /**
     * @var string|null
     */
    public ?string $description = null;

    /**
     * @var ExternalDocumentation|null
     */
    public ?ExternalDocumentation $externalDocs = null;

    /**
     * @var string|null
     */
    public ?string $operationId = null;

    /**
     * @var string[]
     */
    public ?array $consumes = null;

    /**
     * @var string[]
     */
    public ?array $produces = null;

    /**
     * @var Parameter[]|Reference[]
     */
    public ?array $parameters = null;

    /**
     * @var Responses
     */
    public Responses $responses;

    /**
     * @var string[]
     */
    public ?array $schemes = null;

    /**
     * @var boolean
     */
    public ?bool $deprecated = false;

    /**
     * @var SecurityRequirement[]
     */
    public ?array $security = null;
}