<?php

namespace OpenAPI\Schema\V3;

class ParameterStyle extends \OpenAPI\Schema\AbstractObject
{

    /**
     * Path-style parameters defined by [RFC6570]
     *
     * @var mixed|null
     */
    public $matrix = null;

    /**
     * Label style parameters defined by [RFC6570]
     *
     * @var mixed|null
     */
    public $label = null;

    /**
     * Form style parameters defined by [RFC6570]. This option replaces collectionFormat with a csv (when explode is
     * false) or multi (when explode is true) value from OpenAPI 2.0.
     *
     * @var mixed|null
     */
    public $form = null;

    /**
     * Simple style parameters defined by [RFC6570]. This option replaces collectionFormat with a csv value from
     * OpenAPI 2.0.
     *
     * @var array|null
     */
    public ?array $simple = null;

    /**
     * Space separated array values. This option replaces collectionFormat equal to ssv from OpenAPI 2.0.
     *
     * @var array|null
     */
    public ?array $spaceDelimited = null;

    /**
     * Pipe separated array values. This option replaces collectionFormat equal to pipes from OpenAPI 2.0.
     *
     * @var array|null
     */
    public ?array $pipeDelimited = null;

    /**
     * Provides a simple way of rendering nested objects using form parameters.
     *
     * @var array|null
     */
    public ?array $deepObject = null;
}
