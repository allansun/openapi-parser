<?php

namespace OpenAPI\Schema\V3;

use OpenAPI\Schema\AbstractObject;

class Components extends AbstractObject
{

    /**
     * An object to hold reusable Schema Objects.
     *
     * @var Schema[]|Reference[]|null
     */
    public ?array $schemas = null;
    /**
     * An object to hold reusable Response Objects.
     *
     * @var Responses[]|Reference[]|null
     */
    public ?array $responses = null;
    /**
     * An object to hold reusable Parameter Objects.
     *
     * @var Parameter[]|Reference[]|null
     */
    public ?array $parameters = null;
    /**
     * An object to hold reusable Example Objects.
     *
     * @var Example[]|Reference[]|null
     */
    public ?array $examplesemas = null;
    /**
     * An object to hold reusable Request Body Objects.
     *
     * @var RequestBody[]|Reference[]|null
     */
    public ?array $requestBodies = null;
    /**
     * An object to hold reusable Header Objects.
     *
     * @var Header[]|Reference[]|null
     */
    public ?array $headers = null;
    /**
     * An object to hold reusable Security Scheme Objects.
     *
     * @var SecurityScheme[]|Reference[]|null
     */
    public ?array $securitySchemes = null;
    /**
     * An object to hold reusable Link Objects.
     *
     * @var Link[]|Reference[]|null
     */
    public ?array $links = null;
    /**
     * An object to hold reusable Callback Objects.
     *
     * @var Callback[]|Reference[]|null
     */
    public ?array $callbacks = null;

    protected array $fieldPatterns = [
        '/^x-.*/' => true
    ];

}
